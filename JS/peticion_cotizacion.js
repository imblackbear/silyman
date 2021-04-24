$(obtener_registros());

function obtener_registros(buscar)
{
	$.ajax({
		url : 'consulta_cotizacion.php',
		type : 'POST',
		dataType : 'html',
		data : { buscar: buscar },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
