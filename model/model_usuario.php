<?php

class model_usuario{
  private $id_usuario;
  private $nombre;
  private $apell1;
  private $apell2;
  private $usuario;
  private $password;
  private $correo;
  private $perfil;
  private $id_curso;
  private $nombre_curso;
  private $id_padre;
  private $id_hijo;

  public function __construct(){}

  public function get_id_usuario(){
    return $this->id_usuario;
  }

  public function set_id_usuario($n){
    $this->id_usuario = $n;
  }

  public function get_nombre(){
    return $this->nombre;
  }

  public function set_nombre($n){
    $this->nombre =$n;
  }

  public function get_apell1(){
    return $this->apell1;
  }

  public function set_apell1($n){
    $this->apell1 =$n;
  }

  public function get_apell2(){
    return $this->apell2;
  }

  public function set_apell2($n){
    $this->apell2 =$n;
  }

  public function get_usuario(){
    return $this->usuario;
  }

  public function set_usuario($n){
    $this->usuario = $n;
  }

  public function get_password(){
    return $this->password;
  }

  public function set_password($n){
    $this->password = $n;
  }

  public function get_correo(){
    return $this->correo;
  }

  public function set_correo($n){
    $this->correo =$n;
  }

  public function get_perfil(){
    return $this->perfil;
  }

  public function set_perfil($n){
    $this->perfil = $n;
  }

  public function get_id_curso(){
    return $this->id_curso;
  }

  public function set_id_curso($n){
    $this->id_curso = $n;
  }

  public function get_nombre_curso(){
    return $this->nombre_curso;
  }

  public function set_nombre_curso($n){
    $this->nombre_curso =$n;
  }

  public function get_id_padre(){
    return $this->id_padre;
  }

  public function set_id_padre($n){
    $this->id_padre = $n;
  }

  public function get_id_hijo(){
    return $this->id_hijo;
  }

  public function set_id_hijo($n){
    $this->id_hijo = $n;
  }

}

?>
