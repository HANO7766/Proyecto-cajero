<?php

require_once "../control/controlador.cajero.php";
require_once "../modelo/modelo.cajero.php";

class Cajero {

/*=============================================
TRAER INFORMACIÓN CAJERO
=============================================*/	

public $CajeroNull;


public function ajaxTraerCajeros(){



    $item = null;
    $valor = null;
  
    $cajeros = ControladorCajero::ctrMostrarCajeros($item, $valor);

    echo json_encode($cajeros);

    


}


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




}



/*=============================================
TRAER CAJEROS
=============================================*/

if(isset($_POST["CajeroNull"])){
$traer = new Cajero();
$traer -> ajaxTraerCajeros();

}



/*=============================================
VALIDAR MONTO CAJERO
=============================================*/
if(isset($_POST["idCajero"])){

    $validar = new Cajero();
    $validar -> idCajero = $_POST["idCajero"];
    $validar -> ajaxValidarMontoCajero();
    
}