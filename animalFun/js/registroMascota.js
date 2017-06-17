//Expresiones regulares para la validacion
var regexLetrasNumeros=/^[-\w\.\$]*$/;
var regexLetrasEspacios=/^[a-zA-Z\s]*$/;

//Inicialización de variables
var nombre = "";
var apellido = "";
var correo = "";
var correo2 = "";
var password = "";
var password2 = "";
var checkboxCondiciones = "";

function registroMascota(){

    if(validacionRegistroMascota()){
    	//alert("Exito!");
    	console.log(nombre);
    	// console.log(apellido);
    	// console.log(correo);
    	// console.log(correo2);
    	// console.log(password);
    	// console.log(password2);
			/*$.ajax({

					url: "http://localhost/animalFun/extras/procesaRegistro.php", 
	                type: "POST",
	                data: {"usuario": usuario,
	                	   "password": password,
	                	   "repassword": password2,
	                	   "nombre": nombre,
	                	   "apellido": apellido,
	                	   "correo":correo, 
	                       },
	                dataType: "html",
	                cache: false,
	                beforeSend: function() {    
	                    console.log("Processing...");
	                },
	                success: 
	                      function(data){
	                        switch (data) {
					            case "USUARIO_REGISTRADO":
					                $("#myModal").modal("toggle");
        						    $("#mensajeModal").html("Usted se ha registrado correctamente");
        						    setTimeout(function () {
								    window.location.href = "http://localhost/animalFun/index.php";
									}, 1200);
					                break;
					            case "CLAVES_NO_IGUALES":
					                $("#myModal").modal("toggle");
        							$("#mensajeModal").html("Las claves no son iguales, intente nuevamente");
					                break;
					            case "USUARIO_REGISTRADO_ANTERIORMENTE":
					                $("#myModal").modal("toggle");
        							$("#mensajeModal").html("Este usuario ya ha sido registrado anteriormente");
					                break;
					            case "CAMPOS_VACIOS":
					                $("#myModal").modal("toggle");
        							$("#mensajeModal").html("Por favor llene todos los campos");
					                break;  
					            default: 
					            	$("#myModal").modal("toggle");
        							$("#mensajeModal").html("No se pudo realizar la operación");
        					}
	                    }

        });*/

    }else{
        alert("Datos incorrectos");
    }
					
}

	function validacionRegistroMascota(){

    	//Tomo los elementos
    	nombreElemento = document.getElementById("nombre");
    	nombre = document.getElementById("nombre").value;
    	console.log(nombre);

    	tipoElemento = document.getElementById("tipo");
        tipo = tipoElemento.options[tipoElemento.selectedIndex].value;
        
        if(tipo == "Seleccione una opción"){
        	tipo = "";  //para que tenga value vacío
        }
 		console.log(tipo);

        razaElemento = document.getElementById("raza");
       	raza = razaElemento.options[razaElemento.selectedIndex].value;
       	console.log(raza);

        tamanoElemento = document.getElementById("tamano");
       	tamano = tamanoElemento.options[tamanoElemento.selectedIndex].value;
        
        if(tamano == "Seleccione una opción"){
        	tamano = "";  //para que tenga value vacío
        }
        console.log(tamano);

        sexoElemento = document.getElementById("sexo");
       	sexo = sexoElemento.options[sexoElemento.selectedIndex].value;
        
        if(sexo == "Seleccione una opción"){
       		sexo = "";  //para que tenga value vacío
        }
        console.log(sexo);

        caracteristicas = document.getElementById("caracteristicas").value;
        console.log(caracteristicas);


       
    	/*apellidoElemento = document.getElementById("apellido");
    	apellido = document.getElementById("apellido").value;
    	correoElemento = document.getElementById("correo");
    	correo = document.getElementById("correo").value;
    	correo2Elemento = document.getElementById("correo2");
    	correo2 = document.getElementById("correo2").value;
    	passwordElemento = document.getElementById("password");
    	password = document.getElementById("password").value;
    	password2Elemento = document.getElementById("repassword");
    	password2 = document.getElementById("repassword").value;
    	checkboxCondiciones = document.getElementById("checkboxCondiciones");*/

        /*if(validacionNombreMascota()){
        	if(validacionTipoMascota()){
        		return true;
        	}
        }

       return false;*/
        
	}

	//Validaciones de los campos
    function validacionNombreMascota(){
    	if((nombre.length == 0) || (!nombre.match(regexLetrasEspacios)) || (nombre == "")){
			nombreElemento.classList.add("error");
			document.getElementById("alertaNombreMascota").style.visibility = "visible";
			return false;
		}else{
			nombreElemento.classList.remove("error");
			document.getElementById("alertaNombreMascota").style.visibility = "hidden";
			return true;
		}
    }

    function validacionTipoMascota(){
		if(tipo == ""){
				tipoElemento.classList.add("error");
				document.getElementById("alertaTipo").style.visibility = "visible";
				return false;
			}else{
				tipoElemento.classList.remove("error");
				document.getElementById("alertaTipo").style.visibility = "hidden";
				return true;
			}

	}

	 function validacionTipoMascota(){
		if(tipo == ""){
				tipoElemento.classList.add("error");
				document.getElementById("alertaTipo").style.visibility = "visible";
				return false;
			}else{
				tipoElemento.classList.remove("error");
				document.getElementById("alertaTipo").style.visibility = "hidden";
				return true;
			}

	}



   /* function validacionApellidoUsuario(){
    	if((apellido.length == 0) || (!apellido.match(regexLetrasEspacios))){
			apellidoElemento.classList.add("error");
			document.getElementById("alertaApellidoUsuario").style.visibility = "visible";
			return false;
		}else{
			apellidoElemento.classList.remove("error");
			document.getElementById("alertaApellidoUsuario").style.visibility = "hidden";
			return true;
		}
    }

    function validacionCorreo(){
    	if((correo.length == 0) || (!correo.match(regexMail))){
			correoElemento.classList.add("error");
			document.getElementById("alertaCorreo").style.visibility = "visible";
			return false;
		}else{
			correoElemento.classList.remove("error");
			document.getElementById("alertaCorreo").style.visibility = "hidden";
			return true;
		}
    }

    function validacionCorreo2(){
    	if((correo2.length == 0) || (!correo2.match(regexMail)) || (correo != correo2)){
			correo2Elemento.classList.add("error");
			document.getElementById("alertaCorreo2").style.visibility = "visible";
			return false;
		}else{
			correo2Elemento.classList.remove("error");
			document.getElementById("alertaCorreo2").style.visibility = "hidden";
			return true;
		}
    }

    function validacionPassword(){
		if((password.length == 0) || (!password.match(regexLetrasNumeros2))){
			passwordElemento.classList.add("error");
			document.getElementById("alertaContrasenia").style.visibility = "visible";
			return false;
		}else{
			passwordElemento.classList.remove("error");
			document.getElementById("alertaContrasenia").style.visibility = "hidden";
			return true;
		}
    }

    function validacionPassword2(){
		if((password2.length == 0) || (!password2.match(regexLetrasNumeros2)) || (password != password2)){
			password2Elemento.classList.add("error");
			document.getElementById("alertaContrasenia2").style.visibility = "visible";
			return false;
		}else{
			password2Elemento.classList.remove("error");
			document.getElementById("alertaContrasenia2").style.visibility = "hidden";
			return true;
		}
    }

    function validacionCheckbox(){
		if(!(checkboxCondiciones.checked)){
			document.getElementById("alertaCheckbox").style.visibility = "visible";
			return false;
		}else{
			document.getElementById("alertaCheckbox").style.visibility = "hidden";
			return true;
		}
    }*/