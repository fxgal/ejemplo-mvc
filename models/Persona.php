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
    */
   function getPersonas(){
     return $this->query('SELECT * FROM personas');
   }
   /**
    * Datos de Persona
    */
   function getPersona($id){
     $persona = $this->query("SELECT * FROM personas WHERE id=$id");
     return ($persona->num_rows>0)?$persona->fetch_object():null;
   }
   /**
    * Guardar los datos de una persona
    */
   function save($persona){
     if ($persona->id) {
       $sql = "UPDATE personas
       SET
         nombres='$persona->nombres',
         apellidos='$persona->apellidos',
         apodo='$persona->apodo'
       WHERE id=$persona->id";
     }else {
       $sql = "INSERT INTO personas VALUES(null,'$persona->nombres','$persona->apellidos','$persona->apodo')";
     }
     return $this->query($sql);
   }
   /**
    * Eliminar los datos de una persona
    */
   function delete($persona_id){
      $sql = "DELETE FROM personas WHERE id=$persona_id";
     return $this->query($sql);
   }
}

?>
