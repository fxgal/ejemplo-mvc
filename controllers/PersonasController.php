<?php
include_once 'models/Persona.php';
/**
 * PersonasController
 */
class PersonasController extends Controller
{

  function __construct()
  {
    parent::__construct();

  }

  function index(){
    $persona = new Persona();
    $personas = $persona->getPersonas();
    require_once 'views/personas/index.php';
  }

  function add(){
    if(!empty($_POST)){
      extract($_POST);
      $persona = new Persona(null, $nombres, $apellidos, $apodo);
      $persona->save($persona);
      header("Location: ".URL_BASE."personas/index");
    }
    require_once 'views/personas/add.php';
  }

}

?>
