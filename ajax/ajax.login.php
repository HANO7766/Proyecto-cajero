<?php

require_once "../control/controlador.cliente.php";
require_once "../modelo/modelo.cliente.php";
require_once "../control/controlador.tecnico.php";
require_once "../modelo/modelo.tecnico.php";

class Login {

/*=============================================
INGRESAR AL SISTEMA
=============================================*/	

public $Rut;
public $Con;
public $usuario;

public function ajaxIngresarSistema(){


    $item = "clienteRut";
    $valorRut = $this->Rut;
    $valorPassword = $this->Con;
    $valorUsuario = $this->usuario;
    

 if($valorUsuario == 2 ){
    

    $cliente = ControladorCliente::ctrMostrarClientes($item, $valorRut);

    $RutRespuesta = $cliente['clienteRut'];
    $PasswordRespuesta = $cliente['clientePassword'];


    if($cliente['clienteRut'] == $valorRut && $cliente['clientePassword'] == $valorPassword){

        session_start();
        $_SESSION["iniciarSesion"] = "ok";
        $_SESSION["user"] = "cliente";
        $_SESSION["clienteRut"] = $cliente["clienteRut"];


       echo  $respuesta = 'ok';

        } else {
        echo  $respuesta = "error";
        }
    

    } else {

    $item2 = "tecnicoRut";

    $tecnico = ControladorTecnico::ctrMostrarTecnico($item2, $valorRut);

    // $RutRespuesta = $tecnico['tecnicoRut'];
    // $PasswordRespuesta = $tecnico['tecnicoPassword'];


    if($tecnico['tecnicoRut'] == $valorRut && $tecnico['tecnicoPassword'] == $valorPassword){
        
        session_start();

        $_SESSION["iniciarSesion"] = "ok";
        $_SESSION["user"] = "tecnico";
        $_SESSION["tecnicoRut"] = $tecnico["tecnicoRut"];
        $_SESSION["tecnicoTipo"] = $tecnico["tecnicoTipo"];


       echo  $respuesta = 'ok';

        } else {
        echo  $respuesta = "error";
        }
    

    }




}

}

/*=============================================
LOGIN
=============================================*/
if(isset($_POST["Rut"])){

$ingresar = new Login();
$ingresar -> Rut = $_POST["Rut"];
$ingresar -> Con = $_POST["Con"];
$ingresar -> usuario = $_POST["usuario"];
$ingresar -> ajaxIngresarSistema();

}
