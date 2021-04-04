<?php

 $db_host="localhost";
 $db_name="silyman_bd";
 $db_usuario="root";
 $db_pass="";
 $db_puerto=3306;
     
  $conexion= mysqli_connect($db_host, $db_usuario, $db_pass, $db_name);

    
     mysqli_set_charset($conexion, "utf8");
 
date_default_timezone_set("America/Mexico_city");
$fecha_actual=date('y/m/d');
$hora_actual=date("g:i:s");
