/*=============================================
VALIDAR INCIO DE SESIÓN
=============================================*/
$("#entrar").on("click", function(){

    var rut  = $("#inptRut").val();

    var con = $("#inptCon").val();

    var usuario = $('input[name="usuario"]:checked').val();

	
	var datos = new FormData();
	datos.append("Rut", rut);
    datos.append("Con", con);
    datos.append("usuario",usuario);

	$.ajax({

		url:"ajax/ajax.login.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		// dataType: "json",
		success: function(respuesta){
			

			if(respuesta == 'ok'){


				swal({
					title: "El usuario es correcto",
					type: "success",
					confirmButtonText: "¡Cerrar!"
				  })
		

			setTimeout(() => {
				window.location = "http://localhost/Proyecto/vistas/principal.php";
			}, 2000);
				   


			} else {

				swal({
					title: "Error al iniciar sesión",
					type: "error",
					confirmButtonText: "¡Cerrar!"
				  })
			

				

			}
         
         

		
	

		}

	});

})