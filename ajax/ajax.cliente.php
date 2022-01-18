<?php

require_once "../control/controlador.cliente.php";
require_once "../modelo/modelo.cliente.php";

class Cliente {



/*=============================================
VALIDAR MONTO CLIENTE
=============================================*/	

public $clienteRut;


public function ajaxValidarMontoCliente(){



    $item = 'clienteRut';
    $valor = $this->clienteRut;
  
    $cajero = ControladorCliente::ctrMostrarClientes($item, $valor);

    $monto =  $cajero['clienteMonto'];

    echo $monto;

    


}




}






/*=============================================
VALIDAR MONTO CAJERO
=============================================*/
if(isset($_POST["clienteRut"])){

    $validar = new Cliente();
    $validar -> clienteRut = $_POST["clienteRut"];
    $validar -> ajaxValidarMontoCliente();
    
}