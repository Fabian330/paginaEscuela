<?php
class conn{
  private $server;
  private $db;
  private $usu;
  private $pass;
  private $link;

  public function __construct(){
  $this->server = "localhost";
  $this->db = "paginaescuela";
  $this->usu = "root";
  $this->pass="";
}

public function conectar(){
  $this->link = mysqli_connect($this->server, $this->usu, $this->pass, $this->db);
}

public function ejecutar($sql){
  $this->conectar();
  $rs = $this->link->query($sql);
  return $rs;
}

}
?>
