<?php
/* Smarty version 4.3.0, created on 2023-04-25 02:24:50
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\admin_usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64471dd22f3427_65548211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a09e343b1df0863f6764a43ec9f20ff7ef45be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\admin_usuarios.tpl',
      1 => 1682382272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64471dd22f3427_65548211 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
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

                    <?php
$__section_indice_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_perfiles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_0_total = $__section_indice_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_0_total !== 0) {
for ($__section_indice_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_0_iteration <= $__section_indice_0_total; $__section_indice_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['lista_perfiles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['id_perfil'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista_perfiles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['perfil'];?>
</option>
                    <?php
}
}
?>
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
                <?php
$__section_indice_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_perfiles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_1_total = $__section_indice_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_1_total !== 0) {
for ($__section_indice_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_1_iteration <= $__section_indice_1_total; $__section_indice_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['lista_perfiles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['id_perfil'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista_perfiles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['perfil'];?>
</option>
                <?php
}
}
?>
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

    <?php if ($_smarty_tpl->tpl_vars['cant_usuarios']->value > 0) {?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_usuarios']->value, 'contact', false, NULL, 'outer', array (
));
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
          <tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <?php }?>
    </div>
  </div>

  <div class="logo">
    <img src="images/LogoNombre.png" alt="">
  </div>

  <img id="banderaV" src="images/banderaV.png" alt="">
</div>
<?php }
}
