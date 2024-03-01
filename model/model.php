<?php
require_once "db/conn.php";

class model{

  private $ins_conexion;
  public function __construct(){
    $this->ins_conexion = new conn();
  }

  public function m_Validar_Login($obj_u){
    $usuario = $obj_u->get_usuario();
    $password = $obj_u->get_password();

    $sql = "SELECT id_usuario, nombre, apell1, apell2, usuario, password, correo, perfil FROM usuarios_proyecto WHERE usuario='$usuario' or correo='$usuario' and password='$password'";
    $rs = $this->ins_conexion->ejecutar($sql);

    $arrUsu = array();
    while ($row = mysqli_fetch_assoc($rs)) {

      $obj_u->set_id_usuario($row['id_usuario']);
      $obj_u->set_id_padre($row['id_padre']);
      $obj_u->set_nombre($row['nombre']);
      $obj_u->set_apell1($row['apell1']);
      $obj_u->set_apell2($row['apell2']);
      $obj_u->set_correo($row['correo']);
      $obj_u->set_perfil($row['perfil']);
    }
  return $obj_u;
  }

  public function m_listar_perfiles(){
    $sql = "SELECT id_perfil,perfil FROM perfiles";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matPerfiles = array();
    while ($row = mysqli_fetch_assoc($rs)) {
          $Arrayperf = array();
          $Arrayperf['id_perfil'] = $row['id_perfil'];
          $Arrayperf['perfil'] = $row['perfil'];
          $matPerfiles[] = $Arrayperf;
    }
      return $matPerfiles;
  }

