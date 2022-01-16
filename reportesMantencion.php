<h1 class="title">
    Lista de mantencion
</h1>


<div class="columns">
  <div class="column">
  <article class="message is-info">
  <div class="message-header">
    <p>Información Mantención</p>
    <button class="delete" aria-label="delete"></button>
  </div>
  <div class="message-body">
      <ul>
        <li>Nombre Técnico: <b><p id="nombreTecnico"></p></b></li>
        <li>Rut Técnico:  <b><p id="rutTecnico"></p></b></li>
        <li>Monto cargado: <b><p id="montoCargado"></p></b></li>
        <li>ID Cajero: <b><p id="idCajero"></p></b></li>
        <li>Fecha: <b><p id="fechaM"></p></b></li>
      </ul>
  </div>
</article>
  </div>
  <div class="column ">
  <table class="table is-striped is-narrow is-hoverable" id="myTable">
     <thead class="table-light">
               <tr>
                 <th>#</th>
                 <th>Monto Mantención</th>
                 <th>ID Cajero</th>
                 <th>Fecha</th>
                 <th>Acciones</th>
              </tr>
        </thead>
        <tbody id="contenedorMantenciones">

        </tbody>

  </table>
  </div>
</div>





<script rel="text/javascript" src="../recursos/js/reporteMantenciones.js"></script>


