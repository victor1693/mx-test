-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2023 a las 03:50:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mexico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `token` varchar(75) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(75) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `token`, `email`, `password`, `nombre`, `apellido`) VALUES
(1, '8f935bc6-db71-46d9-ba70-430f2f351f54', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Victor', 'Fernández');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compras`
--

CREATE TABLE `tbl_compras` (
  `id` int(11) NOT NULL,
  `token` varchar(75) NOT NULL,
  `cliente` varchar(40) NOT NULL,
  `producto` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_compras`
--

INSERT INTO `tbl_compras` (`id`, `token`, `cliente`, `producto`, `status`, `created`, `updated`) VALUES
(1, 'fd954146-fc37-4223-8bb6-a4eb28824b54', 'correo@gmail.com', 3, 'Facturada', '2023-01-07 01:50:05', '2023-01-07 01:50:05'),
(2, '8098bdb6-07e5-4a3c-8cb6-937bf7bb5772', 'correo@gmail.com', 1, 'Facturada', '2023-01-07 01:50:05', '2023-01-07 01:50:05'),
(7, 'c280190b-78e4-4138-b590-49d74fae6c78', 'correo@gmail.com', 3, 'Facturada', '2023-01-07 01:50:05', '2023-01-07 01:50:05'),
(8, 'c280190b-78e4-4138-b590-49d74fae6c78', 'correo@gmail.com', 4, 'Facturada', '2023-01-07 01:50:05', '2023-01-07 01:50:05'),
(9, 'c3a0925d-14cd-4f35-a88f-73ba7c0bbc13', 'correo@gmail.com', 1, 'Facturada', '2023-01-07 01:50:05', '2023-01-07 01:50:05'),
(10, 'c3a0925d-14cd-4f35-a88f-73ba7c0bbc13', 'correo@gmail.com', 3, 'Facturada', '2023-01-07 01:50:05', '2023-01-07 01:50:05'),
(11, 'c3a0925d-14cd-4f35-a88f-73ba7c0bbc13', 'correo@gmail.com', 4, 'Facturada', '2023-01-07 01:50:05', '2023-01-07 01:50:05'),
(12, '33750309-666b-4339-bd5b-cc831d2cf9f9', 'carmen@gmail.com', 4, 'Facturada', '2023-01-07 02:10:00', '2023-01-07 02:10:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compras_status`
--

CREATE TABLE `tbl_compras_status` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_compras_status`
--

INSERT INTO `tbl_compras_status` (`id`, `status`) VALUES
(2, 'Facturada'),
(1, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura`
--

CREATE TABLE `tbl_factura` (
  `id` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `token_compra` varchar(75) NOT NULL,
  `sub_total` double NOT NULL,
  `impuesto` double NOT NULL,
  `total` double NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_factura`
--

INSERT INTO `tbl_factura` (`id`, `id_compra`, `token_compra`, `sub_total`, `impuesto`, `total`, `created`) VALUES
(36, 1, 'fd954146-fc37-4223-8bb6-a4eb28824b54', 110, 25, 137.5, '2023-01-07 01:50:05'),
(37, 2, '8098bdb6-07e5-4a3c-8cb6-937bf7bb5772', 15, 5, 15.75, '2023-01-07 01:50:05'),
(38, 7, 'c280190b-78e4-4138-b590-49d74fae6c78', 110, 25, 137.5, '2023-01-07 01:50:05'),
(39, 8, 'c280190b-78e4-4138-b590-49d74fae6c78', 400, 34, 536, '2023-01-07 01:50:05'),
(40, 9, 'c3a0925d-14cd-4f35-a88f-73ba7c0bbc13', 15, 5, 15.75, '2023-01-07 01:50:05'),
(41, 10, 'c3a0925d-14cd-4f35-a88f-73ba7c0bbc13', 110, 25, 137.5, '2023-01-07 01:50:05'),
(42, 11, 'c3a0925d-14cd-4f35-a88f-73ba7c0bbc13', 400, 34, 536, '2023-01-07 01:50:05'),
(43, 12, '33750309-666b-4339-bd5b-cc831d2cf9f9', 400, 34, 536, '2023-01-07 02:10:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id` int(11) NOT NULL,
  `token` varchar(75) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `costo` double NOT NULL,
  `venta` double NOT NULL,
  `impuesto` double NOT NULL,
  `existencia` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id`, `token`, `nombre`, `costo`, `venta`, `impuesto`, `existencia`, `created`) VALUES
(1, '5e0563d0-4ae4-48c3-91f4-55ebd4ccaf05', 'Nombre', 12, 15, 5, 55, '2023-01-06 21:19:45'),
(3, '2b79430d-eb68-42b6-8d95-934fe83f6947', 'Camisa Slim Negra', 75, 110, 25, 47, '2023-01-06 21:24:42'),
(4, 'b47f23e6-e91f-4d17-970c-22d58616277a', 'Pantalon Nike 2023', 258, 400, 34, 100, '2023-01-06 22:40:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `token` varchar(75) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(75) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `token`, `email`, `password`, `apellido`, `nombre`, `created`) VALUES
(4, '8f935bc6-db71-46d9-ba70-430f2f351f54', 'victor@gmail.com', '7499ac2248f78a62732406e373268398', 'Maidana', 'Carlos', '2023-01-06 19:26:29'),
(5, 'a36247dd-6135-4e4d-a377-3ff1e80d1c28', 'correo@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Parra', 'Roger', '2023-01-06 19:46:05'),
(6, 'acb329a5-ed66-45c0-ada0-316701c6c6a8', 'noris@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'serrao', 'noris', '2023-01-07 02:07:45'),
(7, 'dd29f979-ee30-4aee-bffc-925adf46e47b', 'carmen@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Oviedo', 'Carmen ', '2023-01-07 02:09:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`token`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `producto` (`producto`),
  ADD KEY `status` (`status`);

--
-- Indices de la tabla `tbl_compras_status`
--
ALTER TABLE `tbl_compras_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Indices de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbl_compras_status`
--
ALTER TABLE `tbl_compras_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  ADD CONSTRAINT `tbl_compras_ibfk_1` FOREIGN KEY (`status`) REFERENCES `tbl_compras_status` (`status`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_compras_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `tbl_productos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_compras_ibfk_3` FOREIGN KEY (`cliente`) REFERENCES `tbl_usuarios` (`email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
