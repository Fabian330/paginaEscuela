<?php
/* Smarty version 4.3.0, created on 2023-03-30 01:51:54
  from 'C:\xampp\htdocs\progra3\proyecto_final\view\templates\agregar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6424cf1a7dd580_21618751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259fb86249a32e68ad26fdda2de1065294b5f798' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto_final\\view\\templates\\agregar.tpl',
      1 => 1680133726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6424cf1a7dd580_21618751 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar usuario</title>
  </head>
  <body>
    <?php echo '<?php'; ?>

    if(isset($_POST['enviar'])){
      $nombre = $_POST['nombre'];
      $apell1 = $_POST['apell1'];
      $apell2 = $_POST['apell2'];
      $usuario = $_POST['usuario'];
      $password = $_POST['password'];
      $correo = $_POST['correo'];
      $perfil = $_POST['perfil'];

      include("conn.php");
      $sqlINSERT INTO usuarios_proyecto(id_usuario, nombre, apell1, apell2, usuario, password, correo, perfil) VALUES ('[value-1]','$nombre','$apell1','$apell2','$usuario','$password','$correo','$perfil');
      $resultado = mysqli_query($conexion, $sql);
      mysqli_close($conexion);
    }else{
    <?php echo '?>'; ?>


<h1>Agregar nuevo usuario</h1>
<form action="<?php echo '<?'; ?>
=$_SERVER['PHP_SELF']<?php echo '?>'; ?>
" method="post">
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
  <a href="index.php?accion=inicio">Regresar</a>
</form>
<?php echo '<?php'; ?>

}
<?php echo '?>'; ?>

  </body>
</html>
<?php }
}
