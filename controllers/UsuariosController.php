<?php
include_once 'models/Usuario.php';
/**
 * UsuariosController
 */
class UsuariosController extends Controller
{

  function __construct()
  {
    parent::__construct();

  }

  function register(){
    if(!empty($_POST)){
      extract($_POST);
      $usuario = new Usuario(null, $usuario, $clave);
      $usuario->save($usuario);
      if ($aut = $usuario->autenticar($usuario)) {
        $_SESSION['aut']=$aut;
        header("Location: ".URL_BASE."personas/index");
      }
      header("Location: ".URL_BASE."usuarios/register");
    }
    require_once 'views/usuarios/register.php';
  }

  function login(){
    if(!empty($_POST)){
      extract($_POST);
      $usuario = new Usuario(null, $usuario, $clave);
      if ($aut = $usuario->autenticar($usuario)) {
        $_SESSION['aut']=$aut;
        header("Location: ".URL_BASE."personas/index");
      }
    }
    require_once 'views/usuarios/login.php';
  }

  function logout(){
    session_destroy();
    header("Location: ".URL_BASE."usuarios/login");
  }

  function edit(){
    if(!empty($_POST)){
      extract($_POST);
      $usuario = new Usuario(null, $usuario, $clave);
      $usuario->save($usuario);
      if ($aut = $usuario->autenticar($usuario)) {
        $_SESSION['aut']=$aut;
        header("Location: ".URL_BASE."personas/index");
      }
      header("Location: ".URL_BASE."usuarios/index");
    }
    $usuario = $_SESSION['aut'];
    require_once 'views/usuarios/edit.php';
  }

  function delete(){
    if(!empty($_GET['id'])){
      $usuario = new Usuario();
      $usuario->delete($_GET['id']);
      header("Location: ".URL_BASE."usuarios/index");
    }
    if(!isset($usuario)) header("Location: ".URL_BASE."usuarios/index");
  }

}

?>
