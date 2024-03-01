<?php
session_start();
require_once "libs/smarty_4_3_0/config_smarty.php";
require_once "model/model.php";
require_once "model/model_usuario.php";

class control{
private $obj_smarty;
private $objModel;
private $nombreApp;

public function __construct(){
  $this->nombreApp = "Sistema UH";
  $this->obj_smarty = new config_smarty();
  $this->objModel = new model();
}

public function gestor_solicitudes(){
  $this->validar_inactividad();

  if(isset($_REQUEST['accion'])){
    $accion = $_REQUEST['accion'];

    switch ($accion) {
      case 'validar_login':
      $this->ctl_validar_login();
      break;
      case 'inicio':
      $this->ctl_abrir_principal();
      break;
      case 'caracteristicas':
      $this->ctl_caracteristicas();
      break;
      case 'contacto':
      $this->ctl_contacto();
      break;
      case 'listar_usuarios':
      $this->ctl_listar_usuarios();
      break;
      case 'asocio_padre_hijo':
      $this->ctl_asocio_padre_hijo();
      break;
      case 'asocio_ph':
      $this->ctl_asocio_ph();
      break;
      case 'ver_cursos':
      $this->ctl_listar_cursos();
      break;
      case 'asocio_curso_profe':
      $this->ctl_asocio_curso_profe();
      break;
      case 'asocio_cp':
      $this->ctl_asocio_cp();
      break;
      case 'asocio_alumno_curso':
      $this->ctl_asocio_alumno_curso();
      break;
      case 'asocio_ac':
      $this->ctl_asocio_ac();
      break;
      case 'ver_estudiantes':
      $this->ctl_listar_estudiantes();
      break;
      case 'asignar_asistencia':
      $this->ctl_asignar_asistencia();
      break;
      case 'asistencia':
      $this->ctl_asistencia();
      break;
      case 'asignar_nota':
      $this->ctl_asignar_nota();
      break;
      case 'nota':
      $this->ctl_nota();
      break;
      case 'ver_hijos':
      $this->ctl_listar_hijos();
      break;
      case 'ver_asistencias':
      $this->ctl_listar_asistencias();
      break;
      case 'ver_notas':
      $this->ctl_listar_notas();
      break;
      case 'salir':
      $this->ctl_salir();
      break;
    }
  }else{
    if(isset($_SESSION['USUARIO'])){

      $rs = unserialize($_SESSION['USUARIO']);

      if($rs->get_id_usuario()>0){
        $this->ctl_abrir_principal();
      }else{
        $this->obj_smarty->setAssign("ErrorLogin",'');
        $this->obj_smarty->setDisplay("header.tpl");
        $this->obj_smarty->setDisplay("inicio.tpl");
        $this->obj_smarty->setDisplay("footer.tpl");
      }
    }else{
      $this->obj_smarty->setAssign("ErrorLogin",'');
      $this->obj_smarty->setDisplay("header.tpl");
      $this->obj_smarty->setDisplay("inicio.tpl");
      $this->obj_smarty->setDisplay("footer.tpl");
    }
  }
}

  public function ctl_validar_login(){
    $ErrorLogin = '';
    $obj_u = new model_usuario();
    $obj_u->set_usuario($_REQUEST['txtUsuario']);
    $obj_u->set_password($_REQUEST['txtPassword']);

    $rs = $this->objModel->m_Validar_Login($obj_u);

    if($rs->get_id_usuario()>0){
      $_SESSION['USUARIO'] = serialize($rs);
      header("location:index.php");
    }else{
      $ErrorLogin = "Usuario o Clave incorrecto.";
      $this->obj_smarty->setAssign("ErrorLogin",$ErrorLogin);
      $this->obj_smarty->setDisplay("header.tpl");
      $this->obj_smarty->setDisplay("inicio.tpl");
      $this->obj_smarty->setDisplay("footer.tpl");

    }
  }

  public function ctl_abrir_principal(){
    if(isset($_SESSION['USUARIO'])) {
          $rs = unserialize($_SESSION['USUARIO']);
          if ($rs->get_perfil()>0) {
          $this->obj_smarty->setAssign("perfil",$rs->get_perfil());
          $this->obj_smarty->setAssign("usuario",$rs->get_usuario());

          $this->obj_smarty->setDisplay("header.tpl");
          $this->obj_smarty->setAssign("cant_usuarios",0);
          $this->obj_smarty->setAssign("lista_usuarios",null);
          $this->obj_smarty->setDisplay("inicio.tpl");
          $this->obj_smarty->setDisplay("footer.tpl");
        }
    }else{
      $this->obj_smarty->setAssign("ErrorLogin",'');
      $this->obj_smarty->setDisplay("header.tpl");
      $this->obj_smarty->setDisplay("inicio.tpl");
      $this->obj_smarty->setDisplay("footer.tpl");
    }
  }

