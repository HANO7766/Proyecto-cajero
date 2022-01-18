<?php
require_once('clases/Vinilo.php');
#Intancia de objeto vinilo
$v = new Vinilo();

$id = (isset($_GET["id"])) ? $_GET["id"] : "";

if($id){
    print_r($id);

    $v->__set('codigo',$id);
    
    $datos = $v->verVinilo();
    
    print_r($datos);
}
else{
    print_r('Dato no recibido');
}


?>

<!--Vinilos pricinpal-->
<h1>Vinilos</h1>

<main class="contenedor seccion vinilos-principal">
    <div class="caratula-vinilo">
        <img src="img/vinilos/<?=$datos['img']?>" alt="Imagen vinilo">
    </div>
    <div class="info-vinilos">
        <h2><?=$datos['nombreAlbum']?></h2>
        <h3><?=$datos['autorAlbum']?></h3>
        <p><strong>Autor:</strong><?=$datos['autorAlbum']?></p>
        <p><strong>Publicacion:</strong>15 de junio 1979</p>
        <p><strong>Genero:</strong>Post-punk</p>
        <p><strong>Duracion:</strong>38:21</p>
        <p><strong>Discografica:</strong>Factory Records</p>
        <p><strong>Productor:</strong>Martin Hannet</p>
        <iframe src="https://open.spotify.com/embed/album/<?=$datos['urlSpotify']?>" width="100%" height="80" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>

        <p class="precio"><?=$datos['precio']?></p>
        <a class="btn btn-amarillo" href="#">Comprar</a>
    </div>
</main>