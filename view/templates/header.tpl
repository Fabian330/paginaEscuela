<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo7.css">
    <link rel="icon" href="images/LogoNombre.png">
    <title>Escuela Jose Mar&iacutea</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/utils.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>

    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="agrupar">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand">Escuela Jose Mar&iacutea</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?accion=inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=caracteristicas">Caracteristicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=contacto">Contactenos</a>
            </li>
            {if isset($perfil)}
            {if $perfil == 1}
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=listar_usuarios">Administrar usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=asocio_padre_hijo">Asociar padre e hijos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_cursos">Crear curso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=asocio_curso_profe">Asociar curso a profesor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=asocio_alumno_curso">Asociar alumno al curso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=salir">Salir</a>
            </li>
            <li class="">
              <span style="background-color:lightgray;" class="nav-link">Sesi&oacuten iniciada: {$usuario}</span>
            </li>
            {/if}
            {if $perfil == 2}
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_estudiantes">Ver estudiantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_cursos">Ver cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=asignar_asistencia">Asignar asistencias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=asignar_nota">Asignar notas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=salir">Salir</a>
            </li>
            <li class="">
              <span style="background-color:lightgray;" class="nav-link">Sesi&oacuten iniciada: {$usuario}</span>
            </li>
            {/if}
            {if $perfil == 3}
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_hijos">Ver hijos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_asistencias">Ver asistencias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_notas">Ver notas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=salir">Salir</a>
            </li>
            <li class="">
              <span style="background-color:lightgray;" class="nav-link">Sesi&oacuten iniciada: {$usuario}</span>
            </li>
            {/if}
            {if $perfil == 4}
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_asistencias">Ver asistencias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=ver_notas">Ver notas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?accion=salir">Salir</a>
            </li>
            <li class="">
              <span style="background-color:lightgray;" class="nav-link">Sesi&oacuten iniciada: {$usuario}</span>
            </li>
            {/if}
            {/if}
          </ul>
        </div>
      </div>
    </nav>
</div>
