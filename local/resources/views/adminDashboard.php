<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport"/>
        <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Admin Dashboard
        </title>
        <!-- CSS files -->
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-flags.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-payments.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/demo.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <script src="<?= Request::root();?>/local/resources/views/dist/js/demo-theme.min.js">
        </script>
        <div class="page">
            <!-- Navbar -->
            <header class="navbar navbar-expand-md navbar-light d-print-none">
                <div class="container-xl">
                    <button class="navbar-toggler" data-bs-target="#navbar-menu" data-bs-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                        <a href="#">
                            <img alt="Tabler" class="navbar-brand-image" height="32" src="https://dkfx1gu4rcqft.cloudfront.net/content/css/img/poder-judicial-virtual.png">
                            </img>
                        </a>
                    </h1>
                    <div class="navbar-nav flex-row order-md-last"> 
                         
                        <div class="nav-item dropdown">
                            <a aria-label="Open user menu" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" href="#">
                                <span class="avatar avatar-sm" style="background-image: url(<?= Request::root();?>/local/resources/views/static/avatars/000m.jpg)">
                                </span>
                                <div class="d-none d-xl-block ps-2">
                                    <div>
                                        <?= session()->get('a-nombre') . " " .   session()->get('a-apellido');?>
                                    </div>
                                    <div class="mt-1 small text-muted">
                                        Admin
                                    </div>
                                </div>
                            </a>  
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-wrapper">
                <!-- Page header -->
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <!-- Page pre-title -->
                                <div class="page-pretitle">
                                    Overview
                                </div>
                                <h2 class="page-title">
                                    Dashboard
                                </h2>
                            </div>
                            <!-- Page title actions -->
                            <div class="col-12 col-md-auto ms-auto d-print-none">
                                <div class="btn-list">
                                    
                                    <a class="btn btn-danger d-none d-sm-inline-block" href="<?= Request::root();?>/cerrar-sesion">  
                                        Cerrar sesión 
                                        <i class="fa-solid fa-right-from-bracket" style="padding-left: 5px;"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page body -->
                <div class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards"> 
                            <div class="col-12">
                                <div class="row row-cards">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span class="bg-primary text-white avatar">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                            <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                                                </path>
                                                                <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                                                </path>
                                                                <path d="M12 3v3m0 12v3">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="font-weight-medium">
                                                             <?= $totalFacturas['result'][0]->total;?>
                                                        </div>
                                                        <div class="text-muted">
                                                          <a href="<?= Request::root();?>/facturas">Facturas</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span class="bg-green text-white avatar">
                                                            <i class="fa-regular fa-credit-card "></i>
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="font-weight-medium">
                                                            <?= $totalCompras['result'][0]->total;?>
                                                        </div>
                                                        <div class="text-muted">
                                                           <a href="<?= Request::root();?>/compras">Compras</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span class="bg-twitter text-white avatar">
                                                           <i class="fa fa-users"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="font-weight-medium">
                                                            <?= $totalClientes['result'][0]->total;?>
                                                        </div>
                                                        <div class="text-muted">
                                                            <a href="<?= Request::root();?>/clientes">Clientes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span class="bg-facebook text-white avatar">
                                                           <i class="fa fa-tag"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="font-weight-medium">
                                                              <?= $totalProductos['result'][0]->total;?>
                                                        </div>
                                                        <div class="text-muted">
                                                           <a href="productos">Productos</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
                <footer class="footer footer-transparent d-print-none">
                    <div class="container-xl">
                        <div class="row text-center align-items-center flex-row-reverse">
                            <div class="col-lg-auto ms-lg-auto">
                                
                            </div>
                            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                                <ul class="list-inline list-inline-dots mb-0">
                                    <li class="list-inline-item">
                                        Copyright © 2022
                                        <a class="link-secondary" href=".">
                                            poderjudicialvirtual.
                                        </a> 
                                          All rights reserved.
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>  
        <script src="<?= Request::root();?>/local/resources/views/dist/js/tabler.min.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/dist/js/demo.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>