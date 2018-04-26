		
		/*FUNCIONES DEL SELECT QUE MANDAN A LLAMAR LOS REGISTROS DE LA BD*/

		//Ejecuta la función una vez cargada la página web (DOM-Document Object Model, Modelo de Objeto de Documento).
    	$(document).ready(function(){
    		//Función que detecta cuando el "select" hace el cambio de alguno de sus valores
        	$("#cbx_linea").change(function () {

        		//Remueve el contenido del select "cbx_id_estacion", cuando se regresa al select cbx_linea
        		$('#cbx_id_estacion').find('option').remove().end().append('<option value = "remueve_id_estacion"></option>').val('remueve_id_estacion');

        		//Captura la selección echa
            	$("#cbx_linea option:selected").each(function () {
	                //Se almacena en una id "nom_linea"
	                nom_linea = $(this).val();
	                	//Se llama al script "conexion_estaciones", mandando los parametros de la id
                        $.post("../../../../conexiones/conexion_estaciones.php", { nom_linea: nom_linea }, function(data){
                        	//Regresa el html cuando cambia el select "cbx_id_estacion"
                            $("#cbx_estacion").html(data);
					});
				});
			})
		});
		$(document).ready(function(){
			$("#cbx_estacion").change(function () {
            	$("#cbx_estacion option:selected").each(function () {
	            	estacion = $(this).val();
	            	var elemento = $('#cbx_linea').val();
                        $.post("../../../../conexiones/conexion_id_estaciones.php", { estacion: estacion, elemento: elemento }, function(data){
                            $("#cbx_id_estacion").html(data);
					});
				});
			})
		});

		$(document).ready(function(){
        	$("#cbx_linea").change(function () {
            	$("#cbx_linea option:selected").each(function () {
	            	area = $(this).val();
                        $.post("../../.././conexiones/conexion_areas.php", { area: area }, function(data){
                            $("#areas").html(data);
					});
				});
			})
		});

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

	/*FUNCION DE ELIMINAR DOCUMENTOS*/
			$(document).ready(function() {
				$('.delete').click(function(){
					var parent = $(this).parent().attr('id_manual');
					var service = $(this).parent().attr('data');
					var dataString = 'id_manual='+service;

					if (confirm('¿Está seguro de que desea eliminar el archivo?')==true) {
						$.ajax({
								type: "POST",
								url: "del_file.php",
								data: dataString,
								success: function() {			
									location.reload();
								}
						});
					    return true;
					}else{
					    return false;
					}
				});                 
			});

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
function verif() {
	//Obtemos el valor de los campos tipo input 
	var node_list = document.getElementsByTagName('input');
	
	for (var i = 0; i < node_list.length; i++) {
	var node = node_list[i];

		//Si el archivo
		if (node.getAttribute('type') == 'file') {
			if (node.value == '') {
				alert("Por favor escoja un archivo");
				return false;
			}
		}
	}
}

/*---------------------------------------------------FUNCIÓN QUE VALIDA EL TIPO DE ARCHIVO ---------------------------------------------------------*/
function verifica_archivo(){
	//Obtemos el id del campo file
    var archiv_input = document.getElementById('archivo');
    var valida_input = archiv_input.value;
    var extenciones_permitidas = /(.jpg|.jpeg|.png|.gif.|.pdf)$/i;
    if(!extenciones_permitidas.exec(valida_input)){
        alert('Solo se permiten archivos con extencion:\n ".pdf" -".jpeg" -".jpg" -".png" -".gif".');
        archiv_input.value = '';
        return false;
    }else{
        //Previo de archivo
        if (archiv_input.files && archiv_input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('muestra_archivo').innerHTML = '<iframe src="'+e.target.result+'" width="750" height="500"/></iframe>';
            };
            reader.readAsDataURL(archiv_input.files[0]);
        }
    }
}
/*----------------------------------------------------------------------------------------------------------------------------------------------------*/

	/*FUNCIÓN DE CONFIRMACIÓN ELIMINACION*/
	function confirma_eliminacion() {
		if (confirm('¿Está seguro de que desea eliminar el registro(s)?')==true) {
		    return true;
		}else{
		    return false;
		}
	}
/*----------------------------------------------------------------------------------------------------------------------------------------------------*/

$(document).ready(function(){               
      var consulta;    
      //hacemos focus
      $("#nom_usuario").focus();                                        
      //comprobamos si se pulsa una tecla
      $("#nom_usuario").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#nom_usuario").val();                         
             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {                                 
                  $("#resultado").html('<img src="error.png" />');                      
                        $.ajax({
                              type: "POST",
                              url: "comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                              }
                  });                        
             });                  
      });                     
});

$(document).ready(function(){               
      var consulta1;    
      //hacemos focus
      $("#expediente").focus();                                        
      //comprobamos si se pulsa una tecla
      $("#expediente").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta1 = $("#expediente").val();                         
             //hace la búsqueda
             $("#resultado1").delay(1000).queue(function(m) {                                 
                  $("#resultado1").html('<img src="error.png" />');                      
                        $.ajax({
                              type: "POST",
                              url: "js/comprueba_expediente.php",
                              data: "a="+consulta1,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    
                              		$("#resultado1").html(data);
                                    	m();
                              }
                  });                        
             });                  
      });                     

});


$(document).ready(function(){               
	var numero;    
	//hacemos focus
	$("#expediente").focus();                                        
	//comprobamos si se pulsa una tecla
	$("#expediente").keyup(function(e){
		//obtenemos el texto introducido en el campo
		numero = $("#expediente").val();  

		if (!/^([0-9])*$/.test(numero)){
			alert("La letra: \""+numero +"\"" + " no es un número");
			$("#expediente").val("");
			$("#resultado1").html("");
		}
		//transformamos la variable numero a un arreglo para poder medir lo y validar sus posiciones.
		if (numero.length>=6) {
			alert('Solo se permiten 5 numeros para el expediente.');
		}
	});                     
});


