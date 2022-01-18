<?php 

 Class ControladorTecnico {
  
    /*=============================================
	MOSTRAR Tecnico
	=============================================*/

	static public function ctrMostrarTecnico($item, $valor){

		$tabla = "tecnico";

		$respuesta = ModeloTecnico::mdlMostrarTecnico($tabla, $item, $valor);

		return $respuesta;

	}
    
}