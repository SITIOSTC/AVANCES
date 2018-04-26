		
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
                        $.post("../conexiones/conexion_estaciones.php", { nom_linea: nom_linea }, function(data){
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
                        $.post("../conexiones/conexion_id_estaciones.php", { estacion: estacion, elemento: elemento }, function(data){
                            $("#cbx_id_estacion").html(data);
					});
				});
			})
		});

		$(document).ready(function(){
        	$("#cbx_linea").change(function () {
            	$("#cbx_linea option:selected").each(function () {
	            	area = $(this).val();
                        $.post("../conexiones/conexion_areas.php", { area: area }, function(data){
                            $("#areas").html(data);
					});
				});
			})
		});

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

	/*FUNCION DEL BUSCADOR*/


/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

	/*VALIDA EL CAMPO DE CONTRASEÑA*/
	function valida() {

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
				alert ("Las constraseñas no coinsiden");
				//regresa un valor falso
				return false;
			}
			//sino, si el valor de la clave optenida del formulario: "pass" y "pass1" son iguales, se manda una alerta de datos registrados
			else if(cla1 == cla2){
				alert('Los datos han sido registrados correctamente');
				//regresa un valor verdadero
				return true;
      		}
		}
	}

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

	/*FUNCIÓN DE CONFIRMACIÓN*/
	function Confirmacion() {
		if (confirm('¿Está seguro de que desea eliminar el registro?')==true) {
		    return true;
		}else{
		    return false;
		}
	}