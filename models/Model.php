<?php
include_once 'config/Database.php';

/**
 * Modelo Base
 */
class Model
{
  function __construct(){}

  function query($sql){
    return Database::query($sql);
  }
}


?>
