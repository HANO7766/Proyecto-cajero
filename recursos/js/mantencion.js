
let Cajero = null;

var datos = new FormData();
datos.append("CajeroNull", Cajero);


$.ajax({

    url:"../ajax/ajax.cajero.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){
        

      respuesta.forEach(funcionForEach);

      function funcionForEach(item, index){
          

        if(item.cajeroID != ""){

   

          $("#cajeroID").append(
            '<option value="'+item.cajeroID+'">'+item.cajeroID+'</option>'
          )

          
        
        }

        

      }

    
    

    


    }

});



/*=============================================
ENVIAR DATOS MANTENCIÓN
=============================================*/



$("#buttonM").on("click" ,function(){

  var idCajero = $("#cajeroID").val();
  var inptMantencion = $("#inptMantencion").val();
  var tecnicoRut = $("#tecnicoRut").val();


  
  var datosGiro = new FormData();
  datosGiro.append("tecnicoRut", tecnicoRut);
  datosGiro.append("cajeroID", idCajero);
  datosGiro.append("mantencionCantidad", inptMantencion);
 
 
 
 
  
  $.ajax({
  
      url:"../ajax/ajax.mantencion.php",
      method: "POST",
      data: datosGiro,
      cache: false,
      contentType: false,
      processData: false,
      // dataType: "json",
      success: function(respuesta){
            
        //  var mensaje = respuesta;
 
         console.log(respuesta);
 
 
        if(respuesta != 'ok'){
        
            swal({
              title: "Mantención realizada correctamente",
              type: "success",
              confirmButtonText: "¡Cerrar!"
              })
 
                    
             setTimeout(() => {
              window.location.reload(); 
             }, 2000);
 
         } else {
 
              swal({
                title: "Error al realizar la mantención",
                type: "warning",
                confirmButtonText: "¡Cerrar!"
                })
 
         }
      
  
  
      }
  
  });

})





/*=============================================
VALIDAR MONTO CLIENTE Y CAJERO DEL OTRO MONTO INPUT
=============================================*/
$('#inptMantencion').on("blur",function(){

  var idCajero = $("#cajeroID").val();
   var monto =  $(this).val();

if(monto > 0){


   /*=============================================
   VALIDAR MONTO CAJERO
   =============================================*/

var datos = new FormData();
datos.append("idCajero", idCajero);


$.ajax({

    url:"../ajax/ajax.mantencion.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    // dataType: "json",
    success: function(respuesta){

     var montoCaja = parseFloat(respuesta);
     var montoMantencion = parseFloat(monto);
     var nuevoMonto = montoCaja + montoMantencion;

     if(nuevoMonto >= 100000001 ){
        swal({
          title: "El monto es superior a 100M",
          type: "warning",
          confirmButtonText: "¡Cerrar!"
          })
         setTimeout(() => {
             window.location.reload(); 
        }, 500);
        

     } else{
        console.log("Si se puede hacer la mantención")
     }

      
        
    


    }

});


  
} else {
  alert("El monto no pueder ser menor a 0 ")
}




})


