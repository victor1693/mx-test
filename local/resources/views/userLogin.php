<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport"/>
        <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
        <title>
            LogIn Clientes
        </title>
        <!-- CSS files -->
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-flags.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-payments.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/demo.min.css" rel="stylesheet"/>
 
    </head>
    <body class=" border-top-wide border-primary d-flex flex-column">
        <script src="<?= Request::root();?>/local/resources/views/dist/js/demo-theme.min.js">
        </script>
        <div class="page page-center">
            <div class="container container-tight py-4">
                <div class="text-center mb-4">
                    <a class="navbar-brand navbar-brand-autodark" href=".">
                        <img alt="" height="36" src="https://dkfx1gu4rcqft.cloudfront.net/content/css/img/poder-judicial-virtual.png"/>
                    </a>
                </div>
                <div class="card card-md">
                    <div class="card-body">
                        <h2 class="h2 text-center mb-4">
                            Ingresa a tu cuenta
                        </h2>
                        <form action="<?= Request::root();?>/user-login" autocomplete="off" id="form-login" method="POST" novalidate="">
                            <div class="mb-3">
                                <label class="form-label">
                                    Correo electrónico:
                                </label>
                                <input autocomplete="off" class="form-control" id="login-email" name="login-email" placeholder="tucorreo@dominio.com" type="email">
                                </input>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">
                                    Contraseña:
                                </label>
                                <div class="input-group input-group-flat">
                                    <input autocomplete="off" class="form-control" id="login-password" name="login-password" placeholder="*********" type="password">
                                        <span class="input-group-text">
                                            <a class="link-secondary" data-bs-toggle="tooltip" href="#" title="Show password">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                                <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                                    </path>
                                                    <circle cx="12" cy="12" r="2">
                                                    </circle>
                                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                                    </path>
                                                </svg>
                                            </a>
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button id="btn-login" class="btn btn-primary w-100" type="button">
                                    Ingresar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center text-muted mt-3">
                    Aun no tienes cuenta?
                    <a data-bs-target="#modal-report" data-bs-toggle="modal" href="#" tabindex="-1">
                        Crear nueva cuenta
                    </a>
                </div>
            </div>
        </div>
        <!--MODAL REGISTRO USUARIO-->
        <div aria-hidden="true" class="modal modal-blur fade" id="modal-report" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Registro de clientes:
                        </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= Request::root();?>/user-register" id="form-register" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            Nombre
                                        </label>
                                        <input autocomplete="off" class="form-control" id="nombre" maxlength="35" name="nombre" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            Apellido
                                        </label>
                                        <input autocomplete="off" class="form-control" id="apellido" maxlength="35" name="apellido" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            Correo electrónico
                                        </label>
                                        <input autocomplete="off" class="form-control" id="correo" maxlength="40" name="correo" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            Contraseña
                                        </label>
                                        <input autocomplete="off" class="form-control" id="password" maxlength="15" name="password" type="password">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-link link-secondary limpiar-form" data-bs-dismiss="modal" href="#">
                            Cancelar
                        </a>
                        <button class="btn btn-primary ms-auto" id="btn-procesar" type="button">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                </path>
                                <line x1="12" x2="12" y1="5" y2="19">
                                </line>
                                <line x1="5" x2="19" y1="12" y2="12">
                                </line>
                            </svg>
                            Procesar el registro
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/tabler.min.js">
        </script>
        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/demo.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
        </script>
        <script>
            //ENVIA EL FORMULARIO DE REGISTRO DE CLIENTES
            $("#btn-procesar").click(function(){
                // VALIDACIONES DEL FORMULARIO DE REGISTRO
                $("input").removeClass('is-invalid');
                if($("#nombre").val()==""){
                    $("#nombre").addClass('is-invalid');
                    $("#nombre").focus();
                    return 0;
                }

                if($("#apellido").val()==""){
                    $("#apellido").addClass('is-invalid');
                    $("#apellido").focus();
                    return 0;
                }

                if($("#correo").val()==""){
                    $("#correo").addClass('is-invalid');
                    $("#correo").focus();
                    return 0;
                }


                if($("#password").val()==""){
                    $("#password").addClass('is-invalid');
                    $("#password").focus();
                    return 0;
                }

                $("#form-register").submit(); 
            });

            $(".limpiar-form").click(function(){
                $("input").removeClass('is-invalid');
                $("input").val('');
            });

            $("#btn-login").click(function(){
                $("input").removeClass('is-invalid');
                
                if($("#login-email").val()==""){
                    $("#login-email").addClass('is-invalid');
                    $("#login-email").focus();
                    return 0;
                }

                if($("#login-password").val()==""){
                    $("#login-password").addClass('is-invalid');
                    $("#login-password").focus();
                    return 0;
                }

                 $("#form-login").submit();

            });
        </script>

        <?php if (session('error')): ?>
            <script>alert("<?= session('error');?>");</script>
        <?php endif ?>
        <?php if (session('success')): ?>
            <script>alert("<?= session('success');?>");</script>
        <?php endif ?>
    </body>
</html>