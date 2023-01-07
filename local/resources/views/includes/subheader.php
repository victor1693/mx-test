 <style>
    .nav-link-icon{
        height: 14.5px;
        margin-right: 0px;
    }
</style>
<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Request::root();?>/dashboard">
                            <span class="nav-link-icon">
                                <i class="fa fa-home text-muted" style="height: 12px;"></i>
                            </span>
                            <span class="nav-link-title">
                                Dashboard
                            </span>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Request::root();?>/facturas">
                           <span class="nav-link-icon">
                                <i class="fa fa-dollar-sign text-muted" style="height: 12px;"></i>
                            </span>
                            <span class="nav-link-title">
                                Facturas
                            </span>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Request::root();?>/compras">
                            <span class="nav-link-icon">
                               <i class="fa-regular fa-credit-card text-muted" style="height: 12px;"></i>
                            </span>
                            <span class="nav-link-title">
                                Compras
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Request::root();?>/clientes">
                            <span class="nav-link-icon">
                               <i class="fa fa-users text-muted" style="height: 12px;"></i>
                            </span>
                            <span class="nav-link-title">
                                Clientes
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="productos">
                             <span class="nav-link-icon">
                               <i class="fa fa-tag text-muted" style="height: 12px;"></i>
                            </span>
                            <span class="nav-link-title">
                                Productos
                            </span>
                        </a>
                    </li>
                </ul> 
            </div>
        </div>
    </div>
</div>