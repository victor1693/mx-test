<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport"/>
        <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Administración del sistema
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
                            Administración
                        </h2>
                        <form action="<?= Request::root();?>/admin-login" autocomplete="off" id="form-login" method="POST" novalidate="">
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
                
            </div>
        </div>

        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/tabler.min.js">
        </script>
        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/demo.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
        </script>
        <script>
             
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
    </body>
</html>