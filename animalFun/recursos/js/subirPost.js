//Expresiones regulares para la validacion
var regexLetrasNumeros=/^[-\w\.\$]*$/;
var regexLetrasEspacios=/^[a-zA-Z\s]*$/;

//Inicialización de variables
var idMascota = "";
var nombre = "";
var tipo = "";
var raza = "";
var tamano = "";
var sexo = "";
var estado = "";
var caracteristicas = "";

function subirPostMascota(){
		
	  var data = new FormData(document.getElementById('formularioPost'));

			$.ajax({

					url: "http://animalFun.fun/animalFun/extras/procesaPost.php", 
	                type: "POST",
	                data: data, /*{"idMascota": idMascota,
					       "nombre": nombre, 
						   "tipo": tipo, 
						   "raza": raza,
						   "tamano": tamano,
						   "sexo": sexo,
						   "estado":estado,
						   "caracteristicas": caracteristicas,
						  },*/
	             	/*dataType: "html",*/
	             	contentType: false,
        			processData: false,
	                cache: false,
	                beforeSend: function() {    
	                    console.log("Processing...");
	                },
	                success: 
	                    function(data){
	                        if(data == "OK"){
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("¡Se ha publicado el post exitosamente!");
        						/*setTimeout(function (){
								window.location.href = "http://animalFun.fun/animalFun/vistas/usuarios/verPerfilMascota.php";
								}, 1200);*/
					        }else{
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("No se pudo publicar lo ingresado, por favor intente nuevamente");
	                    	}
	                    }

        });
			
}

	