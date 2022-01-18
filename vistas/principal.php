<?php

include_once('header.php');


$modulo = (isset($_GET['mod'])) ? $_GET['mod'] : "";

switch ($modulo) {
    case 'inicio':
        require_once('main.php');
        break;
    case 'contacto':
        require_once('contacto.php');
        break;
    case 'vinilo':
        require_once('vinilo.php');
        break;
    default:
        require_once('main.php');
        break;
}

include_once('footer.php');
