<?php

require_once "conexion.php";

class ModeloTecnico{

    
    /*=============================================
	MOSTRAR TECNICO
	=============================================*/

	static public function mdlMostrarTecnico($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
    

	/*=============================================
	ACTUALIZAR MONTO CLIENTE 
	=============================================*/

	static public function mdlActualizarMontoCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET clienteMonto = :clienteMonto  WHERE clienteRut = :clienteRut");
	
		$stmt->bindParam(":clienteRut", $datos["clienteRut"], PDO::PARAM_STR);
		$stmt->bindParam(":clienteMonto", $datos["clienteMonto"], PDO::PARAM_STR);

 


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}




}