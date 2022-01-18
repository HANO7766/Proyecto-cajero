<?php

require_once "../control/controlador.giros.php";
require_once "../modelo/modelo.giros.php";
require_once "../control/controlador.cajero.php";
require_once "../modelo/modelo.cajero.php";
require_once "../control/controlador.mantenciones.php";
require_once "../modelo/modelo.mantenciones.php";


class Reportes {

/*=============================================
TRAER INFORMACIÓN GIROS
=============================================*/	

public $giroNull;


public function ajaxTraerGiros(){



    $item = null;
    $valor = null;
  
    $giros = ControladorGiro::ctrMostrarGiros($item, $valor);

    echo json_encode($giros);

    


}


/*=============================================
ELIMINAR GIRO
=============================================*/	

public $idGiro;
public $idCajero;
public $cantidadGiro;


public function ajaxEliminarGiro(){


    $tablaGiro = 'giros';
    $datos = $this->idGiro;
    $valorCajeroID = $this->idCajero;
    $valorMonto = $this->cantidadGiro;

  
    $eliminar = ModeloGiros::mdlEliminarGiro($tablaGiro,$datos);


 /*=============================================
   ACTUALIZAR MONTO DEL CAJERO
  =============================================*/	


  $item = 'cajeroID';
  $valor = $valorCajeroID;

  $cajero = ControladorCajero::ctrMostrarCajeros($item, $valor);


    $montoCajero  = $cajero['cajeroMonto'];

    $montoFloat = floatval($valorMonto);

    $montoNuevo  =  $montoCajero + $montoFloat;

     $tablaCajero = "cajero";
    
     $datosCajero = array("cajeroID"=>$valorCajeroID,
                           "cajeroMonto"=>$montoNuevo,
                         );


     $actualizarCajero = ModeloCajero::mdlActualizarMontoCajero($tablaCajero, $datosCajero);

    echo $eliminar;

    


}


/*=============================================
TRAER INFORMACIÓN MANTENCIONES
=============================================*/	


public $mantencionNull;


public function ajaxTraerMantenciones(){


   
    $item = null;
    $valor = null;
  
    $mantenciones = ControladorMantenciones::ctrMostrarMantenciones($item,$valor);

    echo json_encode($mantenciones);

 
}



/*=============================================
ELIMINAR MANTENCIÓN
=============================================*/	

public $idMantencion;
public $idCajeroMan;
public $cantidadMantencion;


public function ajaxEliminarMantencion(){


    $tablaMan = 'mantenciones';
    $datosMan = $this->idMantencion;
    $valorCajeroIDMan = $this->idCajeroMan;
    $valorMontoMan = $this->cantidadMantencion;

  
    $eliminarMan = ModeloMantenciones::mdlEliminarMantencion($tablaMan,$datosMan);


 /*=============================================
   ACTUALIZAR MONTO DEL CAJERO
  =============================================*/	


  $item = 'cajeroID';
  $valor = $valorCajeroIDMan;

  $cajero = ControladorCajero::ctrMostrarCajeros($item, $valor);


    $montoCajero  = $cajero['cajeroMonto'];

    $montoFloat = floatval($valorMontoMan);

    $montoNuevo  =  $montoCajero - $montoFloat;

     $tablaCajero = "cajero";
    
     $datosCajero = array("cajeroID"=>$valorCajeroIDMan,
                           "cajeroMonto"=>$montoNuevo,
                         );


     $actualizarCajero = ModeloCajero::mdlActualizarMontoCajero($tablaCajero, $datosCajero);

    echo $eliminarMan;

    


}


}



/*=============================================
TRAER GIROS
=============================================*/

if(isset($_POST["giroNull"])){
$traer = new Reportes();
$traer -> ajaxTraerGiros();

}


/*=============================================
ELIMINAR GIRO
=============================================*/

if(isset($_POST["idGiro"])){
    $eliminar = new Reportes();
    $eliminar -> idGiro = $_POST["idGiro"];
    $eliminar -> idCajero = $_POST["idCajero"];
    $eliminar -> cantidadGiro = $_POST["cantidadGiro"];
    $eliminar -> ajaxEliminarGiro();
    
 }


 /*=============================================
TRAER MANTENCIÓN
=============================================*/

if(isset($_POST["mantencionNull"])){
    $traerm = new Reportes();
    $traerm -> ajaxTraerMantenciones();
    
 }
    

 /*=============================================
ELIMINAR MANTENCIÓN
=============================================*/

if(isset($_POST["idMantencion"])){
    $eliminar = new Reportes();
    $eliminar -> idMantencion = $_POST["idMantencion"];
    $eliminar -> idCajeroMan = $_POST["idCajeroMan"];
    $eliminar -> cantidadMantencion = $_POST["cantidadMantencion"];
    $eliminar -> ajaxEliminarMantencion();
    
 }
    
    
