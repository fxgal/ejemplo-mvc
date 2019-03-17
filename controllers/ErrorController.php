<?php
/**
 * Errores
 */
class ErrorController
{

  function __construct(){}

  function message($message = "Algo ha salido mal"){
    echo $message;
    exit();
  }
}

?>
