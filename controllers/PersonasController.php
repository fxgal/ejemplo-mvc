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
    echo "<br />Hola desde PersonasController";
  }

  function index(){
    $persona = new Persona(1,'Felix');
    require_once 'views/personas/index.php';
  }
}

?>
