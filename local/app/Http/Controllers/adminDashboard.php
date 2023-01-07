<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class adminDashboard extends Controller
{
	private $compras;
	private $clientes;
	private $productos;
	private $facturas;

	function __construct()
	{
		$this->compras = new comprasClass();
		$this->clientes = new usuariosClass();
		$this->productos = new productosClass();
		$this->facturas = new facturasClass();
	}
    public function index()
    {
    	$vista = View::make('adminDashboard'); 
    	 
    	$vista->totalCompras = $this->compras->getTotal();
    	$vista->totalClientes = $this->clientes->getTotal();
    	$vista->totalProductos = $this->productos->getTotal();
    	$vista->totalFacturas = $this->facturas->getTotal();
    	return $vista;
    }
}
