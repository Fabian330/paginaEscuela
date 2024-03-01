<?php

  $tipo = $_SERVER['REQUEST_METHOD'];

  switch ($tipo) {
      case 'DELETE':
        fn_borrar_usuario();
      break;
      case 'PUT':
        fn_crear_usuario();
      break;
      case 'GET':
        buscar_usuario();
      break;
      case 'UPDATE':
         editar_usuario();
      break;

      default:
      error();
      break;
  }

function fn_crear_usuario(){
  header('HTTP/1.1 200 successful');
  $data = file_get_contents("php://input");
  $data = str_replace("'",'"',$data);
  $objJson = json_decode($data);

    header('HTTP/1.1 200 successful');
    $link = mysqli_connect('localhost','root','','paginaescuela');


    $sql = "insert into usuarios_proyecto(nombre,apell1,apell2,usuario,password,correo,perfil)";
    $sql .= " values('".$objJson->nombre."','".$objJson->ape1."','".$objJson->ape2."','".$objJson->usu."','".$objJson->pass."','".$objJson->correo."',".$objJson->perfil.")";
    $rs   = $link->query($sql);

    echo "ok";
    exit;
  }

    function buscar_usuario(){
      if(isset($_REQUEST['id_usuario'])){
          header("HTTP/1.1 200 successful");
          $id = $_REQUEST['id_usuario'];

          $conexion = mysqli_connect('localhost','root','','paginaescuela');
          $sql  = "SELECT id_usuario,nombre,apell1,apell2,usuario,password,correo,perfil FROM usuarios_proyecto";
          $sql .= " WHERE id_usuario=".$id;
          $rs  = $conexion->query($sql);

          $ar = array();
          while ($row = $rs->fetch_assoc()) {

            $ar['id_usuario']=$row['id_usuario'];
            $ar['nombre']=$row['nombre'];
            $ar['apell1']=$row['apell1'];
            $ar['apell2']=$row['apell2'];
            $ar['usuario']=$row['usuario'];
            $ar['password']=$row['password'];
            $ar['correo']=$row['correo'];
            $ar['perfil']=$row['perfil'];
          }

          echo json_encode($ar);
         exit;
        }else{
            header("HTTP/1.1 412 Precondition Failed");
            exit;
        }
    }

    function editar_usuario(){
      header("HTTP/1.1 200 successful");
      $entrada = file_get_contents("php://input");
      $obj = json_decode($entrada);
      $conexion = mysqli_connect('localhost','root','','paginaescuela');

        $sql = "update usuarios_proyecto set ";
        $sql .= "nombre='".$obj->{'nombre'}."'";
        $sql .= ",apell1='".$obj->{'ape1'}."'";
        $sql .= ",apell2='".$obj->{'ape2'}."'";
        $sql .= ",usuario='".$obj->{'usu'}."'";
        $sql .= ",correo='".$obj->{'corr'}."'";
        $sql .= ",perfil=".$obj->{'perf'};
        $sql .= " where id_usuario=".$obj->{'id_usuario'};

        $rs = $conexion->query($sql);
        $conexion->commit();
        mysqli_close($conexion);
        echo "ok";
        exit;
    }

function fn_borrar_usuario(){

  if(isset($_REQUEST['id_usuario'])){
    header('HTTP/1.1 200 successful');
    $id = $_REQUEST['id_usuario'];

    $link = mysqli_connect('localhost','root','','paginaescuela');
    $sql  = "DELETE FROM usuarios_proyecto WHERE id_usuario=".$id;
    $rs = $link->query($sql);

    echo "ok";
    exit;

  }else{
    header('HTTP/1.1 206 Partial Content');
    exit;
  }
}

  function error(){
      header('HTTP/1.1 405 method not allowed');
      header('allow get, post, detele');

  }
?>
