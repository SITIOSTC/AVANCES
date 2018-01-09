	function validar_contrasena() {
	var caracter_invalido = " ";
	var longitud = 6;
	var cla1 = document.getElementById('pass').value;
	var cla2 = document.getElementById('pass1').value;

		if (document.getElementById('pass').value.length < longitud) {
			alert('Tu clave debe constar de ' + longitud + ' caracteres.');
			return false;
		}

		if (document.getElementById('pass').value.indexOf(caracter_invalido) > -1) {
			alert("Las claves no pueden contener espacios");
			return false;
		}
		else {
			if (cla1 != cla2) {
				alert ("Las claves no son iguales");
				return false;
			}
			else {
				alert('Contraseña correcta');
				return true;
      		}

	}
}