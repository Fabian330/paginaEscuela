<div class="agrupar">
  <div class="contenido">
    <h1 class="main">Asociar curso a profesor</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="asocio_cp">
      <table class="tabla">
        <tr>
          <td class="p2">Nombre del curso:</td>
          <td>
            <select class="" name="txt_id_cursop">
            {section name=indice loop=$lista_cursos}
            <option value="{$lista_cursos[indice].id_curso}">{$lista_cursos[indice].nombre_curso}</option>
            {/section}
          </select>
        </td>
        </tr>
        <tr>
          <td class="p2">Nombre del profesor:&nbsp&nbsp&nbsp</td>
          <td>
            <select class="" name="txt_id_profe">
            {section name=indice loop=$lista_profes}
            <option value="{$lista_profes[indice].id_usuario}">{$lista_profes[indice].nombre} {$lista_profes[indice].apell1} {$lista_profes[indice].apell2}</option>
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
