<?php
/* Smarty version 4.3.0, created on 2023-04-02 01:18:32
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\registro_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6428bbc8920115_37707149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b7606a19c45de16e71bd79c3541adaeb0570d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\registro_usuario.tpl',
      1 => 1680217874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6428bbc8920115_37707149 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
  <div class="contenido">
    <h1>Registrar usuario</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="ingresar_usuario">
      <table>
        <tr>
          <td>Nombre</td>
          <td><input type="text" name="txt_nombre"></td>
        </tr>
        <tr>
          <td>Primer apellido</td>
          <td><input type="text" name="txt_apell1"></td>
        </tr>
        <tr>
          <td>Segundo apellido</td>
          <td><input type="text" name="txt_apell2"></td>
        </tr>
        <tr>
          <td>Usuario</td>
          <td><input type="text" name="txt_usuario"></td>
        </tr>
        <tr>
          <td>Contraseña</td>
          <td><input type="password" name="txt_password"></td>
        </tr>
        <tr>
          <td>Correo</td>
          <td><input type="text" name="txt_correo"></td>
        </tr>
        <tr>
          <td>Perfil</td>
          <td><input type="text" name="txt_perfil"></td>
        </tr>
        <tr>
          <td><input type="submit" value="Ingresar nuevo usuario"></td>
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
