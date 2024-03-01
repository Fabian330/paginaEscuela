<?php
/* Smarty version 4.3.0, created on 2023-04-04 01:00:48
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\agregar_curso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642b5aa0584127_45382167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c144828ac50ea99b00eb7ab7575c781e0f00f4e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\agregar_curso.tpl',
      1 => 1680562789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642b5aa0584127_45382167 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
  <div class="contenido">
    <h1>Registrar usuario</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="ingresar_curso">
      <table>
        <tr>
          <td>Nombre del curso</td>
          <td><input type="text" name="txt_nombrecurso"></td>
        </tr>
        <tr>
          <td><input type="submit" value="Ingresar nuevo curso"></td>
          <td><a href="index.php?accion=listar_usuarios">Regresar</a></td>
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
