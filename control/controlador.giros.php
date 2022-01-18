<?php 

require_once "../modelo/modelo.giros.php";

 Class ControladorGiro {
  
    /*=============================================
	MOSTRAR CLIENTE
	=============================================*/

	static public function ctrMostrarGiros($item, $valor){

		$tabla = "giros";

		$respuesta = ModeloGiros::mdlMostrarGiros($tabla, $item, $valor);

		return $respuesta;

	}
    
}