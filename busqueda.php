<!DOCTYPE html>
<html lang="es">
	<head>
		<title>SILYMAN</title>
		 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- ESTILOS -->
		<link rel="stylesheet" href="./styles/client.css">
		
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="peticion.js"></script>
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
        
       
        
       
        <header style="height: 40px; padding: 1px;">
            
        
		<h3 style="text-align: center;   ">Datos de clientes</h3>
                
                 <br>
     
	</header>

		

    
        <div class="row col-md-16 col-md-offset-6 custyle">
   <div class="container">
       <div class="col-sm-12 bg-light boxStyle">
           
		<section>
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
		</section>
		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                </section>
  </div>
</div>
</div>
       
	</body>
</html>