  public function m_padres(){
    $sql = "SELECT id_usuario, nombre, apell1, apell2, perfil FROM usuarios_proyecto where perfil = 3";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
          $arrUsu = array();
          $arrUsu['id_usuario'] = $row['id_usuario'];
          $arrUsu['nombre'] = $row['nombre'];
          $arrUsu['apell1'] = $row['apell1'];
          $arrUsu['apell2'] = $row['apell2'];
          $matUsuarios[] = $arrUsu;
    }
      return $matUsuarios;
  }

  public function m_hijos(){
    $sql = "SELECT id_usuario, nombre, apell1, apell2, perfil FROM usuarios_proyecto where perfil = 4";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
          $arrUsu = array();
          $arrUsu['id_usuario'] = $row['id_usuario'];
          $arrUsu['nombre'] = $row['nombre'];
          $arrUsu['apell1'] = $row['apell1'];
          $arrUsu['apell2'] = $row['apell2'];
          $matUsuarios[] = $arrUsu;
    }
      return $matUsuarios;
  }

  public function m_profes(){
    $sql = "SELECT id_usuario, nombre, apell1, apell2, perfil FROM usuarios_proyecto where perfil = 2";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
          $arrUsu = array();
          $arrUsu['id_usuario'] = $row['id_usuario'];
          $arrUsu['nombre'] = $row['nombre'];
          $arrUsu['apell1'] = $row['apell1'];
          $arrUsu['apell2'] = $row['apell2'];
          $matUsuarios[] = $arrUsu;
    }
      return $matUsuarios;
  }

  public function m_cursos(){
    $sql = "SELECT id_curso, nombre_curso FROM cursos";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
          $arrUsu = array();
          $arrUsu['id_curso'] = $row['id_curso'];
          $arrUsu['nombre_curso'] = $row['nombre_curso'];
          $matUsuarios[] = $arrUsu;
    }
      return $matUsuarios;
  }

  public function m_listar_usuarios(){
    $sql = "SELECT id_usuario, nombre, apell1, apell2, usuario, password, correo, perfil FROM usuarios_proyecto";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
      $arrUsu = array();
      $arrUsu['id_usuario'] = $row['id_usuario'];
      $arrUsu['nombre'] = $row['nombre'];
      $arrUsu['apell1'] = $row['apell1'];
      $arrUsu['apell2'] = $row['apell2'];
      $arrUsu['correo'] = $row['correo'];
      $arrUsu['perfil'] = $row['perfil'];
      $arrUsu['acciones'] = '<img id="editar" src="images/editar.png"data-bs-toggle="modal" data-bs-target="#staticBackdropEdit" onclick="obtener_datos_usuario('.$row['id_usuario'].');"> <img id="eliminar" src="images/eliminar.png" onclick="fn_borrar_usuario('.$row['id_usuario'].');">';

      $matUsuarios[] = $arrUsu;
    }
    return $matUsuarios;
  }

  public function m_listar_cursos($obj_u){
    $perfil = $obj_u->get_perfil();

    $sql = "SELECT id_curso, nombre_curso FROM cursos";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
      $arrUsu = array();
      $arrUsu['id_curso'] = $row['id_curso'];
      $arrUsu['nombre_curso'] = $row['nombre_curso'];
      if ($perfil == 1) {
      $arrUsu['acciones'] = '<img id="editar" src="images/editar.png"data-bs-toggle="modal" data-bs-target="#staticBackdropEdit" onclick="obtener_datos_curso('.$row['id_curso'].');"> <img id="eliminar" src="images/eliminar.png" onclick="fn_borrar_curso('.$row['id_curso'].');">';
    }
      $matUsuarios[] = $arrUsu;
    }
    return $matUsuarios;
  }

  public function m_listar_estudiantes(){
    $sql = "SELECT id_usuario, nombre, apell1, apell2, usuario, password, correo, perfil FROM usuarios_proyecto WHERE perfil = 4";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
      $arrUsu = array();
      $arrUsu['id_usuario'] = $row['id_usuario'];
      $arrUsu['nombre'] = $row['nombre'];
      $arrUsu['apell1'] = $row['apell1'];
      $arrUsu['apell2'] = $row['apell2'];
      $arrUsu['correo'] = $row['correo'];
      $arrUsu['perfil'] = $row['perfil'];

      $matUsuarios[] = $arrUsu;
    }
    return $matUsuarios;
  }

  public function m_listar_hijos($obj_u){
    $id_padre = $obj_u->get_id_padre();

    $sql = "SELECT id_usuario, nombre, apell1, apell2, usuario, password, correo, perfil FROM usuarios_proyecto inner join asocioph on id_hijo = id_usuario where '$id_padre' = id_padre";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
      $arrUsu = array();
      $arrUsu['id_usuario'] = $row['id_usuario'];
      $arrUsu['nombre'] = $row['nombre'];
      $arrUsu['apell1'] = $row['apell1'];
      $arrUsu['apell2'] = $row['apell2'];
      $arrUsu['correo'] = $row['correo'];

      $matUsuarios[] = $arrUsu;
    }
    return $matUsuarios;
  }

  public function m_listar_asistencias($obj_u){
    $id_padre = $obj_u->get_id_padre();
    $perfil = $obj_u->get_perfil();
    $id_hijo = $obj_u->get_id_hijo();

    if ($perfil == 3) {
    $sql = "SELECT id_asist, nombre, apell1, apell2, nombre_curso, asiste, fecha FROM asistencia inner join usuarios_proyecto on id_usuario = id_estudiante inner join cursos on id_curso = id_curso2 inner join asocioph on id_hijo = id_usuario where $id_padre = id_padre";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
      $arrUsu = array();
      $arrUsu['nombre'] = $row['nombre'];
      $arrUsu['apell1'] = $row['apell1'];
      $arrUsu['apell2'] = $row['apell2'];
      $arrUsu['nombre_curso'] = $row['nombre_curso'];
      $arrUsu['asiste'] = $row['asiste'];
      $arrUsu['fecha'] = $row['fecha'];

      $matUsuarios[] = $arrUsu;
    }
    return $matUsuarios;
  }elseif($perfil == 4) {
  $sql = "SELECT id_asist, nombre, apell1, apell2, nombre_curso, asiste, fecha FROM asistencia inner join usuarios_proyecto on id_usuario = id_estudiante inner join cursos on id_curso = id_curso2 where $id_hijo = id_usuario";
  $rs = $this->ins_conexion->ejecutar($sql);

  $matUsuarios = array();
  while ($row = mysqli_fetch_assoc($rs)) {
    $arrUsu = array();
    $arrUsu['nombre'] = $row['nombre'];
    $arrUsu['apell1'] = $row['apell1'];
    $arrUsu['apell2'] = $row['apell2'];
    $arrUsu['nombre_curso'] = $row['nombre_curso'];
    $arrUsu['asiste'] = $row['asiste'];
    $arrUsu['fecha'] = $row['fecha'];

    $matUsuarios[] = $arrUsu;
  }
  return $matUsuarios;
}
}

  public function m_listar_notas($obj_u){
    $id_padre = $obj_u->get_id_padre();
    $id_hijo = $obj_u->get_id_hijo();
    $perfil = $obj_u->get_perfil();
    if ($perfil == 3) {
    $sql = "SELECT id_nota, nombre, apell1, apell2, nombre_curso, puntaje FROM notas inner join usuarios_proyecto on id_usuario = id_estudiante2 inner join cursos on id_curso = id_curso3 inner join asocioph on id_hijo = id_usuario where $id_padre = id_padre";
    $rs = $this->ins_conexion->ejecutar($sql);

    $matUsuarios = array();
    while ($row = mysqli_fetch_assoc($rs)) {
      $arrUsu = array();
      $arrUsu['nombre'] = $row['nombre'];
      $arrUsu['apell1'] = $row['apell1'];
      $arrUsu['apell2'] = $row['apell2'];
      $arrUsu['nombre_curso'] = $row['nombre_curso'];
      $arrUsu['puntaje'] = $row['puntaje'];

      $matUsuarios[] = $arrUsu;
    }
    return $matUsuarios;
  }elseif($perfil == 4) {
  $sql = "SELECT id_nota, nombre, apell1, apell2, nombre_curso, puntaje FROM notas inner join usuarios_proyecto on id_usuario = id_estudiante2 inner join cursos on id_curso = id_curso3 where $id_hijo = id_usuario";
  $rs = $this->ins_conexion->ejecutar($sql);

  $matUsuarios = array();
  while ($row = mysqli_fetch_assoc($rs)) {
    $arrUsu = array();
    $arrUsu['nombre'] = $row['nombre'];
    $arrUsu['apell1'] = $row['apell1'];
    $arrUsu['apell2'] = $row['apell2'];
    $arrUsu['nombre_curso'] = $row['nombre_curso'];
    $arrUsu['puntaje'] = $row['puntaje'];

    $matUsuarios[] = $arrUsu;
  }
  return $matUsuarios;
}
}

  public function m_asocio_ph($id_padre, $id_hijo){
    $sql = "INSERT INTO asocioph(id_padre, id_hijo) VALUES ('$id_padre','$id_hijo')";
    $rs = $this->ins_conexion->ejecutar($sql);
  }

  public function m_asocio_cp($id_cursop, $id_profe){
    $sql = "INSERT INTO asociocp(id_cursop, id_profesor) VALUES ('$id_cursop','$id_profe')";
    $rs = $this->ins_conexion->ejecutar($sql);
  }

  public function m_asocio_ac($id_alumno, $id_cursoa){
    $sql = "INSERT INTO asocioac(id_alumno, id_cursoa) VALUES ('$id_alumno','$id_cursoa')";
    $rs = $this->ins_conexion->ejecutar($sql);
  }

  public function m_asignar_asistencia($id_alumno, $id_curso, $asistio, $fecha){
    $sql = "INSERT INTO asistencia(id_estudiante, id_curso2, asiste, fecha) VALUES ('$id_alumno','$id_curso','$asistio','$fecha')";
    $rs = $this->ins_conexion->ejecutar($sql);
  }

  public function m_asignar_nota($id_alumno, $id_curso, $nota){
    $sql = "INSERT INTO notas(id_estudiante2, id_curso3, puntaje) VALUES ('$id_alumno','$id_curso','$nota')";
    $rs = $this->ins_conexion->ejecutar($sql);
  }

}
?>
