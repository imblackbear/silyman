<?php
require ("conexion_db.php");
$log=$_REQUEST['login'];
$correo=$_REQUEST['email'];
$pass=$_REQUEST['password'];

if (isset($_REQUEST['login'])){
    session_start();
     $consulta2= "SELECT * FROM admin where Correo='$correo' AND Contraseña='$pass'; ";
    $resultado2= mysqli_query($conexion, $consulta2);
    $row2= mysqli_fetch_assoc($resultado2);
    if($row2){
       $_SESSION['idAdmin']=$row2['idAdmin'];
    $_SESSION['Nombre']=$row2['Nombre'];
    $_SESSION['Correo']=$row2['Correo'];
    $_SESSION['Contraseña']=$row2['Contraseña'];
    header("location: clientes.php");
    
    }
 else {
      
       
    
    $consulta= "SELECT * FROM cliente where Correo='$correo' AND Contraseña='$pass'; ";
    $resultado= mysqli_query($conexion, $consulta);
    $row= mysqli_fetch_assoc($resultado);
    if($row){
    $_SESSION['idCliente']=$row['idCliente'];
    $_SESSION['Nombre']=$row['Nombre'];
    $_SESSION['Apellido']=$row['Apellido'];
    $_SESSION['No. Calle']=$row['No. Calle'];
    $_SESSION['Entre calles']=$row['Entre calles'];
    $_SESSION['Colonia']=$row['Colonia'];
    $_SESSION['Ciudad']=$row['Ciudad'];
    $_SESSION['Correo']=$row['Correo'];
    $_SESSION['Contraseña']=$row['Contraseña'];
    $_SESSION['Telefono']=$row['Telefono'];
    header("location: user-main/cotizaciones.php");   
        
    }
    
    else{
        header("location: login.php");
    }

 }
}