<?php 

require_once "../modelo/modelo.mantenciones.php";

 Class ControladorMantenciones {
  
    /*=============================================
	MOSTRAR Mantenciones
	=============================================*/

	static public function ctrMostrarMantenciones($item, $valor){

		$tabla = "mantenciones";

		$respuesta = ModeloMantenciones::mdlMostrarMantenciones($tabla, $item, $valor);

		return $respuesta;

	}
    
}