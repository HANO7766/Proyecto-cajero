<?php

 if(isset($_SESSION['user'])){
        header("Location: http://localhost/Proyecto/vistas/principal.php");
 }
 else{


         require_once 'vistas/login.php';
 }
?>

<!-- ev3desarrollo -->