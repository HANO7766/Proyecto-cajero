
<?php

require_once "conexion.php";


class ModeloMantenciones {


    /*=============================================
	REGISTRAR MANTENCIÓN
	=============================================*/


	static public function mdlRegistrarMantencion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( tecnicoRut, mantencionFecha, cajeroID, mantencionCantidad) VALUES (:tecnicoRut, :mantencionFecha, :cajeroID , :mantencionCantidad)");
        
        $stmt->bindParam(":tecnicoRut", $datos["tecnicoRut"], PDO::PARAM_STR);
        $stmt->bindParam(":mantencionFecha", $datos["mantencionFecha"], PDO::PARAM_STR);
        $stmt->bindParam(":cajeroID", $datos["cajeroID"], PDO::PARAM_STR);
        $stmt->bindParam(":mantencionCantidad", $datos["mantencionCantidad"], PDO::PARAM_INT);
    
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	
    /*=============================================
	MOSTRAR MANTENCIONES
	=============================================*/

	static public function mdlMostrarMantenciones($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
	

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM mantenciones m JOIN tecnico t WHERE m.tecnicoRut = t.tecnicoRut;");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

		
	}


   /*=============================================
	MOSTRAR MANTENCION INDIVIDUAL
	=============================================*/

	static public function mdlMostrarMantencionIndividual($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
	

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM mantenciones m JOIN tecnico t WHERE m.tecnicoRut = t.tecnicoRut;");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

		
	}


	 /*=============================================
	ELIMINAR MANTENCIÓN
	=============================================*/

	static public function mdlEliminarMantencion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE mantencionID = :mantencionID");

		$stmt -> bindParam(":mantencionID", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}




}