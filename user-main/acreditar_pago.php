<?php
require("../conexion_db.php");
session_start();

$idEvaluacion = $_GET['id'];
$estado = 'ACREDITADO';

mysqli_select_db($conexion, $db_name) or die("No se ha encontrando la base de datos solicitada.");
$consulta = "SELECT * FROM `evaluacion` WHERE `idEvaluacion`='$idEvaluacion';";
$result =  mysqli_query($conexion, $consulta);
if ($result_consulta = FALSE) {
    echo "Error en la consulta a la base de datos";
    exit();
}
$lista =  mysqli_fetch_array($result, MYSQLI_ASSOC);

$consulta = ("UPDATE evaluacion SET pago = '$estado' WHERE `idEvaluacion`='$idEvaluacion'");

$resultados = mysqli_query($conexion, $consulta);

if ($resultados = false) {
    echo '<script language="javascript">alert("Error en la actualización de datos, contactenos lo antes posible");</script>';
    echo '<script lenguage="javascript">window.location.replace("cotizaciones-generadas.php");</script>';
} else {
    echo '<script lenguage="javascript">window.location.replace("cotizaciones-generadas.php");</script>';
}
