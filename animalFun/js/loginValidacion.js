//Expresiones regulares para la validacion
var regexpLetrasNumeros=/^[-\w\.\$]{4,10}$/;
var regexpLetrasNumeros2=/^[-\w\.\$]{6,8}$/;

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
	                        if(data == "OK"){
	                    		window.location.href = "http://localhost/animalFun/loginExito.php"; 
	                       }else{
	                            window.location.href = "http://localhost/animalFun/loginFail.php";
	                        }
	                    }

        });

    }else{
        //alert("Incorrect data");
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
			if((usuario.length == 0) || (!usuario.match(regexpLetrasNumeros))){
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
			if((password.length == 0) || (!password.match(regexpLetrasNumeros2))){
				passwordElemento.classList.add("error");
				document.getElementById("alertaContrasenia").style.visibility = "visible";
				return false;
			}else{
				passwordElemento.classList.remove("error");
				document.getElementById("alertaContrasenia").style.visibility = "hidden";
				return true;
			}
    }