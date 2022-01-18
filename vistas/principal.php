<?php

session_start();

?>

<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <title>Evaluacion 3 - Desarrollo web 2021</title>
</head>

<body>


    <header class="header container">

        <div id="navbarBasicExample" class="navbar-menu">

            <div class="navbar-start">
                <a class="navbar-item" href="">
                    Inicio
                </a>
                <?php if($_SESSION['user'] == "cliente"){ ?>
                <a class="navbar-item" href="principal.php?mod=reg">
                    Realizar giro
                </a>
                <?php } ?>
                <?php if($_SESSION['user'] == "tecnico" && $_SESSION['tecnicoTipo'] == 1){ ?>
                <a class="navbar-item" href="principal.php?mod=man">
                    Mantencion
                </a>
                <?php } ?>
                <?php if($_SESSION['user'] == "tecnico" && $_SESSION['tecnicoTipo'] == 0){ ?>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Reportes
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="principal.php?mod=repG">
                            Reporte giros
                        </a>
                        <a class="navbar-item" href="principal.php?mod=repM">
                            Reporte Mantenciones
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="logout.php">
                            <strong>SALIR</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section container">
        <?php
                  
        //    echo $_SESSION['iniciarSesion'];
        //    echo $_SESSION['user'];
        //    echo $_SESSION['tecnicoRut'];
        //    echo $_SESSION['clienteRut'];
        //    echo $_SESSION['tecnicoTipo'];
           


        $modulo = (isset($_GET['mod'])) ? $_GET['mod'] : "";

        switch ($modulo) {
            case 'reg':
                require_once('registrar.php');
                break;
            case 'man':
                require_once('mantencion.php');
                break;
            case 'reg':
                require_once('mantencion.php');
                break;
            case 'repG':
                require_once('reportesGiros.php');
                break;
            case 'repM':
                require_once('reportesMantencion.php');
                break;
        }
        ?>
    </section>

    <footer class="footer container">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>
</body>

</html>