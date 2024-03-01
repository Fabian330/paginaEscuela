<?php
/* Smarty version 4.3.0, created on 2023-04-20 23:31:41
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6441af3d8ee456_95598678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '398d473c74f3964e7336691915eb5ecce7ad6040' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\inicio.tpl',
      1 => 1682026272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441af3d8ee456_95598678 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
    <div class="contenido">
      <h1 class="main">Pagina principal</h1>
      <img src="images/escuela.png" id="escuela" alt="">
      <p class="p2">Bienvenidos a la Escuela Jose Mar&iacutea</p>
      <p class="p2">La educaci&oacuten es la llave maestra que abre todas las puertas.</p>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <div class="logo">
      <img src="images/LogoNombre.png" alt="">
    </div>
    <?php if (!(isset($_smarty_tpl->tpl_vars['perfil']->value))) {?>
    <div class="login">
      <h1>Login</h1>
      <form action="index.php" method="post">
      <input type="hidden" name="accion" value="validar_login">
      <p class="p1">Usuario<input type="text" name="txtUsuario" id="txtUsuario" required></p>
      <p class="p1">Clave&nbsp&nbsp&nbsp&nbsp<input type="password" name="txtPassword" id="txtPassword" required></p>
      <button type="submit" name="btn_Ingresar" id="btn_Ingresar">Ingresar</button>
      <?php if ($_smarty_tpl->tpl_vars['ErrorLogin']->value != '') {?>
      <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['ErrorLogin']->value;?>
</div>
      <img id="banderaH2" src="images/banderaH.png" alt="">
      <?php }?>
      </form>
      <?php if ($_smarty_tpl->tpl_vars['ErrorLogin']->value == '') {?>
      <img id="banderaH1" src="images/banderaH.png" alt="">
      <?php }?>
    </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['perfil']->value))) {?>
    <img id="banderaV" src="images/banderaV.png" alt="">
    <?php }?>
</div>
<?php }
}
