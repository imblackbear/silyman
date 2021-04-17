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
             <th>Id Cotizacion</th>
            <th>Id Cliente</th>
            <th>Tipo de servicio</th>
           
            <th>Metros al cuadrado</th>
            <th>Comentario</th>
            <th>Fecha de solicitud</th>
                
           
        </tr>
    </thead>
          <?php 
           require ("conexion_db.php");
          $consulta="SELECT * FROM cotizacion";
          $resultado= mysqli_query($conexion, $consulta);
          $contador=0;
          
          mysqli_select_db($conexion, $db_name) or die ("No se ha encontrando la base de datos solicitada.");
          while ($lista= mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
              $contador++;
          $idcotizar=$lista['cliente_idCliente'];
              echo "<tr>";
              echo"<td>".$lista['idCotizacion']."</td>";
               echo"<td>".$lista['cliente_idCliente']."</td>";
                //echo"<td>".$lista['Tipo_servicio_idTipo_servicio']."</td>";
                echo"<td>".$lista['Tipo_insecto']."</td>";
               
                
                 echo"<td>".$lista['Metros']."</td>";
                  
                     echo"<td>".$lista['Comentarios']."</td>";
                     
                       echo"<td>".$lista['fecha_consulta']."</td>";
                       
             
             echo "<td class='text-center'><a  class='btn btn-info btn-xs' href='datos_cotizacion.php?id=$idcotizar'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg></a></td> <td class='text-center'><a  class='btn btn-danger btn-xs' href='#' ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eraser' viewBox='0 0 16 16'>
  <path d='M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z'/>
</svg></a></td></tr>";       
          }
                 
                  ?>  
    </table>
           <div class="width50"><a class="btn btn-success" href="Reporte_cotizaciones.php" style="font-weight: bold; color:white;"> Descargar</a></div>
    </div>
</div>
</div>
        
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
