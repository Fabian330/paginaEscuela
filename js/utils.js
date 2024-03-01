//usuarios
function fn_crear_usuario(){

  var nombre = $("#txtNombre").val();
  var ape1   = $("#txtape1").val();
  var ape2   = $("#txtape2").val();
  var usu    = $("#txtusu").val();
  var pass   = $("#pwdpass").val();
  var perfil = $("#cboPerfil").val();
  var correo = $("#txtCorreo").val();

  if(nombre == null){
    alert('El nombre es un campo requerido');
    return -1;
  }

  var datos    ="{'nombre':'"+nombre+"','ape1':'"+ape1+"','ape2':'"+ape2+"','usu':'"+usu+"','pass':'"+pass+"','perfil':'"+perfil+"','correo':'"+correo+"'}";

  var settings = {
    "url": "ws/ws_usuarios.php",
    "method": "PUT",
    "data":datos,
    "timeout": 0,
  };

  $.ajax(settings).done(function (response) {
    if(response==='ok'){
      location.reload();
    }else{
      alert('Error insertando linea');
    }
  });

}

function fn_borrar_usuario(id_usuario){

  let text;
  if (confirm("Realmente desea borrar este usuario?") == true) {

    var settings = {
      "url": "ws/ws_usuarios.php?id_usuario="+id_usuario,
      "method": "DELETE",
      "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
      if(response==='ok'){
        location.reload();
      }else{
        alert('Error Borrando linea');
      }
    });
  } else {
   alert('Borrado Cancelado...');
  }
}

function js_editar_usuario(){

  var id = document.getElementById('e_id_usuario').value;
  var nombre = document.getElementById('e_txtNombre').value;
  var ape1 = document.getElementById('e_txtapell1').value;
  var ape2 = document.getElementById('e_txtapell2').value;
  var usu = document.getElementById('e_txtUsu').value;
  var perf = document.getElementById('e_cbo_perfil').value;
  var corr = document.getElementById('e_txtCorreo').value;

  var datos = '{"nombre":"'+nombre+'","ape1":"'+ape1+'","ape2":"'+ape2+'","usu":"'+usu+'","perf":"'+perf+'","corr":"'+corr+'","id_usuario":"'+id+'"}';

  var settings = {
    "url": "ws/ws_usuarios.php",
    data:datos,
    "method": "UPDATE",
    "timeout": 0,
  };

  $.ajax(settings).done(function (response) {

    if(response==='ok'){
      alert('Linea Actualizada');
      location.reload();
    }else{
      alert('Error editar usuario('+response+')');
    }
  });

}

function obtener_datos_usuario(id_usuario){

  var settings = {
    "url": "ws/ws_usuarios.php?id_usuario="+id_usuario,
    "method": "GET",
    "timeout": 0
  };

  $.ajax(settings).done(function (response) {

    var ObjUsuario = JSON.parse(response);

        document.getElementById('e_id_usuario').value = ObjUsuario.id_usuario;
        document.getElementById('e_txtNombre').value = ObjUsuario.nombre;
        document.getElementById('e_txtapell1').value = ObjUsuario.apell1;
        document.getElementById('e_txtapell2').value = ObjUsuario.apell2;
        document.getElementById('e_txtUsu').value    = ObjUsuario.usuario;
        //document.getElementById('e_pwdPass').value   = ObjUsuario.pas;
        document.getElementById('e_txtCorreo').value = ObjUsuario.correo;
        document.getElementById('e_cbo_perfil').value= ObjUsuario.perfil;
  });
}

//cursos
function fn_crear_curso(){

  var nombre_curso = $("#txtNombreCurso").val();

  if(nombre_curso == null){
    alert('El nombre es un campo requerido');
    return -1;
  }

  var datos    ="{'nombre_curso':'"+nombre_curso+"'}";

  var settings = {
    "url": "ws/ws_cursos.php",
    "method": "PUT",
    "data":datos,
    "timeout": 0,
  };

  $.ajax(settings).done(function (response) {
    if(response==='ok'){
      location.reload();
    }else{
      alert('Error insertando linea');
    }
  });

}

function fn_borrar_curso(id_curso){

  let text;
  if (confirm("Realmente desea borrar este curso?") == true) {

    var settings = {
      "url": "ws/ws_cursos.php?id_curso="+id_curso,
      "method": "DELETE",
      "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
      if(response==='ok'){
        location.reload();
      }else{
        alert('Error Borrando linea');
      }
    });
  } else {
   alert('Borrado Cancelado...');
  }
}

function js_editar_curso(){

  var id = document.getElementById('e_id_curso').value;
  var nombre_curso = document.getElementById('e_txtNombreCurso').value;

  var datos = '{"nombre_curso":"'+nombre_curso+'","id_curso":"'+id+'"}';

  var settings = {
    "url": "ws/ws_cursos.php",
    data:datos,
    "method": "UPDATE",
    "timeout": 0,
  };

  $.ajax(settings).done(function (response) {

    if(response==='ok'){
      alert('Linea Actualizada');
      location.reload();
    }else{
      alert('Error editar curso('+response+')');
    }
  });

}

function obtener_datos_curso(id_curso){

  var settings = {
    "url": "ws/ws_cursos.php?id_curso="+id_curso,
    "method": "GET",
    "timeout": 0
  };

  $.ajax(settings).done(function (response) {

    var ObjCurso = JSON.parse(response);

        document.getElementById('e_id_curso').value = ObjCurso.id_curso;
        document.getElementById('e_txtNombreCurso').value = ObjCurso.nombre_curso;

  });
}
