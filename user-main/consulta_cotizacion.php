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
			<th>Número de cotización</th>
            <th>Descripción </th>
            <th>Costo del servicio</th>
            <th>Fecha de cotizacion</th>
			<th>Estado del pago</th>
            <th id="boton_eliminar"></th>
			
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
			<td>'.$fila['Concepto'].'</td>
            <td>$'.$fila['Costo_serv'].' MXN</td>
			<td>'.$fila['fecha_consulta'].'</td>
			<td style="font-weight:bold"><p id="estado-pago">'.$fila['pago'].'</p></td>
            <td class=“text-center” id=boton_actualizar'.$contador.'><a  class="btn btn-info btn-xs btn-space" href=datos_evaluacion.php?id='.$idcotizar.' style="font-weight: bold; color:white;">Pagar</a></td>
		</tr>
		';
	}

	$tabla.='</div></table><br>';
} else
	{
		$tabla="<br><br><br>No se encontraron coincidencias con sus criterios de búsqueda.";
	}
	/*
	$estadoPago = "SELECT pago FROM `evaluacion` where cliente_idCliente = '$idCliente';";
	$resultado = mysqli_query($conexion, $estadoPago);
	$listaP = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

		if ($listaP["pago"] == "ACREDITADO") {
			echo '<script language="javascript">
			document.getElementById("estado-pago").classList.remove("text-warning");
			document.getElementById("estado-pago").classList.add("text-success");
			</script>';
		}
	*/
echo $tabla;

?>
