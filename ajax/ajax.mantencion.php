<?php

require_once "../modelo/modelo.mantenciones.php";
require_once "../control/controlador.cajero.php";
require_once "../modelo/modelo.cajero.php";

class Mantencion {


/*=============================================
VALIDAR MONTO CAJERO
=============================================*/	

public $idCajero;


public function ajaxValidarMontoCajero(){



    $item = 'cajeroID';
    $valor = $this->idCajero;
  
    $cajero = ControladorCajero::ctrMostrarCajeros($item, $valor);

    $monto =  $cajero['cajeroMonto'];

    echo $monto;

    


}


/*=============================================
REGISTRAR MANTENCIÓN
=============================================*/	

public $tecnicoRut;
public $cajeroID;
public $mantencionCantidad;


public function ajaxRegistrarMantencion(){



    $tabla = 'mantenciones';
    $valorRut = $this->tecnicoRut;
    $valorCajeroID = $this->cajeroID;
    $valorMantencion = $this->mantencionCantidad;
  

    date_default_timezone_set('America/Santiago');

    $mantencionFecha = date('Y-m-d');


    $datos = array("tecnicoRut"=>$valorRut,
    "mantencionFecha"=>$mantencionFecha,
    "cajeroID"=>$valorCajeroID,
    "mantencionCantidad"=>$valorMantencion,
    );
  
    $mantencion = ModeloMantenciones::mdlRegistrarMantencion($tabla, $datos);

 /*=============================================
   ACTUALIZAR MONTO DEL CAJERO
  =============================================*/	


  $item = 'cajeroID';
  $valor = $valorCajeroID;

  $cajero = ControladorCajero::ctrMostrarCajeros($item, $valor);


    $montoCajero  = $cajero['cajeroMonto'];

    $montoNuevo  =  $montoCajero + $valorMantencion;

     $tablaCajero = "cajero";
    
     $datosCajero = array("cajeroID"=>$valorCajeroID,
                           "cajeroMonto"=>$montoNuevo,
                         );

      if($montoNuevo < 100000001){

       $actualizarCajero = ModeloCajero::mdlActualizarMontoCajero($tablaCajero, $datosCajero);
     
      }else {
          $actualizarCajero = "error";
      
     }

  
    echo $actualizarCajero;

    


}





}

/*=============================================
VALIDAR MONTO CAJERO
=============================================*/
if(isset($_POST["idCajero"])){

    $validar = new Mantencion();
    $validar -> idCajero = $_POST["idCajero"];
    $validar -> ajaxValidarMontoCajero();
    
}



/*=============================================
REGISTRAR MANTENCIÓN{}
=============================================*/
if(isset($_POST["mantencionCantidad"])){

    $registrar = new Mantencion();
    $registrar -> tecnicoRut = $_POST["tecnicoRut"];
    $registrar -> cajeroID = $_POST["cajeroID"];
    $registrar -> mantencionCantidad = $_POST["mantencionCantidad"];
    $registrar -> ajaxRegistrarMantencion();
    
}