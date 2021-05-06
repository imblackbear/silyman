<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();

require("../conexion_db.php");
$idcli = $_POST['id_cli'];
$idco = $_POST['id_co'];
$concepto = $_POST['concep'];
$costo = $_POST['costo_s'];
$fecha = $_POST['fecha_cotizacion'];
$estado = 'PENDIENTE';


mysqli_Select_db($conexion, $db_name) or die("No se encuentra la base de datos");

mysqli_set_charset($conexion, "utf8");

$consulta_evaluacion = "SELECT * FROM `evaluacion` ;";

$result_consulta =  mysqli_query($conexion, $consulta_evaluacion);
$cliente = 0;
while ($lista =  mysqli_fetch_array($result_consulta, MYSQLI_ASSOC)) {
   if (empty($lista['idEvaluacion'])) {

      $evaluacion = 0;
   }else {

      $evaluacion = $lista['idEvaluacion'];
   }
}
$evaluacion = $evaluacion + 1;

$consulta = ("INSERT INTO `evaluacion`(`idEvaluacion`, `Concepto`, `Costo_serv`, `fecha_consulta`, `cliente_idCliente`, `cotizacion_idCotizacion`, `pago`) VALUES ($evaluacion,'$concepto',$costo,'$fecha',$idcli,$idco,'$estado')");

$resultados = mysqli_query($conexion, $consulta);

if ($resultados = false) {
   echo '<script language="javascript">alert("Error en el registro");</script>';
   echo '<script lenguage="javascript">window.location.replace("cotizacion_evaluacion.php");</script>';
} else {
   sleep(1.5);
   echo '<script lenguage="javascript">window.location.replace("cotizacion_evaluacion.php");</script>';
}
