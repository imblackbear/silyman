<!doctype html>
<html lang="es">
<?php
    session_start();
    require ("../conexion_db.php");
    $ID=$_GET['id'];
    mysqli_select_db($conexion, $db_name) or die ("No se ha encontrando la base de datos solicitada.");
            $consulta="SELECT * FROM `evaluacion` WHERE `idEvaluacion`='$ID';";
            $result=  mysqli_query($conexion, $consulta);
            if($result_consulta=FALSE){
               echo "Error en la consulta a la base de datos";
                exit();
            }
            $lista=  mysqli_fetch_array($result, MYSQLI_ASSOC);
            
          $cliente=$lista['cliente_idCliente'];
            mysqli_select_db($conexion, $db_name) or die ("No se ha encontrando la base de datos solicitada.");
            $consulta2="SELECT * FROM `cliente` WHERE `idCliente` =$cliente;";
            $result2=  mysqli_query($conexion, $consulta2);
            
            $lista2=  mysqli_fetch_array($result2, MYSQLI_ASSOC);
            
            
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/cotizacion_datos.css">
    <title>Registro</title>
    <!-- validacion js -->
    <script type="text/javascript" src="../JS/validacion.js"></script>
    <!--Alertas con SweetAlert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    
     <nav class="navbar navbar-expand-lg navbar-fixed-top" >
        <div class="container-fluid" >  
            <a class="navbar-brand" href="">
                <img class="logo-sily" src="../img/logo.png" alt="logo de silyman">
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
        <br>
        <br>
          
    	<header style="height: 40px; padding: 1px;">
            
		<h3 style="text-align: center;   ">Datos de evaluacion</h3>
	</header>
               
        <form name="theform" action="Actualizar_evaluacion.php" method="GET" onSubmit="" >
        <section  class="home">
         <div class="row col-md-12 col-md-offset-6 custyle">
                    
	<div class="container">
	
				
		<div class="col-sm-12 bg-light boxStyle">
			<h3 style="text-align: center;   ">Datos de cliente</h3>
                         <div class="form-group">
		<div class="width30 floatL"><label>Id del cliente</label></div>
                <div class="width70 floatR"><input   class="width100 form-control" type="text" value="<?php echo $lista['cliente_idCliente']; ?>" style="width:  20%;" size="50" readonly=""></div>
                <br> <br>
	 </div>

	 <div class="form-group">
		<div class="width30 floatL" ><label>Nombre</label></div>
                <div class="width70 floatR" ><input id="" class="width100 form-control"  type="text" value="<?php echo $lista2['Nombre'].' '.$lista2['Apellido']; ?>"   size="50" readonly=""></div>
                  <br>    <br>
             </div>     
	 
	 <div class="form-group">
		<div class="width30 floatL" ><label>Direccion</label></div>
                <div class="width70 floatR" ><input    class="width100 form-control" type="text" value="<?php echo $lista2['No. Calle'].' '. $lista2['Colonia'].' '.$lista2['Ciudad']; ?>"  size="50" readonly=""></div>
                <br>    <br>
	 </div>
	 
	 <div class="form-group">
		<div class="width30 floatL"><label>Entre calles</label></div>
                <div class="width70 floatR" ><input   class="width100 form-control" type="text" value="<?php echo $lista2['Entre calles']; ?>"    readonly=""></div>
                <br>    <br>
	 </div>
	 <div class="form-group">
		<div class="width30 floatL" ><label>Correo</label></div>
                <div class="width70 floatR"  ><input  class="width100 form-control" type="text" value="<?php echo $lista2['Correo']; ?>"  style="width:  55%;" size="50" readonly=""></div>
                <br>    <br>
	 </div>
 	 <div class="form-group">
 		<div class="width30 floatL" ><label>Telefono</label></div>
               <div class="width70 floatR"  ><input  class="width100 form-control" type="text" value="<?php echo $lista2['Telefono']; ?>"  style="width:  55%;" size="50" readonly=""></div>
                <br>    <br>  
 	 </div>
                   
 	 	<div class="form-group">
 		<div class="width30 floatL"><label>Fecha de cotizacion</label></div>
                <div class="width70 floatR"><input  size="30"  class="width100 form-control" style="width:  55%;" value="<?php echo $lista['fecha_consulta']; ?>" readonly=""></div>
                <br> <br>
 	 </div>
 	 	
 	 </div>	

  	 

       </div>
	 </div>	
        </section>

        <section class="home_2">
            <div class="col-sm-12 bg-light boxStyle">
	<div class="container">
	
				
		
	<?php
  
    require ("../conexion_db.php");
    
   
            
          $cotizacion=$lista['cotizacion_idCotizacion'];
            mysqli_select_db($conexion, $db_name) or die ("No se ha encontrando la base de datos solicitada.");
            $consulta2="SELECT * FROM `cotizacion` WHERE `idCotizacion` =$cotizacion;";
            $result2=  mysqli_query($conexion, $consulta2);
            
            $lista2=  mysqli_fetch_array($result2, MYSQLI_ASSOC);
            
            
