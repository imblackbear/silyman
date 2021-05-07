<!doctype html>
<html lang="es">
<?php
session_start();
require("../conexion_db.php");
$ID = $_GET['id'];
mysqli_select_db($conexion, $db_name) or die("No se ha encontrando la base de datos solicitada.");
$consulta = "SELECT * FROM `evaluacion` WHERE `idEvaluacion`='$ID';";
$result =  mysqli_query($conexion, $consulta);
if ($result_consulta = FALSE) {
    echo "Error en la consulta a la base de datos";
    exit();
}
$lista =  mysqli_fetch_array($result, MYSQLI_ASSOC);

$cliente = $lista['cliente_idCliente'];
mysqli_select_db($conexion, $db_name) or die("No se ha encontrando la base de datos solicitada.");
$consulta2 = "SELECT * FROM `cliente` WHERE `idCliente` =$cliente;";
$result2 =  mysqli_query($conexion, $consulta2);

$lista2 =  mysqli_fetch_array($result2, MYSQLI_ASSOC);


?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/cotizacion_datos.css">
    <title>Registro</title>
    <!-- validacion js -->
    <script type="text/javascript" src="../JS/validacion.js"></script>
    <!--Alertas con SweetAlert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!--PAYPAL script-->
    <script src="https://www.paypal.com/sdk/js?client-id=AUauBX47LY5JzRhsDJZaCsnkJUa1DAFUAr17ip1G4is3vkby1iB2d640yzt9QvAcwTQZD91FXZi5285D&currency=MXN">
        // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>

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
                        <a class="nav-link" href="cotizaciones.php">Gerenar cotización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cotizaciones-generadas.php">Solicitudes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Cerrar Sesion </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>

    <header style="height: 40px; padding: 2px;">
        <br>
        <h3 style="text-align: center;   ">Datos de la cotización</h3>
    </header>
    <br><br>

    <form name="theform" action="Actualizar_evaluacion.php" method="GET" onSubmit="">
        <section class="home">
            <div class="row col-md-12 col-md-offset-6 custyle">
                <div class="container">
                    <div class="col-sm-12 bg-light boxStyle">
                        <h3 style="text-align: center;   ">Datos del cliente</h3>
                        <br>

                        <div class="form-group">
                            <div class="width30 floatL"><label>Nombre:</label></div>
                            <div class="width70 floatR"><input id="" class="width100 form-control" type="text" value="<?php echo $lista2['Nombre'] . ' ' . $lista2['Apellido']; ?>" size="50" readonly=""></div>
                            <br> <br>
                        </div>

                        <div class="form-group">
                            <div class="width30 floatL"><label>Direccion:</label></div>
                            <div class="width70 floatR"><input class="width100 form-control" type="text" value="<?php echo $lista2['No. Calle'] . ' ' . $lista2['Colonia'] . ' ' . $lista2['Ciudad']; ?>" size="50" readonly=""></div>
                            <br> <br>
                        </div>

                        <div class="form-group">
                            <div class="width30 floatL"><label>Entre calles:</label></div>
                            <div class="width70 floatR"><input class="width100 form-control" type="text" value="<?php echo $lista2['Entre calles']; ?>" readonly=""></div>
                            <br> <br>
                        </div>
                        <div class="form-group">
                            <div class="width30 floatL"><label>Correo:</label></div>
                            <div class="width70 floatR"><input class="width100 form-control" type="text" value="<?php echo $lista2['Correo']; ?>" style="width:  55%;" size="50" readonly=""></div>
                            <br> <br>
                        </div>
                        <div class="form-group">
                            <div class="width30 floatL"><label>Teléfono:</label></div>
                            <div class="width70 floatR"><input class="width100 form-control" type="text" value="<?php echo $lista2['Telefono']; ?>" style="width:  55%;" size="50" readonly=""></div>
                            <br> <br>
                        </div>

                        <div class="form-group">
                            <div class="width30 floatL"><label>Fecha de cotización:</label></div>
                            <div class="width70 floatR"><input size="30" class="width100 form-control" style="width:  55%;" value="<?php echo $lista['fecha_consulta']; ?>" readonly=""></div>
                            <br> <br>
                        </div>

                    </div>



                </div>
            </div>
        </section>
        <section class="home_2">
            <div class="container">
                <div class="col-md-12 bg-light boxStyle">


                    <?php

                    require("../conexion_db.php");



                    $cotizacion = $lista['cotizacion_idCotizacion'];
                    mysqli_select_db($conexion, $db_name) or die("No se ha encontrando la base de datos solicitada.");
                    $consulta2 = "SELECT * FROM `cotizacion` WHERE `idCotizacion` =$cotizacion;";
                    $result2 =  mysqli_query($conexion, $consulta2);

                    $lista2 =  mysqli_fetch_array($result2, MYSQLI_ASSOC);


                    ?>


                    <h3 style="text-align: center;   ">Datos de la cotización</h3>
                    <br>

                    <div class="form-group">
                        <div class="width30 floatL"><label>Tipo de plaga:</label></div>
                        <div class="width70 floatR"><input class="width100 form-control" type="text" value="<?php echo $lista2['Tipo_insecto']; ?>" style="width:  55%;" size="50" readonly=""></div>
                        <br> <br>
                    </div>
                    <div class="form-group">
                        <div class="width30 floatL"><label>Metros al cuadrado:</label></div>
                        <div class="width70 floatR"><input class="width100 form-control" type="text" value="<?php echo $lista2['Metros']; ?>" style="width:  55%;" size="50" readonly=""></div>
                        <br> <br>
                    </div>

                    <div class="form-group">
                        <div class="width30 floatL"><label>Concepto:</label></div>
                        <div class="width70 floatR"><input name="concep" src="" class="width100 form-control" type="text" value="<?php echo $lista['Concepto']; ?>" size="50" readonly=""></div>
                        <br> <br>
                    </div>
                    <div class="form-group">
                        <div class="width30 floatL"><label>Costo por el servicio:</label></div>
                        <div class="width70 floatR"><input name="costo_s" class="width100 form-control" type="text" value="<?php echo $lista['Costo_serv']; ?>" style="width:  55%;" size="50" readonly=""></div>
                        <br> <br>
                    </div>
                    <div class="form-group">
                        <div class="width30 floatL"><label>Comentarios:</label></div>
                        <div class="width70 floatR"><textarea class="width100 form-control" type="text" style="height: 115px;" size="50" readonly=""><?php echo $lista2['Comentarios']; ?> </textarea> </div>
                        <br> <br> <br> <br> <br>
                    </div>
                    <div class="form-group">
                        <div class="width30 floatL"><label>Estado del pago:</label></div>
                        <div class="width70 floatR"><input name="costo_s" class="width100 form-control text-warning" id="estado-pago" type="text" value="<?php echo $lista['pago']; ?>" style="width:  55%; font-weight:bold" size="50" readonly=""></div>
                        <br> <br>
                    </div>
                    
                    <div class="button-container">
                        <div class="title-paypal">
                            <h3>Precio total: $<?php echo $lista['Costo_serv']; ?> MXN</h3>
                            <br>

                        </div>
                        <!--Boton de paypal-->
                        <div id="boton-paypal" class="">
                            <div class="button-paypal col-md-4" id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </form>
    <br>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo $lista['Costo_serv']; ?>',
                            description: 'Pago de fumigación con SILYMAN'
                        },
                        style: {
                            size: 'responsive',
                            color: 'gold',
                            shape: 'pill',
                            label: 'checkout',
                            tagline: 'true'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    swal({
                            title: 'Pago realizado correctamente',
                            text: 'Nos ponderemos en contacto para la realización del servicio',
                            icon: 'success',
                            closeOnClickOutside: false,
                            closeOnEsc: false,
                            button: 'Aceptar'
                        })
                        .then((complete) => {
                            if (complete) {
                                window.location.replace("acreditar_pago.php?id=<?php echo $lista['idEvaluacion']; ?>");
                            }
                        });

                    if (details.co)
                        document.getElementById('boton-paypal').classList.add('d-none');
                });
            }
        }).render('#paypal-button-container'); // Display payment options on your web page
    </script>

    <?php

    require("../conexion_db.php");
    $ID = $_GET['id'];
    mysqli_select_db($conexion, $db_name) or die("No se ha encontrando la base de datos solicitada.");
    $estadoPago = "SELECT pago FROM `evaluacion` WHERE `idEvaluacion` = '$ID';";
    $resultado = mysqli_query($conexion, $estadoPago);
    $listaP = mysqli_fetch_array($resultado);

    if ($listaP['pago'] === "ACREDITADO") {
        echo '<script language="javascript">
        document.getElementById("boton-paypal").classList.add("d-none");
        document.getElementById("estado-pago").classList.remove("text-warning");
        document.getElementById("estado-pago").classList.add("text-success");
        </script>';
    }

    ?>

</body>

</html>