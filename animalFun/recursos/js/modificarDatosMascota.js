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

function modificarDatosMascota(){

    if(validacionModifMascota()){
		
	  //var data = new FormData(document.getElementById('formularioMascota'));

			$.ajax({

					url: "http://animalFun.fun/animalFun/extras/modificacionDatosMascota.php", 
	                type: "POST",
	                data: {"idMascota": idMascota,
					       "nombre": nombre, 
						   "tipo": tipo, 
						   "raza": raza,
						   "tamano": tamano,
						   "sexo": sexo,
						   "estado":estado,
						   "caracteristicas": caracteristicas,
						  },
	             	dataType: "html",
	                cache: false,
	                beforeSend: function() {    
	                    console.log("Processing...");
	                },
	                success: 
	                    function(data){
	                        if(data == "OK"){
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("¡Se han modificado los datos exitosamente!<br>Será redirigido en breve...");
        						setTimeout(function (){
								window.location.href = "http://animalFun.fun/animalFun/vistas/usuarios/adminUsuarioMascotas.php";
								}, 1200);
					        }else{
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("No se pudo realizar la modificación, por favor intente nuevamente");
	                    	}
	                    }

        });

    }else{
        alert("Datos incorrectos");
    }
					
}

	function validacionModifMascota(){

    	//Tomo los elementos
    	idMascota = document.getElementById("idMascota").value;
    	console.log("idMascota: "+idMascota);

    	nombreElemento = document.getElementById("nombre");
    	nombre = document.getElementById("nombre").value;
    	console.log("Nombre: "+nombre);

    	tipoElemento = document.getElementById("tipo");
        tipo = tipoElemento.options[tipoElemento.selectedIndex].value;
        
        if(tipo == ""){
        	tipo = "";  //para que tenga value vacío
        }
 		console.log("Tipo: "+tipo);

        razaElemento = document.getElementById("raza");
       	raza = razaElemento.options[razaElemento.selectedIndex].value;
       	console.log("Raza: "+raza);

        tamanoElemento = document.getElementById("tamano");
       	tamano = tamanoElemento.options[tamanoElemento.selectedIndex].value;
        
        if(tamano == ""){
        	tamano = "";  //para que tenga value vacío
        }
        console.log("Tamaño: "+tamano);

        sexoElemento = document.getElementById("sexo");
       	sexo = sexoElemento.options[sexoElemento.selectedIndex].value;
        
        if(sexo == ""){
       		sexo = "";  //para que tenga value vacío
        }
        console.log("Sexo: "+sexo);

        estadoElemento = document.getElementById("estado");
       	estado = estadoElemento.options[estadoElemento.selectedIndex].value;
        
        if(estado == ""){
       		estado = "";  //para que tenga value vacío
        }
        console.log("Estado: "+estado);

        caracteristicas = document.getElementById("caracteristicas").value;
        if(caracteristicas == ""){
       		carcateristicas = "";  //para que tenga value vacío
        }
        console.log("Caracteristicas: "+caracteristicas);

        
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
       

       return false;
        
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