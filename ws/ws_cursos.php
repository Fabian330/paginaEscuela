<?php

  $tipo = $_SERVER['REQUEST_METHOD'];

  switch ($tipo) {
      case 'DELETE':
        fn_borrar_curso();
      break;
      case 'PUT':
        fn_crear_curso();
      break;
      case 'GET':
        buscar_curso();
      break;
      case 'UPDATE':
         editar_curso();
      break;

      default:
      error();
      break;
  }

function fn_crear_curso(){
  header('HTTP/1.1 200 successful');
  $data = file_get_contents("php://input");
  $data = str_replace("'",'"',$data);
  $objJson = json_decode($data);

    header('HTTP/1.1 200 successful');
    $link = mysqli_connect('localhost','root','','paginaescuela');


    $sql = "insert into cursos(nombre_curso)";
    $sql .= " values('".$objJson->nombre_curso."')";
    $rs   = $link->query($sql);

    echo "ok";
    exit;
  }

    function buscar_curso(){
      if(isset($_REQUEST['id_curso'])){
          header("HTTP/1.1 200 successful");
          $id = $_REQUEST['id_curso'];

          $conexion = mysqli_connect('localhost','root','','paginaescuela');
          $sql  = "SELECT id_curso,nombre_curso FROM cursos";
          $sql .= " WHERE id_curso=".$id;
          $rs  = $conexion->query($sql);

          $ar = array();
          while ($row = $rs->fetch_assoc()) {

            $ar['id_curso']=$row['id_curso'];
            $ar['nombre_curso']=$row['nombre_curso'];
          }

          echo json_encode($ar);
         exit;
        }else{
            header("HTTP/1.1 412 Precondition Failed");
            exit;
        }
    }

    function editar_curso(){
      header("HTTP/1.1 200 successful");
      $entrada = file_get_contents("php://input");
      $obj = json_decode($entrada);
      $conexion = mysqli_connect('localhost','root','','paginaescuela');

        $sql = "update cursos set ";
        $sql .= "nombre_curso='".$obj->{'nombre_curso'}."'";
        $sql .= " where id_curso=".$obj->{'id_curso'};

        $rs = $conexion->query($sql);
        $conexion->commit();
        mysqli_close($conexion);
        echo "ok";
        exit;
    }

function fn_borrar_curso(){

  if(isset($_REQUEST['id_curso'])){
    header('HTTP/1.1 200 successful');
    $id = $_REQUEST['id_curso'];

    $link = mysqli_connect('localhost','root','','paginaescuela');
    $sql  = "DELETE FROM cursos WHERE id_curso=".$id;
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
