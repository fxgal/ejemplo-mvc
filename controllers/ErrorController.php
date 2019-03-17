<?php
/**
 * Errores
 */
class ErrorController
{
  private $message;
  function __construct(){}

  function __set($var, $value){
    if(property_exists(__CLASS__, $var)){
      $this->$var = $value;
    }
    throw new \Exception("No existe la propiedad", 1);

  }
  function __get($var){
    $message =  property_exists(__CLASS__, $var)?$this->$var:NULL;
    $this->message = NULL;
    return $message;
  }
}

?>
