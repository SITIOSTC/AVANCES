
jQuery(document).on('submit','#fomulario_login', function(event){
	event.preventDefault();
	
	jQuery.ajax({

		url:'../php/conexion_login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){

		}
	})
	.done(function(respuesta){
		console.log(respuesta);
	})
	.fail(function(resp){
		console.log("NO IDENTIDICADO");
	})
	.always(function(){
		console.log("complete");
	});
});

