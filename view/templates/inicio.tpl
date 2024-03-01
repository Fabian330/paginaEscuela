<div class="agrupar">
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
    {if !isset($perfil)}
    <div class="login">
      <h1>Login</h1>
      <form action="index.php" method="post">
      <input type="hidden" name="accion" value="validar_login">
      <p class="p1">Usuario<input type="text" name="txtUsuario" id="txtUsuario" required></p>
      <p class="p1">Clave&nbsp&nbsp&nbsp&nbsp<input type="password" name="txtPassword" id="txtPassword" required></p>
      <button type="submit" name="btn_Ingresar" id="btn_Ingresar">Ingresar</button>
      {if $ErrorLogin != "" }
      <div class="alert alert-warning">{$ErrorLogin}</div>
      <img id="banderaH2" src="images/banderaH.png" alt="">
      {/if}
      </form>
      {if $ErrorLogin == "" }
      <img id="banderaH1" src="images/banderaH.png" alt="">
      {/if}
    </div>
    {/if}
    {if isset($perfil)}
    <img id="banderaV" src="images/banderaV.png" alt="">
    {/if}
</div>
