<?php
/* Smarty version 4.3.0, created on 2023-03-21 00:14:46
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\frm_inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6418e8e618bdb9_80642367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a1bd3a4b4e5f403ec64de59b5bea1f8be8bccd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\frm_inicio.tpl',
      1 => 1679354083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6418e8e618bdb9_80642367 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="images/LogoNombre.png">
    <title>Escuela Jose Mar&iacutea</title>
  </head>
  <body>
    <div class="agrupar">
    <h1 id="h">Escuela Jose Mar&iacutea</h1>

    <div class="contenido">
      <h1>Contenido</h1>
    </div>

    <div class="logo">
      <img src="images/LogoNombre.png" alt="">
    </div>

    <div class="menu">
      <h1>Menu</h1>
      <nav>
        <ul>
          <li><form class="" action="fmr_ini_admin.tpl" method="post">

          -Inicio-</form></li>
          <li>-Caracteristicas-</li>
          <li>-Contactanos-</li>
        </ul>
      </nav>
    </div>

    <div class="login">
      <h1>Login</h1>
      <p class="p1">Usuario: <input type="text" name="txtUsuario" id="txtUsuario"></p>
      <p class="p1">Clave: <input type="password" name="txtPassword" id="txtPassword"></p>
      <p class="p1">Tipo: <input type="" name="" id="txtTipo"></p><br>
      <button type="submit" name="btn_Ingresar" id="btn_Ingresar">Ingresar</button>
    </div>

  </div>

  </body>
</html>
<?php }
}
