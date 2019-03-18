<?php
include_once 'models/Model.php';
/**
 * Modelo Personas
 */
class Persona extends Model
{
  private $id;
  private $nombre;
  private $apellidos;
  function __construct($id = null, $nombre = null, $apellidos = null)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
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
   function getPersonas(){
     return $this->query('SELECT * FROM personas');
   }
}

?>
