let mantencionNull = null;

var datos = new FormData();
datos.append("mantencionNull", mantencionNull);


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

   

          $("#contenedorMantenciones").append(
            '<tr>'+
            '<td>'+(index+1)+'</td>'+
            '<td>'+item.mantencionCantidad+'</td>'+
            '<td>'+item.cajeroID+'</td>'+
            '<td>'+item.mantencionFecha+'</td>'+
            '<td> <button class="button is-primary btnVerMantencion" nombreTecnico="'+item.tecnicoNombre+'"  rutTecnico="'+item.tecnicoRut+'" montoCargado="'+item.mantencionCantidad+'"   idMantencion="'+item.mantencionID+'" idCajero="'+item.cajeroID+'" fechaM="'+item.mantencionFecha+'"><i class="fa fa-eye"></i></button><button class="button is-danger btnEliminarMantencion" idMantencion="'+item.mantencionID+'"  idCajero="'+item.cajeroID+'" cantidadMantencion="'+item.mantencionCantidad+'"><i class="fa fa-trash"></i></button></td>'+
            '</tr>'
          )


        
        }

        

      }

    
    

    


    }

});




/*=============================================
ELIMINAR MANTENCIÓN
=============================================*/



$("#myTable").on("click" ,".btnEliminarMantencion",function(){

    var idMantencion = $(this).attr("idMantencion");
    var idCajero = $(this).attr("idCajero");
    var cantidadMantencion = $(this).attr("cantidadMantencion");





    
    var confirmacion = confirm("¿Esta seguro de borrar el giro?");

     if(confirmacion){

    
    
    var datosGiro = new FormData();
    datosGiro.append("idMantencion", idMantencion);
    datosGiro.append("idCajeroMan", idCajero);
    datosGiro.append("cantidadMantencion", cantidadMantencion);

   
   
   

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
                title: "Mantencion eliminada correctamente",
                type: "success",
                confirmButtonText: "¡Cerrar!"
                })
   
                      
               setTimeout(() => {
                window.location.reload(); 
               }, 1000);
   
           } else {
   
                swal({
                  title: "Error al eliminar la mantención",
                  type: "warning",
                  confirmButtonText: "¡Cerrar!"
                  })
   
           }
        
    
    
        }
    
    });
          
     }



    

  
  })
  

  
  
/*=============================================
VER MANTENCIÓN
=============================================*/



$("#myTable").on("click" ,".btnVerMantencion",function(){


  $("#nombreTecnico").html("");
  $("#rutTecnico").html("");
  $("#montoCargado").html("");
  $("#idCajero").html("");
  $("#fechaM").html("");

  var idMantencion = $(this).attr("idMantencion");
  var idCajero = $(this).attr("idCajero");
  var nombreTecnico = $(this).attr("nombreTecnico");
  var rutTecnico = $(this).attr("rutTecnico");
  var montoCargado = $(this).attr("montoCargado");
  var fechaM = $(this).attr("fechaM");


  // COMPLETAR DATOS EN LISTA:

  $("#nombreTecnico").append(nombreTecnico);
  $("#rutTecnico").append(rutTecnico);
  $("#montoCargado").append(montoCargado);
  $("#idCajero").append(idCajero);
  $("#fechaM").append(fechaM);
  






})







  

