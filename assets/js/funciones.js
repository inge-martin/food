	function soloLetras(e){
		key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
		// especiales = ['8, 37, 39, 46, 190'];
		especiales = "8-37-39-46-190";

		tecla_especial = false
		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial = true;
				break;
			}
		}

		if(letras.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}
	}

	function soloNumeros(e){
		key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		numeros = "0123456789";
		// especiales = ['8, 37, 39, 46, 190'];
		especiales = "8-37-39-46-190";

		tecla_especial = false
		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial = true;
				break;
			}
		}

		if(numeros.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}
	}

	function letraNumero(e){
		key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		letrasNumeros = " áéíóúabcdefghijklmnñopqrstuvwxyz0123456789.,-;/-+!%#=?¿¡"; 
		// especiales = ['8, 37, 39, 46, 190'];
		especiales = "8-37-39-46-190";
		
		tecla_especial = false
		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial = true;
				break;
			}
		}

		if(letrasNumeros.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}         
	}

	function soloPrecios(e){
		key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		numeros = "0123456789.";
		// especiales = ['8, 37, 39, 46, 190'];
		especiales = "8-37-39-46-190";

		tecla_especial = false
		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial = true;
				break;
			}
		}

		if(numeros.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}
	}	