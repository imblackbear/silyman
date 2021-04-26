<!DOCTYPE html>
<html lang="es">
	<head>
		<title>SILYMAN</title>
		 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- ESTILOS -->
		<link rel="stylesheet" href="../styles/client.css">
		<!--BOOSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!--BOOSTRAP JAVASCRIPT-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="../JS/peticion_cliente.js"></script>
                
	</head>
        
        
	<body>
        <!--Navegación-->
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container-fluid">  
            <a class="navbar-brand img-logo" href="">
                <img class="logo-sily" src="../img/logo.png" alt="logo de silyman">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                         <a class="nav-link" href="cotizacion_evaluacion.php">Evaluaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Cerrar Sesion </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <br>
        <header style="height: 40px; padding: 1px;">
            
        
		<h3 style="text-align: center;   ">Datos de clientes</h3>
                
                 <br>
     
	</header>

		

    
    <div class="row col-md-16 col-md-offset-6 custyle">
   <div class="container">
       <div class="col-sm-12 bg-light boxStyle">
           
		<section>
                <div class="floatL">
                    <label>Buscar cliente:&nbsp;
                    <input id="busqueda" class="width100 form-control" name="busqueda" type="text" size="50">
                    </label> 
                    <a class="btn btn-success" href="Reporte_clientes.php" style="font-weight: bold; color:white;"> Descargar</a>
                </div>
		</section>
		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                </section>
  </div>
</div>
</div>
	</body>
</html>
