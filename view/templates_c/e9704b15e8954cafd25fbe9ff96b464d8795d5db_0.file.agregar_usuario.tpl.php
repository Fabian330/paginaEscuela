<?php
/* Smarty version 4.3.0, created on 2023-03-30 02:23:58
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\agregar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6424d69eea32a4_83295269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9704b15e8954cafd25fbe9ff96b464d8795d5db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\agregar_usuario.tpl',
      1 => 1680135830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6424d69eea32a4_83295269 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
    <div class="contenido">
      <h1>Agregar Usuario</h1>
      <form action="index.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br>
        <label>Primer apellido:</label>
        <input type="text" name="apell1"><br>
        <label>Segundo apellido:</label>
        <input type="text" name="apell2"><br>
        <label>Usuario:</label>
        <input type="text" name="usuario"><br>
        <label>Clave:</label>
        <input type="text" name="password"><br>
        <label>Correo:</label>
        <input type="text" name="correo"><br>
        <label>Perfil:</label>
        <input type="text" name="perfil"><br>
        <input type="submit" name="enviar" value="Agregar">
        <a href="index.php?accion=listar_usuarios">Regresar</a>
      </form>
    </div>

    <div class="logo">
      <img src="images/LogoNombre.png" alt="">
    </div>

    <?php if (!(isset($_smarty_tpl->tpl_vars['perfil']->value))) {?>
    <div class="login">
      <h1>Inicio de sesi&oacuten</h1>
      <form action="index.php" method="post">
      <input type="hidden" name="accion" value="validar_login">
      <p class="p1">Usuario<input type="text" name="txtUsuario" id="txtUsuario"></p>
      <p class="p1">Clave<input type="password" name="txtPassword" id="txtPassword"></p>
      <button type="submit" name="btn_Ingresar" id="btn_Ingresar">Ingresar</button>
      </form>
      <img src="images/banderaH.png" alt="">
    </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['perfil']->value))) {?>
    <img id="banderaV" src="images/banderaV.png" alt="">
    <?php }?>
</div>
<?php }
}
