<?php
/**
 * Mensahes Flash
 */
class FlashController
{
  function __construct(){}

  function show($type, $message){
    require_once 'views/layouts/flash.php';
  }
}

?>
