<?php 

require_once "../modelo/modelo.cliente.php";

 Class ControladorCliente {
  
    /*=============================================
	MOSTRAR CLIENTE
	=============================================*/

	static public function ctrMostrarClientes($item, $valor){

		$tabla = "cliente";

		$respuesta = ModeloCliente::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;

	}
    
}