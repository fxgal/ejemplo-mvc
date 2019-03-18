<?php
include_once 'config/constantes.php';
include_once 'controllers/Controller.php';
include_once 'controllers/FlashController.php';
/**
 * Router
 */
class Router
{

  function __construct()
  {
    //Crear una instancia de mensajes para las vistas
    $flash = new FlashController();
    //Destructurar la URL
    $url = isset($_GET['url'])?$_GET['url']:URL_DEFAULT;
    $url = explode('/', $url);
    $controllerName = isset($url[0])?$url[0]:CONTROLLER_DEFAULT;
    $actionName = isset($url[1])?$url[1]:ACTION_DEFAULT;
    //Nombre de la clase controller
    $controllerName = ucfirst($url[0]).'Controller';
    $ruta = 'controllers/'.$controllerName.'.php';
    if(file_exists($ruta)){
      include_once $ruta;
      $controller = new $controllerName;
      if(method_exists($controller, $actionName)){
        $controller->$actionName();
      }else{
        $flash->show('error',"La accion $actionName no existe");
      }
    }else{
      $flash->show('error',"El controlador $controllerName no existe");
    }
  }
}

?>
