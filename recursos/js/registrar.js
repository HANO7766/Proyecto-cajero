
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
VALIDAR MONTO CLIENTE Y CAJERO RADIO BUTTON
=============================================*/




$('input[name="monto"]').on("click",function(){

  var idCajero = $("#cajeroID").val();
   var monto =  $(this).val();
   var rutCliente = $("#rutCliente").val();


   /*=============================================
   VALIDAR MONTO CAJERO
   =============================================*/

var datos = new FormData();
datos.append("idCajero", idCajero);


$.ajax({

    url:"../ajax/ajax.cajero.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    // dataType: "json",
    success: function(respuesta){

     var montoCaja = parseFloat(respuesta);
     var montoRetiro = parseFloat(monto);
     if(montoRetiro > montoCaja ){
         swal({
          title: "El monto es superior al existente en caja",
          type: "warning",
          confirmButtonText: "¡Cerrar!"
          })
         setTimeout(() => {
          window.location.reload(); 
       }, 2500);
     } else{
        console.log("Si se puede hacer el retiro")
     }

      
        
    


    }

});


   /*=============================================
   VALIDAR MONTO CLIENTE
   =============================================*/

   var datos2 = new FormData();
   datos2.append("clienteRut", rutCliente);
   
   
   $.ajax({
   
       url:"../ajax/ajax.cliente.php",
       method: "POST",
       data: datos2,
       cache: false,
       contentType: false,
       processData: false,
       // dataType: "json",
       success: function(respuesta){


   
        var montoCliente = parseFloat(respuesta);
        var montoRetiro = parseFloat(monto);
        if(montoRetiro > montoCliente ){
          swal({
            title: "No hay saldo suficiente",
            type: "warning",
            confirmButtonText: "¡Cerrar!"
            })
           setTimeout(() => {
            window.location.reload(); 
         }, 2500);
        } else{
           console.log("Si se puede hacer el retiro")
        }
   
         
           
       
   
   
       }
   
   });
 
 
 })

 
/*=============================================
VALIDAR MONTO CLIENTE Y CAJERO DEL OTRO MONTO INPUT
=============================================*/
$('#inptCantidad').on("blur",function(){

  var idCajero = $("#cajeroID").val();
   var monto =  $(this).val();
   var rutCliente = $("#rutCliente").val();

if(monto > 0){


   /*=============================================
   VALIDAR MONTO CAJERO
   =============================================*/

var datos = new FormData();
datos.append("idCajero", idCajero);


$.ajax({

    url:"../ajax/ajax.cajero.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    // dataType: "json",
    success: function(respuesta){

     var montoCaja = parseFloat(respuesta);
     var montoRetiro = parseFloat(monto);
     if(montoRetiro > montoCaja ){
         swal({
           title: "El monto es superior al existente en caja",
           type: "warning",
           confirmButtonText: "¡Cerrar!"
           })
          setTimeout(() => {
           window.location.reload(); 
        }, 2500);
     } else{
        console.log("Si se puede hacer el retiro")
     }

      
        
    


    }

});


   /*=============================================
   VALIDAR MONTO CLIENTE
   =============================================*/

   var datos2 = new FormData();
   datos2.append("clienteRut", rutCliente);
   
   
   $.ajax({
   
       url:"../ajax/ajax.cliente.php",
       method: "POST",
       data: datos2,
       cache: false,
       contentType: false,
       processData: false,
       // dataType: "json",
       success: function(respuesta){


   
        var montoCliente = parseFloat(respuesta);
        var montoRetiro = parseFloat(monto);
        if(montoRetiro > montoCliente ){
          swal({
            title: "No hay saldo suficiente",
            type: "warning",
            confirmButtonText: "¡Cerrar!"
            })
           setTimeout(() => {
            window.location.reload(); 
         }, 2500);
        } else{
           console.log("Si se puede hacer el retiro")
        }
   
         
           
       
   
   
       }
   
   });
 





  
} else {

  swal({
    title: "El monto no pueder ser menor a 0",
    type: "warning",
    confirmButtonText: "¡Cerrar!"
    })
   setTimeout(() => {
    window.location.reload(); 
 }, 2500);
}




})






/*=============================================
ENVIAR DATOS DE GIRO
=============================================*/



$("#buttonG").on("click" ,function(){

 var idCajero = $("#cajeroID").val();
 let Monto = $('input[name="monto"]:checked').val();
 var inptCantidad = $("#inptCantidad").val();
 var rutCliente = $("#rutCliente").val();


 
 if(inptCantidad){
   var retiro = inptCantidad;
 } else {
   var retiro = Monto;
 }

 var datosGiro = new FormData();
 datosGiro.append("clienteRut", rutCliente);
 datosGiro.append("cajeroID", idCajero);
 datosGiro.append("cantidad", retiro);




 
 $.ajax({
 
     url:"../ajax/ajax.giro.php",
     method: "POST",
     data: datosGiro,
     cache: false,
     contentType: false,
     processData: false,
     // dataType: "json",
     success: function(respuesta){
           
        var mensaje = respuesta;

        console.log(respuesta);


       if(mensaje != 'ok'){
       
           swal({
             title: "Giro realizado correctamente",
             type: "success",
             confirmButtonText: "¡Cerrar!"
             })

                   
            setTimeout(() => {
              window.location = "http://localhost/Proyecto/vistas/principal.php";
            }, 2000);

        } else {

          swal({
            title: "Error al realizar el giro",
            type: "warning",
            confirmButtonText: "¡Cerrar!"
            })

        }
     
 
 
     }
 
 });
 



})