  public function ctl_caracteristicas(){
    if(isset($_SESSION['USUARIO'])) {
          $rs = unserialize($_SESSION['USUARIO']);
          if ($rs->get_perfil()>0) {
          $this->obj_smarty->setAssign("perfil",$rs->get_perfil());
          $this->obj_smarty->setAssign("usuario",$rs->get_usuario());

          $this->obj_smarty->setDisplay("header.tpl");
          $this->obj_smarty->setAssign("cant_usuarios",0);
          $this->obj_smarty->setAssign("lista_usuarios",null);
          $this->obj_smarty->setDisplay("caracteristicas.tpl");
          $this->obj_smarty->setDisplay("footer.tpl");
        }
    }else{
      $this->obj_smarty->setAssign("ErrorLogin",'');
      $this->obj_smarty->setDisplay("header.tpl");
      $this->obj_smarty->setDisplay("caracteristicas.tpl");
      $this->obj_smarty->setDisplay("footer.tpl");
    }
  }

  public function ctl_contacto(){
    if(isset($_SESSION['USUARIO'])) {
          $rs = unserialize($_SESSION['USUARIO']);
          if ($rs->get_perfil()>0) {
          $this->obj_smarty->setAssign("perfil",$rs->get_perfil());
          $this->obj_smarty->setAssign("usuario",$rs->get_usuario());

          $this->obj_smarty->setDisplay("header.tpl");
          $this->obj_smarty->setAssign("cant_usuarios",0);
          $this->obj_smarty->setAssign("lista_usuarios",null);
          $this->obj_smarty->setDisplay("contacto.tpl");
          $this->obj_smarty->setDisplay("footer.tpl");
        }
    }else{
      $this->obj_smarty->setAssign("ErrorLogin",'');
      $this->obj_smarty->setDisplay("header.tpl");
      $this->obj_smarty->setDisplay("contacto.tpl");
      $this->obj_smarty->setDisplay("footer.tpl");
    }
  }

