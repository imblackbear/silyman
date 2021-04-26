<?php
require ('../conexion_db.php');

$id_e=$_GET['ide'];
$con=$_GET['concep'];
$costo=$_GET['costo_s'];



 mysqli_Select_db($conexion,$db_name) or die ("No se encuentra la base de datos");
 
 mysqli_set_charset($conexion,"utf8");
 $consulta=("UPDATE `evaluacion` SET `Concepto`='$con',`Costo_serv`=$costo WHERE `idEvaluacion`=$id_e ");
 
 $resultados=mysqli_query($conexion, $consulta);
 
 if ($resultados=false){
    echo '<script language="javascript">alert("Error en el registro");</script>';
    echo '<script lenguage="javascript">window.location.reload();</script>';
 }
 else {
echo '<script language="javascript">alert("Registro exitoso");</script>';
echo '<script lenguage="javascript">window.location.replace("cotizacion_evaluacion.php");</script>';
 }