<?php
/* Smarty version 4.3.0, created on 2023-04-20 23:31:44
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6441af40053436_71651809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3d8fa9e242dd7c04c156184c138ad278c2a177b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\contacto.tpl',
      1 => 1682026284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441af40053436_71651809 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
    <div class="contenido">
      <h1 class="main">Contactenos</h1>
      <img src="images/contacto.png" id="contacto" alt="">
      <p class="p2">Numero de telefono: (506) 26605465</p><br>
      <p class="p2">Whatsapp: (506) 87359385</p><br>
      <p class="p2">Facebook: Escuela Jose Mar&iacutea</p><br>
      <p class="p2">Correo electronico: esc.josemaria@mep.ac.cr</p>
      <br><br><br><br><br><br><br>
    </div>

    <div class="logo">
      <img src="images/LogoNombre.png" alt="">
    </div>

    <?php if (!(isset($_smarty_tpl->tpl_vars['perfil']->value))) {?>
    <div class="login">
      <h1>Login</h1>
      <form action="index.php" method="post">
      <input type="hidden" name="accion" value="validar_login">
      <p class="p1">Usuario<input type="text" name="txtUsuario" id="txtUsuario"></p>
      <p class="p1">Clave&nbsp&nbsp&nbsp&nbsp<input type="password" name="txtPassword" id="txtPassword"></p>
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
