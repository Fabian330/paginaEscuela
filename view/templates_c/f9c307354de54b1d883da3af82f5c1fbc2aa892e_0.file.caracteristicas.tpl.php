<?php
/* Smarty version 4.3.0, created on 2023-04-20 23:40:41
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\caracteristicas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6441b159a2faa1_52235338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9c307354de54b1d883da3af82f5c1fbc2aa892e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\caracteristicas.tpl',
      1 => 1682026839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441b159a2faa1_52235338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="agrupar">
    <div class="contenido">
      <h1 class="main">Caracteristicas</h1>
      <img src="images/caracteristicas.png" id="caracteristicas" alt="">
      <ul>
        <li class="p3">Docentes comprometidos</li>
        <li class="p3">Ense&ntildea valores</li>
        <li class="p3">Importancia del arte</li>
        <li class="p3">Formaci&oacuten integral</li>
        <li class="p3">Administraci&oacuten de la disciplina</li>
      </ul>
      <br><br><br><br><br><br><br><br><br>
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