?>		
	
                            
                            <h3 style="text-align: center;   ">Datos de cotizacion</h3>
                            <br>
                            
                             <div class="form-group">
		<div class="width30 floatL"><label>Id de Evaluacion</label></div>
                <div class="width70 floatR"><input  name="ide"  class="width100 form-control" type="text" value="<?php echo $lista['idEvaluacion']; ?>" style="width:  20%;" size="50" readonly=""></div>
                <br> <br>
	 </div>
	 <div class="form-group">
		<div class="width30 floatL"><label>Id de cotizacion</label></div>
                <div class="width70 floatR"><input    class="width100 form-control" type="text" value="<?php echo $lista['cotizacion_idCotizacion']; ?>" style="width:  20%;" size="50" readonly=""></div>
                <br> <br>
	 </div>
            
            
             <div class="form-group">
		<div class="width30 floatL"><label>Tipo de insecto</label></div>
                <div class="width70 floatR" ><input   class="width100 form-control" type="text" value="<?php echo $lista2['Tipo_insecto']; ?>"  style="width:  55%;" size="50" readonly=""></div>
                <br>    <br>
	 </div>
	 <div class="form-group">
		<div class="width30 floatL" ><label>Metros al cuadrado</label></div>
                <div class="width70 floatR"  ><input  class="width100 form-control" type="text" value="<?php echo $lista2['Metros']; ?>"  style="width:  55%;" size="50" readonly=""></div>
                <br>    <br>
	 </div>
 	
	 <div class="form-group">
		<div class="width30 floatL"><label>Concepto</label></div>
		<div class="width70 floatR"><input  name="concep"  src="" class="width100 form-control"  type="text" value="<?php echo $lista['Concepto']; ?>" size="50"></div>
                <br> <br>
	 </div>
	 <div class="form-group">
		<div class="width30 floatL"><label>Costo por el servicio</label></div>
		<div class="width70 floatR"><input  name="costo_s" class="width100 form-control" type="text" value="<?php echo $lista['Costo_serv']; ?>" style="width:  55%;"  size="50"></div>
                <br> <br>
	 </div>
             <div class="form-group">
 		<div class="width30 floatL" ><label>Comentarios</label></div>
                <div class="width70 floatR" ><textarea  class="width100 form-control"  type="text" style="height: 115px;" size="50" readonly=""><?php echo $lista2['Comentarios']; ?> </textarea> </div>
                <br>    <br>  <br> <br> <br>  
 	 </div>
	 
 	 	
 	

  	 <div class="form-group">
  	 <div class="row">
	 <div class="width50"><input class="btn btn-success" type="submit"   value="Guardar" style="font-weight: bold"></div>
         <div class="width50"><a class="btn btn-danger"  style="font-weight: bold; color: white;" href="cotizacion_evaluacion.php">Regresar</a>	 </div>	
  	 </div>
  	 </div>

       
		</div>
          </div>
        </section>




     </form>      
		
	 
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
