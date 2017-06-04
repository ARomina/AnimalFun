//Expresiones regulares para la validacion
var regexLetrasNumeros=/^[-\w\.\$]{4,10}$/;
var regexLetrasNumeros2=/^[-\w\.\$]{6,8}$/;

//Inicialización de variables
var usuario = "";
var password = "";

function login(){

    if(validacionLogin()){
			$.ajax({

					url: "http://localhost/animalFun/extras/procesaLogin.php", 
	                type: "POST",
	                data: {"usuario": usuario, 
	                       "password": password, 
	                       },
	                dataType: "html",
	                cache: false,
	                beforeSend: function() {    
	                    console.log("Processing...");
	                },
	                success: 
	                      function(data){
	                        if(data == "USUARIO VALIDO"){
	                        	$("#myModal").modal("toggle");
        						$("#mensajeModal").html("¡Bienvenid@!");
        						setTimeout(function () {
								    window.location.href = "http://localhost/animalFun/index.php";
								}, 1200);
	                        }else{
	                        	$("#myModal").modal("toggle");
        						$("#mensajeModal").html("Usuario o contraseña inválidos, por favor, volvé a intentarlo");
        						setTimeout(function () {
								    window.location.href = "http://localhost/animalFun/login.php";
								}, 1200);
	                        }
	                    }

        });

    }else{
        //alert("Datos incorrectos");
    }
					
}

	function validacionLogin(){

    	//Tomo los elementos
    	usuarioElemento = document.getElementById("usuario");
    	usuario = document.getElementById("usuario").value;
    	passwordElemento = document.getElementById("password");
    	password = document.getElementById("password").value;

        if(validacionUsuario()){
        	if(validacionPassword()){
        		return true;
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