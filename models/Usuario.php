<?php
include_once 'models/Model.php';
/**
 * Modelo Usuarios
 */
class Usuario extends Model
{
  private $id;
  private $usuario;
  private $clave;
  private $acceso;
  function __construct($id = null, $usuario = null, $clave = null, $acceso = null)
  {
    $this->id = $id;
    $this->usuario = $usuario;
    $this->clave = $clave;
    $this->acceso = $acceso;
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
    * Autenticar
    */
   function autenticar($usuario){
     $usuario = $this->query("SELECT * FROM usuarios WHERE usuario='$usuario->usuario' AND clave='$usuario->clave'");
     if($usuario->num_rows>0){
       $usuario = $usuario->fetch_object();
       $sql = "UPDATE usuarios SET acceso=now() WHERE id=$usuario->id";
       $this->query($sql);
       return $usuario;
     }
     return false;
   }

   /**
    * Datos de Usuario
    */
   function getUsuario($id){
     $usuario = $this->query("SELECT * FROM usuarios WHERE id=$id");
     return ($usuario->num_rows>0)?$usuario->fetch_object():null;
   }
   /**
    * Guardar los datos de una usuario
    */
   function save($usuario){
     if ($usuario->id) {
       $sql = "UPDATE usuarios
       SET
         usuario='$usuario->usuario',
         clave='$usuario->clave',
       WHERE id=$usuario->id";
     }else {
       $sql = "INSERT INTO usuarios VALUES(null,'$usuario->usuario','$usuario->clave',now())";
     }
     return $this->query($sql);
   }
   /**
    * Eliminar los datos de un usuario
    */
   function delete($usuario_id){
      $sql = "DELETE FROM usuarios WHERE id=$usuario_id";
     return $this->query($sql);
   }
}

?>
