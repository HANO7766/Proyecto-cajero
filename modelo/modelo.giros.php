
<?php

require_once "conexion.php";


class ModeloGiros {


    /*=============================================
	REGISTRAR GIRO
	=============================================*/


	static public function mdlRegistrarGiro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( clienteRut, girosFecha, cajeroID, girosCantidad) VALUES (:clienteRut, :girosFecha, :cajeroID , :girosCantidad)");
        
        $stmt->bindParam(":clienteRut", $datos["clienteRut"], PDO::PARAM_STR);
        $stmt->bindParam(":girosFecha", $datos["girosFecha"], PDO::PARAM_STR);
        $stmt->bindParam(":cajeroID", $datos["cajeroID"], PDO::PARAM_STR);
        $stmt->bindParam(":girosCantidad", $datos["girosCantidad"], PDO::PARAM_INT);
    
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}



    /*=============================================
	MOSTRAR GIROS
	=============================================*/

	static public function mdlMostrarGiros($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
	

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM giros g JOIN cliente c WHERE g.clienteRut = c.clienteRut;");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

		
	}



   /*=============================================
	ELIMINAR GIRO
	=============================================*/

	static public function mdlEliminarGiro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE girosID = :girosID");

		$stmt -> bindParam(":girosID", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}


    


}