<?php
/**
 * Modelo Personas
 */
class Persona
{
  private $id;
  private $nombre;
  function __construct($id = null, $nombre = null)
  {
    $this->id = $id;
    $this->nombre = $nombre;
  }

  public function __set($var, $valor) {
     if (property_exists(__CLASS__, $var)) {
       $this->$var = $valor;
     } else {
       echo "No existe el atributo $var.";
     }
   }
   public function __get($var) {
     if (property_exists(__CLASS__, $var)) {
       return $this->$var;
     }
     return NULL;
   }
}

?>
