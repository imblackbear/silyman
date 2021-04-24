<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
$db_host="localhost";
 $db_name="silyman_bd";
 $db_usuario="root";
 $db_pass="";
 $db_puerto=3306;
     
  $conexion= mysqli_connect($db_host, $db_usuario, $db_pass, $db_name);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM cliente ORDER BY idCliente";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['buscar']))
{
	$q=$conexion->real_escape_string($_POST['buscar']);
	$query="SELECT * FROM cliente WHERE 
		IdCliente LIKE '%".$q."%' OR
		Nombre LIKE '%".$q."%' OR
	        Apellido LIKE '%".$q."%' OR
                    
		Colonia LIKE '%".$q."%' OR
                Ciudad LIKE '%".$q."%' OR 
                
                Correo LIKE '%".$q."%' OR
                Telefono LIKE '%".$q."%'";
}

$buscar=$conexion->query($query);
if ($buscar->num_rows > 0)
{
	$tabla.= 
	'<div class="table-responsive">
	<table class="table table-striped custab">
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
                </thead>';

	while($fila= $buscar->fetch_assoc())
	{
            $direccion=$fila['No. Calle'].' '.$fila['Colonia'].','.$fila['Ciudad'];
		$tabla.=
		'<tr>
                    
			<td>'.$fila['idCliente'].'</td>
			<td>'.$fila['Nombre'].'</td>
			<td>'.$fila['Apellido'].'</td>
                        <td>'.$fila['No. Calle'].' '.$fila['Colonia'].' '.$fila['Ciudad'].'</td>
			<td>'.$fila['Entre calles'].'</td>
			<td>'.$fila['Correo'].'</td>
                        <td>'.$fila['Telefono'].'</td>
			
			
		 </tr>
		';
	}

	$tabla.='</div></table><br>';
} else
	{
		$tabla="<br><br><br>No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
