<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport"/>
        <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Admin - Clientes
        </title>
        <!-- CSS files -->
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-flags.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-payments.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/demo.min.css" rel="stylesheet"/>
        <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" referrerpolicy="no-referrer" rel="stylesheet"/>
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
            <?php include('includes/subheader.php'); ?>
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
                                    Clientes
                                </h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Page body -->
                <div class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Clientes en sistema:
                                        </h3>
                                    </div>
                                    <table class="table card-table table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Nombre
                                                </th>
                                                <th>
                                                    Apellido
                                                </th>
                                                <th>
                                                   Email
                                                </th>
                                                <th>
                                                    Clave (MD5)
                                                </th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $contador = 1;
                                            foreach ($clientes['result'] as $key): ?> 
                                            <tr>
                                                <td>
                                                    <?= $contador;?>.
                                                </td>
                                                <td> 
                                                    <?= $key->nombre;?>
                                                </td>
                                                <td>
                                                    <?= $key->apellido;?>
                                                </td>
                                                 <td>  <?= $key->email;?>
                                                </td>
                                                <td>  <?= $key->password;?>
                                                </td> 
                                            </tr> 
                                            <?php $contador++;?>
                                             <?php endforeach ?>
                                        </tbody>
                                    </table>
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
        <script crossorigin="anonymous" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
        </script>
        <script> 
        </script>

        <?php if (session('error')): ?>
            <script>alert("<?= session('error');?>");</script>
        <?php endif ?>
    </body>
</html>