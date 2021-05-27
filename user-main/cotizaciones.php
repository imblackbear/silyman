<!doctype html>
<html lang="es">
<?php
session_start();
$_SESSION['idCliente'];
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/account.css">
    <title>Generar cotización</title>
    <!-- validacion js -->
    <script type="text/javascript" src="./JS/validacion.js"></script>
    <!--Alertas con SweetAlert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--EStilos-->
    
</head>

<body>

    <!--Navegación-->
<nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand img-logo" href="">
                <img class="logo-sily" src="../img/logo.png" alt="logo de silyman">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="cotizaciones.php">Generar cotización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cotizaciones-generadas.php">Solicitudes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Cerrar sesión </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center needs-validation" method="post">
            <h1 class="mb-5 font-weight-light text-uppercase">COTIZACIÓN DE SERVICIO</h1>
            <div class="form-group row">
                <span class="col-sm-3">Número de cliente:</span>
                <input type="number" name="idcliente" class="form-control rounded-pill form-control-lg col-sm-9" value="<?php echo $_SESSION['idCliente']; ?>" readonly="">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <div class="input-group-prepend col-sm-3">
                    <span>Tipo de servicio:</span>
                </div>

                <select class="col-sm-9 custom-select form-control rounded-pill form-control-lg" name="tipo-servicio">
                    <option value="Moscas">Moscas</option>
                    <option value="Cucarachas">Cucarachas</option>
                    <option value="Avispas">Avispas</option>
                    <option value="Alacranes">Alacranes</option>
                    <option value="Ratones">Ratones</option>
                    <option value="Hormigas">Hormigas</option>
                    <option value="Termitas">Termitas</option>
                </select>
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Área en m²:</span>
                <input type="number" name="m-servicio" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="Espacio del lugar en m²" required>
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Detalle del servicio:</span>
                <textarea type="text" name="d-servicio" class="area-container form-control col-sm-9" placeholder="Descripción del problema y del servicio requerido" required style="min-height:90px; max-height: 300px;" ></textarea>
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <button type="submit" class="btn mt-3 rounded-pill btn-lg btn-custom btn-block text-uppercase" name="enviar-co">Enviar</button>
            <br><p>¿Ya cuenta con una cotización?<a href="./cotizaciones-generadas.php"><strong> Revise el estado aquí</strong></a></p>

        </form>
        
    </div>

    <?php
    include("generar-cotizacion.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>