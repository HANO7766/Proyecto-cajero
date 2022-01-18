<!--Main-->
<main class="contenedor seccion">
    <h2 class="centrar-texto">Vinilos</h2>

    <div class="contenedor-vinilos">

        <?php

        include_once('clases/Vinilo.php');

        $v = new Vinilo();

        $vinilos = $v->listarVinilo();

        var_dump($vinilos);

        foreach ($vinilos as $v) {

        ?>
            <div class="vinilos">
                <img class="img-vinilo" src="img/vinilos/<?=$v['img']?>" alt="Imagen vinilo">

                <div class="vinilo-descripcion">
                    <h3 class="centrar-texto fw-400"><?=$v['autorAlbum']?> - <?=$v['nombreAlbum']?></h3>

                    <p class="precio">$<?=$v['precio']?></p>

                    <a class="btn btn-amarillo" href="?mod=vinilo&id=<?=$v['codigo']?>">Ver mas</a>
                </div>
            </div>
        <?php
        }

        ?>




    </div>
</main>

<!--Nostros-->
<section class="fondo-nosotros">


    <div class="contenedor seccion">
        <h2 class="centrar-texto">Sobre nosotros</h2>
        <div class="contenido-nosotros">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt fugiat, eveniet qui, adipisci maxime officiis voluptas debitis illo praesentium consequuntur, vero quasi dolorum? Sit perferendis, obcaecati odit ut similique quas?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut et doloremque voluptate veritatis hic laboriosam rem perspiciatis culpa quidem non possimus in consequatur impedit nulla excepturi aspernatur ipsa, cum reprehenderit?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat maxime quod, eius, nostrum voluptatem corporis pariatur illo labore accusamus assumenda maiores consequuntur voluptas excepturi tempore voluptates sunt eligendi vitae quae!</p>

            <a class="btn btn-amarillo" href="#">Ver mas</a>
        </div>
    </div>


</section>

<!--Inicio Servicios-->

<section class="servicio-fondo">
    <div class="absoluta"></div>
    <div class="contenedor seccion servicios">

        <div class="titulo-servicios">
            <h2>Nuestros servicios</h2>
        </div>

        <div class="contenido-servicios">

            <div class="contenido">
                <div class="dibujo">
                    <img src="img/Envios.png" alt="Imagen envio">
                </div>
                <div class="contenido-texto">
                    <h3>Envios</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, voluptate cum ullam, qui recusandae magnam fugit deserunt voluptates rem accusantium quis dignissimos architecto natus voluptatum provident eaque debitis sint placeat.</p>
                </div>
            </div>

            <div class="contenido">
                <div class="dibujo">
                    <img src="img/Economia.svg" alt="Imagen economia">
                </div>
                <div class="contenido-texto">
                    <h3>Economia</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit quia libero, nam praesentium repellat deserunt aperiam error ullam veritatis aspernatur sapiente ut perspiciatis porro labore perferendis veniam ducimus. Reprehenderit,
                        quaerat?
                    </p>
                </div>
            </div>

            <div class="contenido">
                <div class="dibujo">
                    <img src="img/Pedidos.svg" alt="Imagen pedidos">
                </div>
                <div class="contenido-texto">
                    <h3>Pedidos</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex impedit excepturi voluptas provident labore saepe eaque fugit, quas nihil ipsa assumenda aperiam consequuntur illum repudiandae. Et, nobis eligendi! Fugiat, deleniti!</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!--Imagen relleno-->
<section class="img-relleno">

</section>

<!--Nuestro equipo-->
<section class="contenedor seccion">
    <h2 class="centrar-texto">Nuestro equipo</h2>
    <div class="equipo">

        <div class="tarjeta-equipo">
            <img src="img/avatar.png" alt="img equipo">
            <div class="contenido-equipo">
                <div class="absoluto-equipo">
                    <img src="img/insignia.png" alt="">
                </div>
                <h3>Persona I</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, accusantium excepturi! Dicta quos assumenda id consequuntur, possimus omnis ex magnam facere quam libero enim atque harum, quibusdam soluta deleniti culpa.
                </p>
            </div>
        </div>

        <div class="tarjeta-equipo">
            <img src="img/avatar2.png" alt="img equipo">
            <div class="contenido-equipo">
                <h3>Persona II</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias. Sapiente error omnis porro praesentium, quisquam, ea voluptas consequatur odit repellendus pariatur, labore facere magni nobis maiores aut aperiam hic?
                </p>
            </div>
        </div>

        <div class="tarjeta-equipo">
            <img src="img/avatar3.png" alt="img equipo">
            <div class="contenido-equipo">
                <h3>Persona III</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci repellendus enim porro facilis quia animi in minus laboriosam vel cum accusantium doloremque dolores recusandae, illum pariatur? Tenetur quia laudantium illum.</p>
            </div>
        </div>

    </div>

</section>