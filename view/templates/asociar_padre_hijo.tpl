<div class="agrupar">
  <div class="contenido">
    <h1 class="main">Asociar padre e hijo</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="asocio_ph">
      <table class="tabla">
        <tr>
          <td class="p2">Nombre del padre:&nbsp&nbsp&nbsp</td>
          <td>
            <select class="" name="txt_id_padre">
            {section name=indice loop=$lista_padres}
            <option value="{$lista_padres[indice].id_usuario}">{$lista_padres[indice].nombre} {$lista_padres[indice].apell1} {$lista_padres[indice].apell2}</option>
            {/section}
          </select>
        </td>
        </tr>
        <tr>
          <td class="p2">Nombre del hijo:</td>
          <td>
            <select class="" name="txt_id_hijo">
            {section name=indice loop=$lista_hijos}
            <option value="{$lista_hijos[indice].id_usuario}">{$lista_hijos[indice].nombre} {$lista_hijos[indice].apell1} {$lista_hijos[indice].apell2}</option>
            {/section}
          </select>
        </td>
        </tr>
        <tr>
          <td><input id="btn_Asociar" type="submit" value="Asociar"></td>
        </tr>
      </table>
    </form>
  </div>

  <div class="logo">
    <img src="images/LogoNombre.png" alt="">
  </div>

  <img id="banderaV" src="images/banderaV.png" alt="">
</div>
