<?php

require_once "libs/smarty_4_3_0/Smarty.class.php";

class config_smarty{
  private $ins_smarty;

  public function __construct(){
    $this->ins_smarty = new Smarty();
    $this->setRuta();
  }

  public function setRuta(){
    $this->ins_smarty->template_dir = "view/templates";
    $this->ins_smarty->compile_dir = "view/templates_c";
    $this->ins_smarty->cache_dir = "control_cache";
    $this->ins_smarty->config_dir = "control/configs";
  }

  public function setDisplay($archivo){
    $this->ins_smarty->display($archivo);
  }

  public function setAssign($variable, $valor){
    $this->ins_smarty->assign($variable, $valor);
  }

}
 ?>
