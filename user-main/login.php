<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/account.css">
    <title>Login</title>
    <!--validacion-->
    <script type="text/javascript" src="../validacion.js"></script>
</head>

<body>
    <div class="row g-0">
        <div class="col-lg-6 d-none d-lg-block">
            <div id="carouselExampleIndicators" class="carousel slide header-video" data-ride="carousel">

                <ol class="carousel-indicators over-overlay">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active over-overlay"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=" over-overlay"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=" over-overlay"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item img-login">
                        <div class="carousel-caption d-none d-md-block over-overlay">
                            <h5>Contamos con el equipo mas moderno.</h5>
                        </div>
                    </div>
                    <div class="carousel-item img-login2">
                        <div class="carousel-caption d-none d-md-block over-overlay">
                            <h5>Ahorra con nuestros paquetes económicos.</h5>
                        </div>
                    </div>
                    <div class="carousel-item active img-login3">
                        <div class="carousel-caption d-none d-md-block over-overlay">
                            <h5>Atendemos servicios urgentes, comunícate directo con nosotros y te cotizamos al momento.</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev over-overlay" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon over-overlay" aria-hidden="true"></span>
                    <span class="sr-only over-overlay">Siguiente</span>
                </a>
                <a class="carousel-control-next over-overlay" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <div class="header-overlay"></div>
            </div>


        </div>
        <div class="col-lg-6">
            <div class="d-flex justify-content-center align-items-center login-container">
                <form class="login-form text-center needs-validation" action="ingreso_login.php" method="post">
                    <h1 class="mb-5 font-weight-light text-uppercase"><b>Fumigaciones SILYMAN</b></h1>
                    <div class="form-group row">
                        <span class="col-sm-3">Correo electrónico:</span>
                        <input type="email" name="email" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="ex@example.com" required>
                        <div class="invalid-feedback">Complete el campo</div>
                    </div>
                    <div class="form-group row">
                        <span class="col-sm-3">Contraseña:</span>
                        <input type="password" name="password" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="******" required>
                        <div class="invalid-feedback">Complete el campo</div>
                    </div>
                    <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase" name="login">Iniciar sesión</button>
                    <p class="mt-3 font-weight-normal">¿Aún no tienes cuenta? <a href="sign-up.php"><strong>Registrate ahora</strong></a></p>
                    <a href="../index.php"><strong>Regresar</strong></a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>