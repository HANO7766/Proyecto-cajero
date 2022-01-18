
<?php

require_once "conexion.php";

class ModeloCajero {

    /*=============================================
	MOSTRAR CAJEROS
	=============================================*/

	static public function mdlMostrarCajeros($tabla, $item, $valor){

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
	ACTUALIZAR MONTO CAJERO 
	=============================================*/

	static public function mdlActualizarMontoCajero($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET cajeroMonto = :cajeroMonto  WHERE cajeroID = :cajeroID");
	
		$stmt->bindParam(":cajeroID", $datos["cajeroID"], PDO::PARAM_STR);
		$stmt->bindParam(":cajeroMonto", $datos["cajeroMonto"], PDO::PARAM_STR);

 


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

  


}