<!DOCTYPE html>

<html lang="es">
<?php
    session_start();
    
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILYMAN</title>
    <!--BOOSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
    <!--CSS-->
    <link rel="stylesheet" href="./styles/client.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-fixed-top" >
        <div class="container-fluid">  
            <a class="navbar-brand" href="">
                <img class="logo-sily" src="./img/logo.png" alt="logo de silyman">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="clientes.php">Clientes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CRUD_cotizaciones.php">Cotizaciones</a>
                    </li>
                                       <li class="nav-item">
                        <a class="nav-link" href="logout.php">Cerrar Sesion </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <br>
        <br>
        <br>
       <br>
        <br>
        <br>
        
       
        <header style="height: 40px; padding: 1px;">
            
        
		<h3 style="text-align: center;   ">Datos de cotizacion</h3>
                
                 <br>
     <br>
	</header>
    <div class="row col-md-12 col-md-offset-6 custyle">
   <div class="container">
       <div class="col-sm-12 bg-light boxStyle">
    
        <table class="table table-striped custab" >
    <thead>
    
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Entre Calles</th>
            <th>Correo</th>
            <th>Telefono</th>
                
           
        </tr>
    </thead>
          <?php 
          require ("conexion_db.php");
          $consulta="SELECT * FROM cliente";
          $resultado= mysqli_query($conexion, $consulta);
          $contador=0;
          mysqli_select_db($conexion, $db_name) or die ("No se ha encontrando la base de datos solicitada.");
          while ($lista= mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
              $contador++;
          $direccion=$lista['No. Calle'].' '.$lista['Colonia'].','.$lista['Ciudad'];
              echo "<tr>";
              echo"<td>".$lista['idCliente']."</td>";
               echo"<td>".$lista['Nombre']."</td>";
                echo"<td>".$lista['Apellido']."</td>";
                echo"<td>".$direccion."</td>";
               
                 //echo"<td>".$lista['No. Calle']."</td>";
                 echo"<td>".$lista['Entre calles']."</td>";
                   //echo"<td>".$lista['Colonia']."</td>";
                    //echo"<td>".$lista['Ciudad']."</td>";
                     echo"<td>".$lista['Correo']."</td>";
                     
                       echo"<td>".$lista['Telefono']."</td>";
                    
          }
                 
                  ?>  
    </table>
           <div class="width50"><a class="btn btn-success" href="Reporte_clientes.php" style="font-weight: bold; color:white;"> Descargar</a></div>
    </div>
</div>
</div>
        
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