  public function ctl_listar_usuarios(){
    $rs = $this->objModel->m_listar_usuarios();

    $us = unserialize($_SESSION['USUARIO']);

    $lsPerfiles = $this->objModel->m_listar_perfiles();
    $this->obj_smarty->setAssign("lista_perfiles",$lsPerfiles);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",$rs);
    $this->obj_smarty->setAssign("cant_usuarios",sizeof($rs));
    $this->obj_smarty->setDisplay("admin_usuarios.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_asocio_padre_hijo(){
    $us = unserialize($_SESSION['USUARIO']);

    $lsPadres = $this->objModel->m_padres();
    $lsHijos = $this->objModel->m_hijos();
    $this->obj_smarty->setAssign("lista_padres",$lsPadres);
    $this->obj_smarty->setAssign("lista_hijos",$lsHijos);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",0);
    $this->obj_smarty->setAssign("cant_usuarios",null);
    $this->obj_smarty->setDisplay("asociar_padre_hijo.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_asocio_ph(){
    $us = unserialize($_SESSION['USUARIO']);

    $id_padre = $_REQUEST["txt_id_padre"];
    $id_hijo = $_REQUEST["txt_id_hijo"];

    $rs = $this->objModel->m_asocio_ph($id_padre, $id_hijo);

    $this->ctl_asocio_padre_hijo();
  }

  public function ctl_listar_cursos(){
    $obj_u = new model_usuario();
    $us = unserialize($_SESSION['USUARIO']);

    $obj_u->set_perfil($us->get_perfil());

    $rs = $this->objModel->m_listar_cursos($obj_u);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",$rs);
    $this->obj_smarty->setAssign("cant_usuarios",sizeof($rs));
    $this->obj_smarty->setDisplay("cursos.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_asocio_curso_profe(){
    $us = unserialize($_SESSION['USUARIO']);

    $lsCursos = $this->objModel->m_cursos();
    $lsProfes = $this->objModel->m_profes();
    $this->obj_smarty->setAssign("lista_cursos",$lsCursos);
    $this->obj_smarty->setAssign("lista_profes",$lsProfes);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",0);
    $this->obj_smarty->setAssign("cant_usuarios",null);
    $this->obj_smarty->setDisplay("asociar_curso_profe.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_asocio_cp(){
    $us = unserialize($_SESSION['USUARIO']);

    $id_cursop = $_REQUEST["txt_id_cursop"];
    $id_profe = $_REQUEST["txt_id_profe"];

    $rs = $this->objModel->m_asocio_cp($id_cursop, $id_profe);

    $this->ctl_asocio_curso_profe();
  }

  public function ctl_asocio_alumno_curso(){
    $us = unserialize($_SESSION['USUARIO']);

    $lsHijos = $this->objModel->m_hijos();
    $lsCursos = $this->objModel->m_cursos();
    $this->obj_smarty->setAssign("lista_hijos",$lsHijos);
    $this->obj_smarty->setAssign("lista_cursos",$lsCursos);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",0);
    $this->obj_smarty->setAssign("cant_usuarios",null);
    $this->obj_smarty->setDisplay("asociar_alumno_curso.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_asocio_ac(){
    $us = unserialize($_SESSION['USUARIO']);

    $id_alumno = $_REQUEST["txt_id_alumno"];
    $id_cursoa = $_REQUEST["txt_id_cursoa"];

    $rs = $this->objModel->m_asocio_ac($id_alumno, $id_cursoa);

    $this->ctl_asocio_alumno_curso();
  }

  public function ctl_listar_estudiantes(){
    $rs = $this->objModel->m_listar_estudiantes();

    $us = unserialize($_SESSION['USUARIO']);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",$rs);
    $this->obj_smarty->setAssign("cant_usuarios",sizeof($rs));
    $this->obj_smarty->setDisplay("ver_estudiantes.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_asignar_asistencia(){
    $us = unserialize($_SESSION['USUARIO']);

    $lsHijos = $this->objModel->m_hijos();
    $lsCursos = $this->objModel->m_cursos();
    $this->obj_smarty->setAssign("lista_hijos",$lsHijos);
    $this->obj_smarty->setAssign("lista_cursos",$lsCursos);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",0);
    $this->obj_smarty->setAssign("cant_usuarios",null);
    $this->obj_smarty->setDisplay("asignar_asistencia.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_asistencia(){
    $us = unserialize($_SESSION['USUARIO']);

    $id_alumno = $_REQUEST["txt_id_alumno"];
    $id_curso = $_REQUEST["txt_id_curso"];
    $asistio = $_REQUEST["txt_asistio"];
    $fecha = $_REQUEST["dt_fecha"];

    $rs = $this->objModel->m_asignar_asistencia($id_alumno, $id_curso, $asistio, $fecha);

    $this->ctl_asignar_asistencia();
  }

  public function ctl_asignar_nota(){
    $us = unserialize($_SESSION['USUARIO']);

    $lsHijos = $this->objModel->m_hijos();
    $lsCursos = $this->objModel->m_cursos();
    $this->obj_smarty->setAssign("lista_hijos",$lsHijos);
    $this->obj_smarty->setAssign("lista_cursos",$lsCursos);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",0);
    $this->obj_smarty->setAssign("cant_usuarios",null);
    $this->obj_smarty->setDisplay("asignar_nota.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_nota(){
    $us = unserialize($_SESSION['USUARIO']);

    $id_alumno = $_REQUEST["txt_id_alumno"];
    $id_curso = $_REQUEST["txt_id_curso"];
    $nota = $_REQUEST["txt_nota"];

    $rs = $this->objModel->m_asignar_nota($id_alumno, $id_curso, $nota);

    $this->ctl_asignar_nota();
  }

  public function ctl_listar_hijos(){
    $obj_u = new model_usuario();
    $us = unserialize($_SESSION['USUARIO']);

    $obj_u->set_id_padre($us->get_id_usuario());

    $rs = $this->objModel->m_listar_hijos($obj_u);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",$rs);
    $this->obj_smarty->setAssign("cant_usuarios",sizeof($rs));
    $this->obj_smarty->setDisplay("ver_hijos.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_listar_asistencias(){
    $obj_u = new model_usuario();
    $us = unserialize($_SESSION['USUARIO']);

    $obj_u->set_id_padre($us->get_id_usuario());
    $obj_u->set_id_hijo($us->get_id_usuario());
    $obj_u->set_perfil($us->get_perfil());

    $rs = $this->objModel->m_listar_asistencias($obj_u);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",$rs);
    $this->obj_smarty->setAssign("cant_usuarios",sizeof($rs));
    $this->obj_smarty->setDisplay("ver_asistencias.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_listar_notas(){
    $obj_u = new model_usuario();
    $us = unserialize($_SESSION['USUARIO']);

    $obj_u->set_id_padre($us->get_id_usuario());
    $obj_u->set_id_hijo($us->get_id_usuario());
    $obj_u->set_perfil($us->get_perfil());

    $rs = $this->objModel->m_listar_notas($obj_u);

    $this->obj_smarty->setAssign("perfil",$us->get_perfil());
    $this->obj_smarty->setAssign("usuario",$us->get_usuario());
    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setAssign("lista_usuarios",$rs);
    $this->obj_smarty->setAssign("cant_usuarios",sizeof($rs));
    $this->obj_smarty->setDisplay("ver_notas.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }

  public function ctl_salir(){
    unset($_REQUEST['accion']);
    session_destroy();
    header("location:index.php");
  }

  public function validar_inactividad(){
    if(isset($_SESSION['tiempo']) ) {

        $inactivo = 300;
        $vida_session = time() - $_SESSION['tiempo'];

          if($vida_session > $inactivo){
                session_unset();
                session_destroy();
                header("Location: index.php");
                exit();
          }else{
                $_SESSION['tiempo'] = time();
          }
    }else{
        $_SESSION['tiempo'] = time();
    }
}

}
?>
