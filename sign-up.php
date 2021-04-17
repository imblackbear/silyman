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
    <link rel="stylesheet" href="./styles/account.css">
    <title>Registro</title>
    <!-- validacion js -->
    <script type="text/javascript" src="./JS/validacion.js"></script>
    <!--Alertas con SweetAlert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center needs-validation" action="registro_clientes.php" method="post" onsubmit="return validacion()" >
            <h1 class="mb-5 font-weight-light text-uppercase">Fumigaciones SILYMAN</h1>
            <div class="form-group row">
                <span class="col-sm-3">Nombres:</span>
                <input type="text" name="nom" class="form-control rounded-pill form-control-lg col-sm-9" id="username" placeholder="Ingrese su nombre" maxlength="40" required pattern="[a-zA-ZÀ-žñÑ ]+" oninvalid="this.setCustomValidity('Complete el campo e ingrese solo letras')" oninput="this.setCustomValidity('')">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Apellidos:</span>
                <input type="text" name="apellido" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="Ingrese los apellidos" maxlength="40" required pattern="[a-zA-ZÀ-žñÑ ]+" oninvalid="this.setCustomValidity('Complete el campo e ingrese solo letras')" oninput="this.setCustomValidity('')">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Correo electrónico:</span>
                <input type="email" name="correo" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="ex@example.com" required oninput="this.setCustomValidity('')">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Teléfono:</span>
                <input type="number" name="tel" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="81XXXXXXXX" required pattern="[0-9]{6,10}">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Calle y número:</span>
                <input type="text" name="num_calle" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="Lugar donde se realizará el sevicio" required pattern="[a-zA-Z 0-9]+" oninvalid="this.setCustomValidity('Complete el campo e ingrese solo letras y números')" oninput="this.setCustomValidity('')">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Colonia:</span>
                <input type="text" name="col" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="" required pattern="[a-zA-ZÀ-žñÑ ]+" oninvalid="this.setCustomValidity('Complete el campo e ingrese solo letras')" oninput="this.setCustomValidity('')">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Ciudad:</span>
                <input type="text" name="city" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="" required pattern="[a-zA-ZÀ-žñÑ ]+" oninvalid="this.setCustomValidity('Complete el campo e ingrese solo letras')" oninput="this.setCustomValidity('')">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Entre calles:</span>
                <input type="text" name="entre_calles" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="Referencias" required pattern="[a-zA-ZÀ-žñÑ ]+" oninvalid="this.setCustomValidity('Complete el campo e ingrese solo letras')" oninput="this.setCustomValidity('')">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Contraseña:</span>
                <input type="password" name="pass" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="******" required minlength="6" id="password">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <div class="form-group row">
                <span class="col-sm-3">Confirmar contraseña:</span>
                <input type="password" name="confirm_pass" class="form-control rounded-pill form-control-lg col-sm-9" placeholder="******" required minlength="6"  id="cpassword">
                <div class="invalid-feedback">Complete el campo</div>
            </div>
            <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase" >Registrarse</button>
            <p class="mt-3 font-weight-normal">¿Ya tienes cuenta? <a href="./login.php"><strong>Inicia sesión</strong></a></p>
            <a href="index.php"><strong>Regresar</strong></a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
