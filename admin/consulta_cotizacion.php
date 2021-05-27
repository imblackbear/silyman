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
$query="SELECT * FROM cotizacion ORDER BY idCotizacion";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['buscar']))
{
	$q=$conexion->real_escape_string($_POST['buscar']);
	$query="SELECT * FROM cotizacion WHERE 
		IdCotizacion LIKE '%".$q."%' OR
		Tipo_insecto LIKE '%".$q."%' OR
	        Metros LIKE '%".$q."%' OR
                    
		Comentarios LIKE '%".$q."%' OR
                fecha_consulta LIKE '%".$q."%' OR 
                
              
                cliente_idCliente LIKE '%".$q."%'";
}

$buscar=$conexion->query($query);
if ($buscar->num_rows > 0)
{
	$tabla.= 
	'<div class="table-responsive">
	<table class="table table-striped custab" id="crud" >
<thead>		
<tr>
			<th>Id Cotizacion</th>
            <th>Tipo de servicio</th>
            <th>Metros cuadrados</th>
            <th>Descripción</th>
            <th>Fecha de la solicitud</th>
            <th>Id de cliente</th>
            <th id="boton_eliminar">Actualizar</th>
			
		</tr>
                </thead>';
$contador=0;
	while($fila= $buscar->fetch_assoc())
	{
            $contador++;
            $boton="btn btn-success";
          $idcotizar=$fila['idCotizacion'];
		$tabla.=
		'<tr>
                    
			<td>'.$fila['idCotizacion'].'</td>
			<td>'.$fila['Tipo_insecto'].'</td>
			<td>'.$fila['Metros'].'m²</td>
            <td>'.$fila['Comentarios'].'</td>
			<td>'.$fila['fecha_consulta'].'</td>
			<td>'.$fila['cliente_idCliente'].'</td>
            <td class=“text-center” id=boton_actualizar'.$contador.'><a  class="btn btn-info btn-xs btn-space  btn-editar" href=datos_cotizacion.php?id='.$idcotizar.' style="font-weight: bold; color:white;"></a> <a  class="btn btn-danger btn-xs btn-space btn-eliminar" href=eliminar_cotizacion.php?id='.$idcotizar.' style="font-weight: bold; color:white; "></a></td>
			
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
