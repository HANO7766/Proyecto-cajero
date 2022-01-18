

<!-- Formulario -->
<h1 class="title">
    Realizar Giro Bancario
</h1>

<section class="section container">
    <div class="columns is-centered">
        <div class="column is-2">
            <div class="field">
                <div class="control">
                    <div class="select">
                        <select name="" id="cajeroID">

                            <option selected disabled>Seleccione Cajero</option>

                        </select>
                    </div>
                    <p>CAJERO</p>
                </div>
            </div>
        </div>
    </div>
    <div class="columns is-centered" id="contenedorBotones">

        <div class="column is-2">
            <div class="field is-grouped">
                <input  type="radio" class="button is-rounded is-small is-outlined is-hovered btnMonto"  name="monto" value="200000"><i class="fas fa-arrow-right" style="margin-left:-25px; "></i></input>
                <p style="margin-left:20px">$200.000</p>
            </div>
            <div class="field is-grouped">
                <input type="radio" class="button is-rounded is-small is-outlined btnMonto" name="monto" value="150000"><i class="fas fa-arrow-right"  style="margin-left:-25px;"></i></input>
                <p style="margin-left:20px">$150.000</p>
            </div>
            <div class="field is-grouped">
                <input  type="radio" class="button is-rounded is-small is-outlined btnMonto"  name="monto" value="100000"><i class="fas fa-arrow-right" style="margin-left:-25px;"></i></input>
                <p style="margin-left:20px">$100.000</p>
            </div>
        </div>

        <div class="column is-2">
            <div class="field is-grouped">
                <input type="radio" class="button is-rounded is-small is-outlined btnMonto"  name="monto" value="50000"><i class="fas fa-arrow-right" style="margin-left:-25px;"></i></input>
                <p style="margin-left:20px">$50.000</p>
            </div>
            <div class="field is-grouped">
                <input  type="radio" class="button is-rounded is-small is-outlined btnMonto"  name="monto" value="10000"><i class="fas fa-arrow-right" style="margin-left:-25px;"></i></input>
                <p style="margin-left:20px">$10.000</p>
            </div>
            <div class="field">
                <div class="control has-icon has-icons-left">
                    <input class="input" type="number" min="0" id="inptCantidad" />
                    <span class="icon is-left">
                        <i class="fas fa-money-bill-alt"></i>
                    </span>
                </div>
                <p>MONTO A RETIRAR</p>
            </div>

            <div class="field is-horizontal is-grouped">
                <div class="control">
                    <input type="hidden" id="rutCliente" value="<?php echo $_SESSION['clienteRut']; ?>">
                    <button class="button is-primary" id="buttonG">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script rel="text/javascript" src="../recursos/js/registrar.js"></script>

