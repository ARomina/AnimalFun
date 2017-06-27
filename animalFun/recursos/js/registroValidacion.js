//Expresiones regulares para la validacion
var regexLetrasNumeros=/^[-\w\.\$]{4,30}$/; //Usuario
var regexLetrasNumeros2=/^[-\w\.\$]{6,8}$/; //Contraseña
var regexLetrasEspacios=/^[a-zA-Z\s]*$/;
var regexMail=/\S+@\S+\.\S+/;

//Inicialización de variables
var usuario = "";
var nombre = "";
var apellido = "";
var correo = "";
var correo2 = "";
var password = "";
var password2 = "";
var checkboxCondiciones = "";

function registro(){

    if(validacionRegistro()){
    	//alert("Exito!");
    	console.log(usuario);
    	console.log(nombre);
    	console.log(apellido);
    	console.log(correo);
    	console.log(correo2);
    	console.log(password);
    	console.log(password2);
			$.ajax({

					url: "http://animalFun.fun/animalFun/extras/procesaRegistro.php", 
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
								    window.location.href = "http://animalFun.fun/animalFun/index.php";
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
        							setTimeout(function () {
								    window.location.href = "http://animalFun.fun/animalFun/vistas/secciones/unirse.php";
									}, 1200);
        					}
	                    }

        });

    }else{
        //alert("Datos incorrectos");
    }
					
}

	function validacionRegistro(){

    	//Tomo los elementos
    	usuarioElemento = document.getElementById("usuario");
    	usuario = document.getElementById("usuario").value;
    	nombreElemento = document.getElementById("nombre");
    	nombre = document.getElementById("nombre").value;
    	apellidoElemento = document.getElementById("apellido");
    	apellido = document.getElementById("apellido").value;
    	correoElemento = document.getElementById("correo");
    	correo = document.getElementById("correo").value;
    	correo2Elemento = document.getElementById("correo2");
    	correo2 = document.getElementById("correo2").value;
    	passwordElemento = document.getElementById("password");
    	password = document.getElementById("password").value;
    	password2Elemento = document.getElementById("repassword");
    	password2 = document.getElementById("repassword").value;
    	checkboxCondiciones = document.getElementById("checkboxCondiciones");

        if(validacionUsuario()){
        	if(validacionNombreUsuario()){
        		if(validacionApellidoUsuario()){
        			if(validacionCorreo()){
        				if(validacionCorreo2()){
        					if(validacionPassword()){
        						if(validacionPassword2()){
        							if(validacionCheckbox()){
        							return true;
        							}
        						}
        					}
        				}
        			}
        		}
        	}
        }

       return false;
        
	}

	//Validaciones de los campos
	function validacionUsuario(){
		if((usuario.length == 0) || (!usuario.match(regexLetrasNumeros))){
			usuarioElemento.classList.add("error");
			document.getElementById("alertaUsuario").style.visibility = "visible";
			return false;
		}else{
			usuarioElemento.classList.remove("error");
			document.getElementById("alertaUsuario").style.visibility = "hidden";
			return true;
		}
    }

    function validacionNombreUsuario(){
    	if((nombre.length == 0) || (!nombre.match(regexLetrasEspacios))){
			nombreElemento.classList.add("error");
			document.getElementById("alertaNombreUsuario").style.visibility = "visible";
			return false;
		}else{
			nombreElemento.classList.remove("error");
			document.getElementById("alertaNombreUsuario").style.visibility = "hidden";
			return true;
		}
    }

    function validacionApellidoUsuario(){
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
    }