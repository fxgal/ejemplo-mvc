<?php
/**
 * Modelo Personas
 */
class Persona
{
  public $id;
  public $nombre;
  function __construct($id = null, $nombre = null)
  {
    $this->id = $id;
    $this->nombre = $nombre;
  }
}

?>
