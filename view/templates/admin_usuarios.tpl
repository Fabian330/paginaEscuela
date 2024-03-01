<div class="agrupar">
  <div class="contenido">
    <h1 class="main">Administrar usuarios</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear nuevo Usuario</button>

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
              <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtNombre">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputText" class="col-sm-2 col-form-label">Apellido 1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtape1">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inputText" class="col-sm-2 col-form-label">Apellido 2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtape2">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inputText" class="col-sm-2 col-form-label">Usuario</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtusu">
              </div>
            </div>


              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="pwdpass">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Perfil</label>
                <div class="col-sm-10">

                  <select id="cboPerfil" class="form-control">

                    {section name=indice loop=$lista_perfiles}
                      <option value="{$lista_perfiles[indice].id_perfil}">{$lista_perfiles[indice].perfil}</option>
                    {/section}
                  </select>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="txtCorreo" value="">
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="fn_crear_usuario();">Crear</button>
          </div>
        </div>
      </div>
    </div>

<!-- Modal edicion-->
    <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">

        <input type="hidden" id="e_id_usuario" value="">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edicion de Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 row">
              <input class="form-control" type="text" placeholder="Nombre" id="e_txtNombre" name="txtNombre">
            </div>
            <div class="mb-3 row">
              <input class="form-control" type="text" placeholder="Apellido 1" id="e_txtapell1" name="txtapell1">
            </div>
            <div class="mb-3 row">
              <input class="form-control" type="text" placeholder="Apellido 2" id="e_txtapell2" name="txtapell2">
            </div>
            <div class="mb-3 row">
              <input class="form-control" type="text" placeholder="Usuario" id="e_txtUsu" name="txtUsu">
            </div>
            <div class="mb-3 row">
              <input class="form-control" type="password" placeholder="Password" id="e_pwdPass" name="pwdPass">
            </div>
            <div class="mb-3 row">
              Perfil:
              <select class="form-control" id="e_cbo_perfil" name="cbo_perfil">
                {section name=indice loop=$lista_perfiles}
                  <option value="{$lista_perfiles[indice].id_perfil}">{$lista_perfiles[indice].perfil}</option>
                {/section}
              </select >

            </div>
            <div class="mb-3 row">
              <input class="form-control" type="text" placeholder="Correo"  id="e_txtCorreo" name="txtCorreo">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="js_editar_usuario();">Editar</button>
          </div>
        </div>
      </div>
    </div>

    {if $cant_usuarios>0}
    <div class="tarreglo">
    <table class="table table-secondary table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido 1</th>
          <th scope="col">Apellido 2</th>
          <th scope="col">Correo</th>
          <th scope="col">Perfil</th>
          <th scope="col">Acciones</th>
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
