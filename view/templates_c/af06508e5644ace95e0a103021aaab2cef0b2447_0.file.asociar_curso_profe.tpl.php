<?php
/* Smarty version 4.3.0, created on 2023-04-20 23:04:36
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\asociar_curso_profe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6441a8e45ffde7_18135833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af06508e5644ace95e0a103021aaab2cef0b2447' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\asociar_curso_profe.tpl',
      1 => 1682024673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441a8e45ffde7_18135833 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
  <div class="contenido">
    <h1 class="main">Asociar curso a profesor</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="asocio_cp">
      <table class="tabla">
        <tr>
          <td class="p2">Nombre del curso:</td>
          <td>
            <select class="" name="txt_id_cursop">
            <?php
$__section_indice_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_cursos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_0_total = $__section_indice_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_0_total !== 0) {
for ($__section_indice_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_0_iteration <= $__section_indice_0_total; $__section_indice_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['lista_cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['id_curso'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista_cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['nombre_curso'];?>
</option>
            <?php
}
}
?>
          </select>
        </td>
        </tr>
        <tr>
          <td class="p2">Nombre del profesor:&nbsp&nbsp&nbsp</td>
          <td>
            <select class="" name="txt_id_profe">
            <?php
$__section_indice_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_profes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_1_total = $__section_indice_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_1_total !== 0) {
for ($__section_indice_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_1_iteration <= $__section_indice_1_total; $__section_indice_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['lista_profes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['id_usuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista_profes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['lista_profes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['apell1'];?>
 <?php echo $_smarty_tpl->tpl_vars['lista_profes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)]['apell2'];?>
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
