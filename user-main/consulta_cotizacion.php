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

//Prueba de sesiones

session_start();
$idCliente = $_SESSION['idCliente'];

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM evaluacion where cliente_idCliente = '$idCliente'";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['buscar']))
{
	$q=$conexion->real_escape_string($_POST['buscar']);
	$query="SELECT * FROM evaluacion WHERE 
		IdEvaluacion LIKE '%".$q."%' OR
		cotizacion_idCotizacion LIKE '%".$q."%' OR
	        cliente_idCliente LIKE '%".$q."%' OR
                   
		
                Concepto LIKE '%".$q."%' OR 
                Costo_serv LIKE '%".$q."%' OR
              
                fecha_consulta LIKE '%".$q."%'";
}

$buscar=$conexion->query($query);
if ($buscar->num_rows > 0)
{
	$tabla.= 
	'<div class="table-responsive">
	<table class="table table-striped custab" id="crud" >
<thead>		
<tr>
			<th>Id Evaluacion</th>
            <th>Id cliente</th>
            <th>Id Cotizacion</th>
            <th>Concepto</th>
            <th>Costo de servicio ($)</th>
            <th>Fecha de cotizacion</th>
            <th id="boton_eliminar">Actualizar</th>
			
		</tr>
                </thead>';
$contador=0;
	while($fila= $buscar->fetch_assoc())
	{
            $contador++;
            $boton="btn btn-success";
          $idcotizar=$fila['idEvaluacion'];
		$tabla.=
		'<tr>
            <td>'.$fila['idEvaluacion'].'</td>
            <td>'.$fila['cliente_idCliente'].'</td>
			<td>'.$fila['cotizacion_idCotizacion'].'</td>
			<td>'.$fila['Concepto'].'</td>
            <td>'.$fila['Costo_serv'].'</td>
			<td>'.$fila['fecha_consulta'].'</td>
            <td class=“text-center” id=boton_actualizar'.$contador.'><a  class="btn btn-info btn-xs btn-space" href=datos_evaluacion.php?id='.$idcotizar.' style="font-weight: bold; color:white;">Pagar</a></td>
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