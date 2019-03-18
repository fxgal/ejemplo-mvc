<?php
include_once 'models/Model.php';
/**
 * Modelo Personas
 */
class Persona extends Model
{
  private $id;
  private $nombres;
  private $apellidos;
  private $apodo;
  function __construct($id = null, $nombres = null, $apellidos = null, $apodo = null)
  {
    $this->id = $id;
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
    $this->apodo = $apodo;
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
   /**
    * Lista de Personas
    * @return [type] [description]
    */
   function getPersonas(){
     return $this->query('SELECT * FROM personas');
   }

   function save($persona){
     $sql = "INSERT INTO personas VALUES(null,'$persona->nombres','$persona->apellidos','$persona->apodo')";
     return $this->query($sql);
   }
}

?>
