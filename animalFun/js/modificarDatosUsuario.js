//Expresiones regulares para la validacion
var regexLetrasEspacios=/^([a-zA-Z\s])*$/;
var regexMail=/(\S+@\S+\.\S)+/;
var regexSoloNumeros=/^([0-9])+$/;
var regexFecha=/^(\d{1,2}\/\d{1,2}\/\d{2,4}|)$/;

//Inicialización de variables
var nombre = "";
var apellido = "";
var correo = "";
var telefono = "";
var sexo = "";
var fechaNac = "";

	function modificarDatosUsuario(){

		if(validacionDatosModif()){
			
			$.ajax({
					url: "http://localhost/animalFun/extras/modificacionDatosUsuario.php",
					type: "POST",
					data: {//"id": id,
					       "nombre": nombre, 
						   "apellido": apellido, 
						   "correo": correo,
						   "telefono": telefono,
						   "sexo": sexo,
						   "fechaNac":fechaNac,
						   },
					dataType: "html",
					beforeSend: function() {	
						console.log("Procesando...");
					},
					success: function(data) {
						if(data == "OK"){
							$("#myModal").modal("toggle");
        					$("#mensajeModal").html("¡Se han modificado los datos exitosamente!<br>Será redigirido en unos instantes...");
        					setTimeout(function () {
								window.location.href = "http://localhost/animalFun/adminUsuario.php";
							}, 1200);
						}else{
							$("#myModal").modal("toggle");
        					$("#mensajeModal").html("No se han modificado datos o ha habido un error");
						}
						
					}
							
			});
		}

	}

	function validacionDatosModif(){

		//Tomo los elementos
    	nombreElemento = document.getElementById("nombre");
    	nombre = document.getElementById("nombre").value;
    	console.log(nombre);
        
        apellidoElemento = document.getElementById("apellido");
        apellido = document.getElementById("apellido").value;
        console.log(apellido);
        
        correoElemento = document.getElementById("correo");
        correo = document.getElementById("correo").value;
        console.log(correo);

        telefonoElemento = document.getElementById("telefono");
        telefono = document.getElementById("telefono").value;
        console.log(telefono);

        //sexoElemento = document.getElementById("sexo");
        //sexoSeleccion = document.getElementById("sexo").selectedIndex;
        //sexo = parseInt(document.getElementById("sexo").value);  //parseInt porque en la base ese campo es un int
        sexoElemento = document.getElementById("sexo");
        sexo = sexoElemento.options[sexoElemento.selectedIndex].value;
        
        if(sexo == "Seleccione una opción"){
        	sexo = "";  //para que tenga value vacío
        }

        console.log(sexo);

        fechaNacElemento = document.getElementById("fechaNac");
        fechaNac = document.getElementById("fechaNac").value;
        console.log(fechaNac);

        if(validacionNombre()){
        	if(validacionApellido()){
        		if(validacionCorreo()){
        			if(validacionTelefono()){
        				if(validacionSexo()){
        					if(validacionFechaNac()){
        						return true;
        					}
        				}
        			}

        		}

        	}

        }

        return false;

	}

	//Validaciones campo por campo
	function validacionNombre(){
		if(!nombre.match(regexLetrasEspacios)){
				nombreElemento.classList.add("error");
				document.getElementById("alertaNombre").style.visibility = "visible";
				return false;
			}else{
				nombreElemento.classList.remove("error");
				document.getElementById("alertaNombre").style.visibility = "hidden";
				return true;
			}
	}

	function validacionApellido(){
		if(!apellido.match(regexLetrasEspacios)){
				apellidoElemento.classList.add("error");
				document.getElementById("alertaApellido").style.visibility = "visible";
				return false;
			}else{
				apellidoElemento.classList.remove("error");
				document.getElementById("alertaApellido").style.visibility = "hidden";
				return true;
			}
	}

	function validacionCorreo(){
		if(!correo.match(regexMail)){
				correoElemento.classList.add("error");
				document.getElementById("alertaCorreo").style.visibility = "visible";
				return false;
			}else{
				correoElemento.classList.remove("error");
				document.getElementById("alertaCorreo").style.visibility = "hidden";
				return true;
			}

	}

	function validacionTelefono(){
		if(!telefono.match(regexSoloNumeros)){
				telefonoElemento.classList.add("error");
				document.getElementById("alertaTelefono").style.visibility = "visible";
				return false;
			}else{
				telefonoElemento.classList.remove("error");
				document.getElementById("alertaTelefono").style.visibility = "hidden";
				return true;
			}
	}

	function validacionSexo(){
		if(sexo == ""){
				sexoElemento.classList.add("error");
				document.getElementById("alertaSexo").style.visibility = "visible";
				return false;
			}else{
				sexoElemento.classList.remove("error");
				document.getElementById("alertaSexo").style.visibility = "hidden";
				return true;
			}

	}

	function validacionFechaNac(){
		if(!fechaNac.match(regexFecha)){
	    		fechaNacElemento.classList.add("error");
	    		document.getElementById("alertaFecha").style.visibility = "visible";
	    		return false;
	    	}else{
	    		fechaNacElemento.classList.remove("error");
	    		document.getElementById("alertaFecha").style.visibility = "hidden";
	    		return true;
	    	}
	}