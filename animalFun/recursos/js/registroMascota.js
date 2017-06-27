//Expresiones regulares para la validacion
var regexLetrasNumeros=/^[-\w\.\$]*$/;
var regexLetrasEspacios=/^[a-zA-Z\s]*$/;

//Inicialización de variables
var foto = "";
var nombre = "";
var tipo = "";
var raza = "";
var tamano = "";
var sexo = "";
var caracteristicas = "";

function registroMascota(){

    if(validacionRegistroMascota()){
		
	    var data = new FormData(document.getElementById('formularioMascota'));

			$.ajax({

					url: "http://animalFun.fun/animalFun/extras/procesaRegistroMascota.php", 
	                type: "POST",
	                data: data,
	             	contentType: false,
        			processData: false,
	                cache: false,
	                beforeSend: function() {    
	                    console.log("Processing...");
	                },
	                success: 
	                    function(data){
	                        if(data == "REGISTRO EXITOSO"){
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("¡Se ha registrado la mascota correctamente!<br>Será redirigido en breve...");
        						setTimeout(function (){
								window.location.href = "http://animalFun.fun/animalFun/vistas/usuarios/adminUsuarioMascotas.php";
								}, 1200);
					        }else{
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("No se pudo realizar el registro, por favor intente nuevamente");
	                    	}
	                    }

        });

    }else{
        //alert("Datos incorrectos");
    }
					
}

	function validacionRegistroMascota(){

    	//Tomo los elementos

    	//Por un tema de seguridad del browser, se pone esto en vez de .value (sino tira C://fakepath)
    	fotoElemento = document.getElementById("fotoMascota");
    	//foto = document.getElementById("fotoMascota").files[0].name;
    	//console.log("Foto: "+foto);

    	nombreElemento = document.getElementById("nombre");
    	nombre = document.getElementById("nombre").value;
    	console.log("Nombre: "+nombre);

    	tipoElemento = document.getElementById("tipo");
        tipo = tipoElemento.options[tipoElemento.selectedIndex].value;
        
        if(tipo == "Seleccione una opción"){
        	tipo = "";  //para que tenga value vacío
        }
 		console.log("Tipo: "+tipo);

        razaElemento = document.getElementById("raza");
       	raza = razaElemento.options[razaElemento.selectedIndex].value;
       	console.log("Raza"+raza);

        tamanoElemento = document.getElementById("tamano");
       	tamano = tamanoElemento.options[tamanoElemento.selectedIndex].value;
        
        if(tamano == "Seleccione una opción"){
        	tamano = "";  //para que tenga value vacío
        }
        console.log("Tamaño: "+tamano);

        sexoElemento = document.getElementById("sexo");
       	sexo = sexoElemento.options[sexoElemento.selectedIndex].value;
        
        if(sexo == "Seleccione una opción"){
       		sexo = "";  //para que tenga value vacío
        }
        console.log("Sexo: "+sexo);

        estadoElemento = document.getElementById("estado");
       	estado = sexoElemento.options[estadoElemento.selectedIndex].value;
        
        if(estado == "Seleccione una opción"){
       		estado = "";  //para que tenga value vacío
        }
        console.log("Estado: "+estado);

        caracteristicas = document.getElementById("caracteristicas").value;
        console.log("Caracteristicas: "+caracteristicas);

        if(validacionFotoMascota()){
        	if(validacionNombreMascota()){
	        	if(validacionTipoMascota()){
	        		if(validacionTamanoMascota()){
	        			if(validacionSexoMascota()){
	        				if(validacionEstadoMascota()){
	        					return true;	
	        				}
							
	        			}

	        		}
	        		
	        	}
	        }
        }
       

       return false;
        
	}

	//Validaciones de los campos
	function validacionFotoMascota(){
		if(!(document.getElementById("fotoMascota").value)){
	    	fotoElemento.classList.add("error");
			document.getElementById("alertaFotoMascota").style.visibility = "visible";
			return false;
		}else{
			fotoElemento.classList.remove("error");
			document.getElementById("alertaFotoMascota").style.visibility = "hidden";
			return true;
		}
	}

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

	function validacionTamanoMascota(){
		if(tamano == ""){
				tamanoElemento.classList.add("error");
				document.getElementById("alertaTamano").style.visibility = "visible";
				return false;
			}else{
				tamanoElemento.classList.remove("error");
				document.getElementById("alertaTamano").style.visibility = "hidden";
				return true;
			}

	}

	function validacionSexoMascota(){
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

	function validacionEstadoMascota(){
		if(estado == ""){
				estadoElemento.classList.add("error");
				document.getElementById("alertaEstado").style.visibility = "visible";
				return false;
			}else{
				estadoElemento.classList.remove("error");
				document.getElementById("alertaEstado").style.visibility = "hidden";
				return true;
			}
			
	}