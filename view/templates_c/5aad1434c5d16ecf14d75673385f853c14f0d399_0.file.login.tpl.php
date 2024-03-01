<?php
/* Smarty version 4.3.0, created on 2023-03-25 00:31:42
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641e32de20ec21_26012570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aad1434c5d16ecf14d75673385f853c14f0d399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\login.tpl',
      1 => 1679700700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641e32de20ec21_26012570 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">

    <div class="contenido">
      <h1>Pagina principal</h1>
    </div>

    <div class="logo">
      <img src="images/LogoNombre.png" alt="">
    </div>
    <?php if (!(isset($_smarty_tpl->tpl_vars['perfil']->value))) {?>
    <div class="login">
      <h1>Inicio de sesi&oacuten</h1>
      <form action="index.php" method="post">
      <input type="hidden" name="accion" value="validar_login">
      <p class="p1">Usuario: <input type="text" name="txtUsuario" id="txtUsuario"></p>
      <p class="p1">Clave: <input type="password" name="txtPassword" id="txtPassword"></p>
      <button type="submit" name="btn_Ingresar" id="btn_Ingresar">Ingresar</button>
      </form>
      <img src="images/amongus.gif" alt="">
    </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['perfil']->value))) {?>
    <div class="login">
      <h1>Login</h1>
    </div>
    <?php }?>
</div>
<?php }
}
