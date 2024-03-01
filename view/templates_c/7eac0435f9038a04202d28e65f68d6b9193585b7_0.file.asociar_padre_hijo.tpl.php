<?php
/* Smarty version 4.3.0, created on 2024-03-01 23:53:34
  from 'C:\xampp\htdocs\paginaEscuela\view\templates\asociar_padre_hijo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65e25c6e8222c3_78351138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eac0435f9038a04202d28e65f68d6b9193585b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paginaEscuela\\view\\templates\\asociar_padre_hijo.tpl',
      1 => 1682124410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e25c6e8222c3_78351138 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
  <div class="contenido">
    <h1 class="main">Asociar padre e hijo</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="asocio_ph">
      <table class="tabla">
        <tr>
          <td class="p2">Nombre del padre:&nbsp&nbsp&nbsp</td>
          <td>
            <select class="" name="txt_id_padre">
            <?php
$__section_indice_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_padres']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_0_total = $__section_indice_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_0_total !== 0) {
for ($__section_indice_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_0_iteration <= $__section_indice_0_total; $__section_indice_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['lista_padres']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['id_usuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista_padres']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['lista_padres']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['apell1'];?>
 <?php echo $_smarty_tpl->tpl_vars['lista_padres']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['apell2'];?>
</option>
            <?php
}
}
?>
          </select>
        </td>
        </tr>
        <tr>
          <td class="p2">Nombre del hijo:</td>
          <td>
            <select class="" name="txt_id_hijo">
            <?php
$__section_indice_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_hijos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_1_total = $__section_indice_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_1_total !== 0) {
for ($__section_indice_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_1_iteration <= $__section_indice_1_total; $__section_indice_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['lista_hijos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['id_usuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista_hijos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['lista_hijos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['apell1'];?>
 <?php echo $_smarty_tpl->tpl_vars['lista_hijos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['apell2'];?>
</option>
            <?php
}
}
?>
          </select>
        </td>
        </tr>
        <tr>
          <td><input id="btn_Asociar" type="submit" value="Asociar"></td>
        </tr>
      </table>
    </form>
  </div>

  <div class="logo">
    <img src="images/LogoNombre.png" alt="">
  </div>

  <img id="banderaV" src="images/banderaV.png" alt="">
</div>
<?php }
}
