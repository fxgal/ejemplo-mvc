<?php
/**
 * Mensahes Flash
 */
class FlashController
{
  private $error;
  private $success;
  private $info;
  private $message;

  function __construct(){}

  function __set($var, $value){
    if(property_exists(__CLASS__, $var)){
      $this->$var = $value;
    }else{
      throw new \Exception("No existe la propiedad", 1);
    }

  }
  function __get($var){
    var_dump($var);
    if(property_exists(__CLASS__, $var)){
      $$this->message = [
        'type'=>$var,
        'text'=>$this->$var
      ];
    }
    var_dump($message);
    require_once 'views/layouts/flash.php';
  }

  function show(){
    $message = $this->message;
    require_once 'views/layouts/flash.php';
    $message = NULL;
  }
}

?>
