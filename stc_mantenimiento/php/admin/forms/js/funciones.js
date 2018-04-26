		
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
                        $.post("../../../conexiones/conexion_estaciones.php", { nom_linea: nom_linea }, function(data){
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
                        $.post("../../../conexiones/conexion_id_estaciones.php", { estacion: estacion, elemento: elemento }, function(data){
                            $("#cbx_id_estacion").html(data);
					});
				});
			})
		});

		$(document).ready(function(){
        	$("#cbx_linea").change(function () {
            	$("#cbx_linea option:selected").each(function () {
	            	area = $(this).val();
                        $.post("../../../conexiones/conexion_areas.php", { area: area }, function(data){
                            $("#areas").html(data);
					});
				});
			})
		});

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*FUNCIÓN DE CONFIRMACIÓN ELIMINACION*/
	function confirma_eliminacion() {

		//variables de los checkbox
		var ok = 0;
		//Obtenemos los id's de los checkbox en un arreglo
		var ckbox = document.getElementsByName('id_usuario[]');

		//recorremos el arreglo con un ciclo for, para verificar que al menos 1 valor fue seleccionado
		for (var i=0; i < ckbox.length; i++){
			if(ckbox[i].checked == true){
				ok = 1;
			}
		}
		//Si el (los) elemento(s) del arreglo son igual a "0", mandamos una aleta de que al menos debe seleccionarse una opción
		if(ok == 0){
		alert('Seleccione al menos un registro para eliminar');
			//regresa un valor falso
			return false;
		}

		if (confirm('¿Está seguro de que desea eliminar el registro(s)?')==true) {
		    return true;
		}else{
		    return false;
		}
	}

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

	/*FUNCION DEL BUSCADOR*/


/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

	/*VALIDACION DE CAMPOS*/
	function valida() {
/*-------------------------------------------------FUNCION QUE VALIDA SI EL NO. EXPEDIENTE SE REPITE -------------------------------------------------*/
		var a = document.getElementById("resultado1").innerHTML;
		//console.log("tamaño: "+a.length);
		//console.log("valor: "+a.substr(-48,5));
		b = a.substr(-48,5);
		//console.log("nuevo valor: "+b);

		var x = document.getElementById('expediente').value;

		// si el valor optenido del campo "EXPEDIENTE" , es igual al de resultado1 manda un error 
		if (x == b) {
			alert('No. expediente repetido. Escriba otro por favor.');
			//regresa un valor falso
			return false;
		}
/*---------------------------------------------------------------------------------------------------------------------------------------------------*/


		//declaracion de variables para utilizar en los errores
		var caracter_invalido = " ";
		var longitud = 6;
		//declaracion de variables para los campos de "pass" y "pass2"
		var cla1 = document.getElementById('pass').value;
		var cla2 = document.getElementById('pass1').value;

		// si el valor optenido del campo "pass" (contraseña), es menor que 6 caracteres, manda una alerta para que se escriban al menos 6 caracteres 
		if (document.getElementById('pass').value.length < longitud) {
			alert('Tu contraseña debe constar de al menos ' + longitud + ' letras y/o números.');
			//regresa un valor falso
			return false;
		}

		// si el valor optenido del campo "pass" (contraseña),  es un espacio " ", se manda una alerta de que no se pueden poner espacios
		if (document.getElementById('pass').value.indexOf(caracter_invalido) > -1) {
			alert("Las contraseñas no pueden contener espacios");
			//regresa un valor falso
			return false;
		}
		//sino
		else {
			// si el valor de la clave optenida del formulario: "pass" y "pass1" son diferentes, se manda una alerta de que las constraseñas no coinsiden
			if (cla1 != cla2) {
				alert ("Las contraseñas no coinsiden");
				//regresa un valor falso
				return false;
			}
			//sino, si el valor de la clave optenida del formulario: "pass" y "pass1" son iguales, se manda una alerta de datos registrados
			else if(cla1 == cla2){
				//alert('Los datos han sido registrados correctamente');
				//regresa un valor verdadero
				return true;
      		}
		}
	}
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

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


