<div class="agrupar">
  <div class="contenido">
    <h1 class="main">Cursos</h1>
    {if $perfil == 1}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear nuevo curso</button>

    <!-- Modal creacion -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Crear nuevo usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="mb-3 row">
              <label for="inputText" class="col-sm-2 col-form-label">Nombre del curso</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtNombreCurso">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="fn_crear_curso();">Crear</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal edicion-->
    <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">

        <input type="hidden" id="e_id_curso" value="">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edicion de curso</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 row">
              Curso:
              <input class="form-control" type="text" placeholder="Nombre" id="e_txtNombreCurso" name="txtNombreCurso">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="js_editar_curso();">Editar</button>
          </div>
        </div>
      </div>
    </div>
    {/if}

    {if $cant_usuarios>0}
    <div class="tarreglo">
    <table class="table table-secondary table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre del curso</th>
          {if $perfil == 1}
          <th scope="col">Acciones</th>
          {/if}
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
