<?php
require ("conexion_db.php");
$nombre=$_POST['nom'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['tel'];
$num=$_POST['num_calle'];
$colonia=$_POST['col'];
$ciudad=$_POST['city'];
$entre_calle=$_POST['entre_calle'];
$contraseña=$_POST['pass'];
$confirm_contraseña=$_POST['confirm_pass'];


           
  $fecha_insert = date('Y-m-d H:i:s');
 
        
 mysqli_Select_db($conexion,$db_name) or die ("No se encuentra la base de datos");
 
 mysqli_set_charset($conexion,"utf8");
 
 $consulta_cliente="SELECT * FROM `cliente` ;";

                        $result_consulta=  mysqli_query($conexion, $consulta_cliente);
                        $cliente=0;
                        while($lista=  mysqli_fetch_array($result_consulta, MYSQLI_ASSOC)){
                         if (empty($lista['idCliente'])){
                        
                         $cliente=0;
                         }
                         else{
                             
                              $cliente=$lista['idCliente'];
                         }
                        }
                         $cliente= $cliente+1;

 
$consulta=("INSERT INTO `cliente`(`idCliente`, `Nombre`, `Apellido`, `No. Calle`, `Entre cales`, `Colonia`, `Ciudad`, `Correo`, `Contraseña`, `Telefono`) VALUES ($cliente, '$nombre', '$apellido', '$num', '$entre_calle', '$colonia', '$ciudad', '$correo', '$contraseña', '$telefono');");
 
 $resultados=mysqli_query($conexion, $consulta);
 


 if ($resultados=false){
    echo '<script language="javascript">alert("Error en el registro");</script>';
    echo '<script lenguage="javascript">window.location.replace("sign-up.php");</script>';
 }
 else {
echo '<script language="javascript">alert("Registro exitoso");</script>';
echo '<script lenguage="javascript">window.location.replace("login.php");</script>';
 

}