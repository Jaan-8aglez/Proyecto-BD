
$(obtener_id());

function obtener_id(id)
{
	$.ajax({
		url : 'like.php',
		type : 'POST',
		dataType : 'html',
		data : { id: id },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#id', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_id(valorBusqueda);
	}
	else
		{
			obtener_id();
		}
});

