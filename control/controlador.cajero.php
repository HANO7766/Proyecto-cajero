<?php 

require_once "../modelo/modelo.cajero.php";

 Class ControladorCajero {
  
    /*=============================================
	MOSTRAR CAJEROS
	=============================================*/

	static public function ctrMostrarCajeros($item, $valor){

		$tabla = "cajero";

		$respuesta = ModeloCajero::mdlMostrarCajeros($tabla, $item, $valor);

		return $respuesta;

	}
    
}