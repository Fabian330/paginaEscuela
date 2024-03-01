<div class="agrupar">
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

    {if !isset($perfil)}
    <div class="login">
      <h1>Login</h1>
      <form action="index.php" method="post">
      <input type="hidden" name="accion" value="validar_login">
      <p class="p1">Usuario<input type="text" name="txtUsuario" id="txtUsuario"></p>
      <p class="p1">Clave&nbsp&nbsp&nbsp&nbsp<input type="password" name="txtPassword" id="txtPassword"></p>
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
