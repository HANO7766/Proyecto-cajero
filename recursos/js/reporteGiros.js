let giroNull = null;

var datos = new FormData();
datos.append("giroNull", giroNull);


$.ajax({

    url:"../ajax/ajax.reportes.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){
        

        console.log(respuesta);
                                           
                                        
                                           

      respuesta.forEach(funcionForEach);

      function funcionForEach(item, index){
          

        if(item.cajeroID != ""){

   

          $("#contenedorGiros").append(
            '<tr>'+
            '<td>'+(index+1)+'</td>'+
            '<td>'+item.clienteNombre+'</td>'+
            '<td>'+item.clienteRut+'</td>'+
            '<td>'+item.girosCantidad+'</td>'+
            '<td>'+item.cajeroID+'</td>'+
            '<td>'+item.girosFecha+'</td>'+
            '<td> <button class="button is-danger btnEliminarGiro" idGiro="'+item.girosID+'"  idCajero="'+item.cajeroID+'" cantidadGiro="'+item.girosCantidad+'"><i class="fa fa-trash"></i></button></td>'+
            '</tr>'
          )

          
        
        }

        

      }

    
    

    


    }

});



/*=============================================
ELIMINAR GIRO
=============================================*/



$("#myTable").on("click" ,".btnEliminarGiro",function(){

    var idGiro = $(this).attr("idGiro");
    var idCajero = $(this).attr("idCajero");
    var cantidadGiro = $(this).attr("cantidadGiro");


    
    var confirmacion = confirm("¿Esta seguro de borrar el giro?");

     if(confirmacion){

    
    
    var datosGiro = new FormData();
    datosGiro.append("idGiro", idGiro);
    datosGiro.append("idCajero", idCajero);
    datosGiro.append("cantidadGiro", cantidadGiro);

   
   
   

    $.ajax({
    
        url:"../ajax/ajax.reportes.php",
        method: "POST",
        data: datosGiro,
        cache: false,
        contentType: false,
        processData: false,
        // dataType: "json",
        success: function(respuesta){
        
   
        //    console.log(respuesta);
   
   
          if(respuesta != 'ok'){
          
              swal({
                title: "Giro eliminado correctamente",
                type: "success",
                confirmButtonText: "¡Cerrar!"
                })
   
                      
               setTimeout(() => {
                window.location.reload(); 
               }, 1000);
   
           } else {
   
                swal({
                  title: "Error al eliminar el giro",
                  type: "warning",
                  confirmButtonText: "¡Cerrar!"
                  })
   
           }
        
    
    
        }
    
    });
          
     }



    

  
  })
  
  
  