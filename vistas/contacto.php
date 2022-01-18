<!--Contacto pricinpal-->
<main class="seccion formulario">
    <form method="post">
        <fieldset class="contacto">
            <legend>Informacion personal</legend>

            <label id="ejemplo" for="inpt_nombre">Nombre completo:</label>
            <input id="txtNombre" type="text" id="inpt_nombre" placeholder="Escribe tu nombre aqui..." required>
            <label for="inpt_correo">Correo:</label>
            <input type="email" id="inpt_correo" placeholder="ejemplo@correo.cl" required>
            <label for="slc_ciudad">Ciudad:</label>
            <select id="slc_ciudad">
                <option disabled selected>--Seleccione--</option>
                <option value="1">Arica</option>
                <option value="2">Iquique</option>
                <option value="3">Antofagasta</option>
                <option value="4">Santiago</option>
            </select>
            <label for="inpt_celular">Celular:</label>
            <input type="number" id="inpt_celular" placeholder="12345678">
            <label for="area_mensaje">Mensaje:</label>
            <textarea id="area_mensaje"></textarea>
        </fieldset>

        <div class="esquina">
            <input id="btnEnter" class="btn btn-amarillo" type="submit" value="Enter">
        </div>
        <div class="esquina">
            <input id="btnCancelar" class="btn btn-verde" type="submit" value="Cancelar">
        </div>

    </form>


</main>

<section class="contenedor">
    <div id='Contador'>
        <p>Resultado:</p>
    </div>
</section>