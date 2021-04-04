<?php
require ("conexion_db.php");
$log=$_REQUEST['login'];
$correo=$_REQUEST['email'];
$pass=$_REQUEST['password'];

if (isset($_REQUEST['login'])){
    session_start();
    $consulta= "SELECT * FROM cliente where Correo='$correo' AND Contraseña='$pass'; ";
    $resultado= mysqli_query($conexion, $consulta);
    $row= mysqli_fetch_assoc($resultado);
    if($row){
    $_SESSION['idCliente']=$row['idCliente'];
    $_SESSION['Nombre']=$row['Nombre'];
    $_SESSION['Apellido']=$row['Apellido'];
    $_SESSION['No. Calle']=$row['No. Calle'];
    $_SESSION['Entre cales']=$row['Entre cales'];
    $_SESSION['Colonia']=$row['Colonia'];
    $_SESSION['Ciudad']=$row['Ciudad'];
    $_SESSION['Correo']=$row['Correo'];
    $_SESSION['Contraseña']=$row['Contraseña'];
    $_SESSION['Telefono']=$row['Telefono'];
    header("location: index.php");   
        
    }
 else {
         echo '<script language="javascript">alert("Error de login");</script>';
    }

}