<!doctype html>
<html lang="es">
<?php
    session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/account.css">
    <title>Generar cotización</title>
    <!-- validacion js -->
    <script type="text/javascript" src="./JS/validacion.js"></script>
    <!--Alertas con SweetAlert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center needs-validation"   method="post">
            <h1 class="mb-5 font-weight-light text-uppercase">COTIZACIÓN DE SERVICIO</h1>
            <div class="form-group row">
                <span class="col-sm-3">Id del cliente:</span>
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
                <textarea type="text" name="d-servicio" class="form-control form-control-lg detalle-servicio col-sm-9" placeholder="Describa del problema y servicio requerido" required></textarea>
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase" name="enviar-co">Enviar</button>
            <br><a href="../index.php"><strong>Regresar</strong></a>
        </form>
    </div>
    <?php
        include("generar-cotizacion.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
