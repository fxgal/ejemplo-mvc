<?php

/**
 * Autenticacion
 */
class Auth
{

  public static function verify($controller, $action){
    $public_url=[
      'usuarios'=>[
        'login','register'
      ]
    ];
    if(!empty($_SESSION['aut'])){
      return true;
    }else{
      if(array_key_exists($controller, $public_url)){
        if(in_array($action, $public_url[$controller])){
          return true;
        }
      }
    }
    return false;
  }
}


?>
