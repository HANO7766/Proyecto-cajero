<?php

require_once "../control/controlador.cajero.php";
require_once "../modelo/modelo.giros.php";
require_once "../modelo/modelo.cajero.php";
require_once "../control/controlador.cliente.php";
require_once "../modelo/modelo.cliente.php";

class Giro {


/*=============================================
 REGISTRAR EL GIRO
=============================================*/	

public $clienteRut;
public $cajeroID;
public $cantidad;



public function ajaxRegistrarGiro(){

    $tabla = "giros";


    $valorRut = $this->clienteRut;
    $valorcajeroID = $this->cajeroID;
    $valorCantidad = $this->cantidad;

    date_default_timezone_set('America/Santiago');

    $girosFecha = date('Y-m-d');


    
    $datos = array("clienteRut"=>$valorRut,
    "girosFecha"=>$girosFecha,
    "cajeroID"=>$valorcajeroID,
    "girosCantidad"=>$valorCantidad,
    );

  
    $giro = ModeloGiros::mdlRegistrarGiro($tabla, $datos);

    
  /*=============================================
   ACTUALIZAR MONTO DEL CAJERO
  =============================================*/	


    $item = 'cajeroID';
    $valor = $valorcajeroID;
  
    $cajero = ControladorCajero::ctrMostrarCajeros($item, $valor);


      $montoCajero  = $cajero['cajeroMonto'];

      $montoNuevo  =  $montoCajero - $valorCantidad;

       $tablaCajero = "cajero";
      
       $datosCajero = array("cajeroID"=>$valorcajeroID,
                             "cajeroMonto"=>$montoNuevo,
                           );
      if($valorCantidad <= $montoCajero ){

       $actualizarCajero = ModeloCajero::mdlActualizarMontoCajero($tablaCajero, $datosCajero);


      }






   /*=============================================
   ACTUALIZAR MONTO DEL CLIENTE
  =============================================*/	

 

  
     $itemCliente = 'clienteRut';
     $valorCliente = $valorRut;
     
     $cliente = ControladorCliente::ctrMostrarClientes($itemCliente, $valorCliente);

     $montoCliente  = $cliente['clienteMonto'];

     $montoNuevoCliente  =  $montoCliente - $valorCantidad;

     $tablaCliente = "cliente";

      $datosCliente = array ("clienteRut"=>$valorRut,
                             "clienteMonto"=>$montoNuevoCliente
     ); 

     if($valorCantidad <= $montoCliente ){
     
     $actualizarCliente = ModeloCliente::mdlActualizarMontoCliente($tablaCliente, $datosCliente);

    }


     echo $giro;
    


}




}





/*=============================================
VALIDAR MONTO CAJERO
=============================================*/
if(isset($_POST["clienteRut"])){

    $validar = new Giro();
    $validar -> clienteRut = $_POST["clienteRut"];
    $validar -> cajeroID = $_POST["cajeroID"];
    $validar -> cantidad = $_POST["cantidad"];
    $validar -> ajaxRegistrarGiro();
    
}