<?php
/**
 * Mensajes Flash
 */
class Flash
{
  public static function show($type, $message){
    require_once 'views/layouts/flash.php';
    $type=='error'?die():'';
  }
}

?>
