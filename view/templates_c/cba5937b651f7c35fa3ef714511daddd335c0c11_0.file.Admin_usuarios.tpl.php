<?php
/* Smarty version 4.3.0, created on 2023-03-26 23:13:06
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\Admin_usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6420b562647d25_66873884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba5937b651f7c35fa3ef714511daddd335c0c11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\Admin_usuarios.tpl',
      1 => 1679865175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6420b562647d25_66873884 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
  <div class="contenido">
    <h1>Administrar usuarios</h1>
    <?php if ($_smarty_tpl->tpl_vars['cant_usuarios']->value > 0) {?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido 1</th>
          <th scope="col">Apellido 2</th>
          <th scope="col">Correo</th>
          <th scope="col">Perfil</th>
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

  <div class="logo">
    <img src="images/LogoNombre.png" alt="">
  </div>

  <img id="banderaV" src="images/banderaV.png" alt="">
</div>
<?php }
}
