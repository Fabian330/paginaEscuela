<div class="agrupar">
  <div class="contenido">
    <h1 class="main">Asistencias</h1>
    {if $cant_usuarios>0}
    <div class="tarreglo">
    <table class="table table-secondary table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido 1</th>
          <th scope="col">Apellido 2</th>
          <th scope="col">Curso</th>
          <th scope="col">Asistencia</th>
          <th scope="col">Fecha</th>
        </tr>
      </thead>
      <tbody>
        {foreach name=outer item=contact from=$lista_usuarios}
          <tr>
          {foreach key=key item=item from=$contact}
              <td>{$item}</td>
          {/foreach}
        </tr>
        {/foreach}
      </tbody>
    </table>
    {/if}
    </div>
  </div>

  <div class="logo">
    <img src="images/LogoNombre.png" alt="">
  </div>

  <img id="banderaV" src="images/banderaV.png" alt="">
</div>
