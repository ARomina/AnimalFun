var idMascota = document.getElementById("idMascota").value;
console.log(idMascota);

function subirPostMascota(){

	/*var contenidoPost = document.getElementById("contenidoPost").value;
	console.log(contenidoPost);

	var pathFoto = "";
	if(document.getElementById("fotoPost").value != undefined){
		pathFoto = document.getElementById("fotoPost").value;
	}else{
		pathFoto = "";
	}
	console.log(pathFoto);

	var link = "";
	if(document.getElementById("videoPost").value != undefined){
		link = document.getElementById("videoPost").value;
	}else{
		link = "";
	}
	console.log(link);*/
		
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
	                        if(data.indexOf("OK") != -1){
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("¡Se ha publicado el post exitosamente!");
        						setTimeout(function (){
									location.reload();
								}, 1200);
					        }else{
					            $("#myModal").modal("toggle");
        						$("#mensajeModal").html("No se pudo publicar lo ingresado, por favor intente nuevamente");
	                    	}
	                    }

        });
			
}

	