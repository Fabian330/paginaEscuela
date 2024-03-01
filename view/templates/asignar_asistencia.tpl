<div class="agrupar">
  <div class="contenido">
    <h1 class="main">Asignar asistencias</h1>
    <img src="images/asiste.png" id="asist" alt="">
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="asistencia">
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
          <td class="p2">Asistencia:</td>
          <td>
            <select class="" name="txt_asistio">
            <option value="Presente">Presente</option>
            <option value="Ausente">Ausente</option>
          </select>
        </td>
        </tr>
        <tr>
          <td class="p2">Fecha:</td>
          <td><input type="date" name="dt_fecha" required></td>
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
