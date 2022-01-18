<section class="section container">
    <div class="columns is-centered">
        <div class="column is-4">
            <div class="box">
                <h1 class="title has-text-centered">
                    Mantencion cajeros
                </h1>
                <div class="field">
                    <div class="control">
                        <div class="select">
                            <select name="" id="cajeroID">

                                <option disabled selected>Seleccione cajero</option>

                            </select>
                        </div>
                        <p>CAJERO</p>
                    </div>
                </div>
                <div class="field">
                    <div class="control has-icon has-icons-left">
                        <input class="input" type="number" min="0" id="inptMantencion" />
                        <span class="icon is-left">
                            <i class="fas fa-money-bill-alt"></i>
                        </span>
                    </div>
                    <p>MONTO A CARGAR</p>
                </div>
                <div class="field is-horizontal is-grouped">
                    <div class="control">
                         <input type="hidden" id="tecnicoTipo" name="tecnicoTipo" value="<?php echo $_SESSION['tecnicoTipo']; ?>">
                        <input type="hidden" id="tecnicoRut" name="tecnicoRut" value="<?php echo $_SESSION['tecnicoRut']; ?>">
                        <button class="button is-primary" id="buttonM">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script rel="text/javascript" src="../recursos/js/mantencion.js"></script>