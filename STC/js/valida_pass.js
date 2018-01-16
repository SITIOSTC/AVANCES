	function validar() {

		//declaracion de variables para utilizar en los errores
		var caracter_invalido = " ";
		var longitud = 6;
		//declaracion de variables para los campos de "pass" y "pass2"
		var cla1 = document.getElementById('pass').value;
		var cla2 = document.getElementById('pass1').value;

			//variables de los checkbox
			var ok = 0;
			var ckbox = document.getElementsByName('linea[]');

				//recorremos el arreglo con un ciclo for y para verificar que al menos 1 valor fue seleccionado
				for (var i=0; i < ckbox.length; i++){
					if(ckbox[i].checked == true){
						ok = 1;
					}
				}
					//Si el (los) elemento(s) del arreglo son igual a "0", mandamos una aleta de que al menos debe seleccionarse una opción
					if(ok == 0){
						alert('Seleccione al menos una linea');
							//regresa un valor falso
							return false;
					}

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
			//sino, si el valor de la clave optenida del formulario: "pass" y "pass1" son iguales y el arreglo "ok" es igual ha al menos 1, se manda una alerta de datos registrados
			else if(cla1 == cla2 && ok ==1){
				alert('Los datos han sido registrados correctamente');
				//regresa un valor falso
				return true;
      		}
		}

		
}