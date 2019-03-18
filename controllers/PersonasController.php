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
    $personaModel = new Persona();
    $personas = $personaModel->getPersonas();
    require_once 'views/personas/index.php';
  }
}

?>
