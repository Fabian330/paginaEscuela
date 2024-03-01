<div class="agrupar">
  <div class="contenido">
    <h1 class="main">Asignar notas</h1>
    <img src="images/exam.png" id="nota" alt="">
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="nota">
      <table class="tabla">
        <tr>
          <td class="p2">Nombre del alumno:&nbsp&nbsp&nbsp</td>
          <td>
            <select class="" name="txt_id_alumno">
            {section name=indice loop=$lista_hijos}
            <option value="{$lista_hijos[indice].id_usuario}">{$lista_hijos[indice].nombre} {$lista_hijos[indice].apell1} {$lista_hijos[indice].apell2}</option>
            {/section}
          </select>
        </td>
        </tr>
        <tr>
          <td class="p2">Nombre del curso:</td>
          <td>
            <select class="" name="txt_id_curso">
            {section name=indice loop=$lista_cursos}
            <option value="{$lista_cursos[indice].id_curso}">{$lista_cursos[indice].nombre_curso}</option>
            {/section}
          </select>
        </td>
        </tr>
        <tr>
          <td class="p2">Nota:</td>
          <td><input id="nota" type="text" name="txt_nota" required></td>
        </tr>
        <tr>
          <td><input id="btn_Asociar" type="submit" value="Asignar"></td>
        </tr>
      </table>
    </form>
  </div>

  <div class="logo">
    <img src="images/LogoNombre.png" alt="">
  </div>

  <img id="banderaV" src="images/banderaV.png" alt="">
</div>
