<?php
include_once 'config/constantes.php';
include_once 'controllers/Controller.php';
include_once 'controllers/ErrorController.php';
/**
 * Router
 */
class Router
{

  function __construct()
  {
    //Crear una instancia de ErrorController para lanzar errores
    $error = new ErrorController();
    //Destructurar la URL
    $url = (isset($_GET['url']) && $_GET['url']!='index.php')?$_GET['url']:URL_DEFAULT;
    $url = explode('/',$url);
    $controllerName = ucfirst($url[0]).'Controller';
    $actionName = $url[1];
    $ruta = 'controllers/'.$controllerName.'.php';
    if(file_exists($ruta)){
      include_once $ruta;
      $controller = new $controllerName;
      if(method_exists($controller, $actionName)){
        $controller->$actionName();
      }else{
        $error->message = "La accion $actionName no existe";
      }
    }else{
      $error->message = "El controller $controllerName no existe";
    }
  }
}

?>
