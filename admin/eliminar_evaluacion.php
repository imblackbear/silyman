<?php

require ("../conexion_db.php");
    $ID=$_GET['id'];
mysqli_select_db($conexion, $db_name) or die ("No se ha encontrado la base de datos");

$consulta="DELETE FROM evaluacion WHERE idEvaluacion='$ID'";
$eliminar= mysqli_query($conexion,$consulta);
if ($eliminar=false){
    
     echo "Error en la consulta a la base de datos";
                exit();
}
if ($eliminar=false){
    echo '<script language="javascript">alert("Error en el registro");</script>';
 }
 else {
     if(mysqli_affected_rows($conexion)==0){
         echo '<script language="javascript">alert("No hay registros que eliminar con esa id");</script>';
          echo '<script lenguage="javascript">window.location.replace("cotizacion_evaluacion.php");</script>';
     }
 else {
         echo '<script language="javascript">alert("Registro eliminado");</script>';
         echo '<script lenguage="javascript">window.location.replace("cotizacion_evaluacion.php");</script>';
     }


}