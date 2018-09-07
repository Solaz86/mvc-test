<?php
/**
 * Created by PhpStorm.
 * User: esinergia
 * Date: 5/09/18
 * Time: 10:16 PM
 */

class Bootstrap
{
  private $controller;
  private $action;
  private $request;

  /**
   * Bootstrap constructor.
   * @param $request
   */
  public function __construct($request)
  {
    $this->request = $request;
    $this->controller = empty($this->request['controller']) ? 'home' : $this->request['controller'];
    $this->action = empty($this->request['action']) ? 'index' : $this->request['action'];
  }

  /**
   * @return mixed
   */
  public function createController() {
    //Check class
    if (class_exists($this->controller)){
      $parents = class_parents($this->controller);
      //Check extend
      if (in_array('Controller', $parents)){
        if (method_exists($this->controller, $this->action)){
          new Home($this->action, $this->request);
          return new $this->controller($this->action, $this->request);
        } else {
          echo '<h1> Metodo indefinido </h1>';
        }
      }  else {
        echo '<h1> Controlador indefinido </h1>';
      }
    } else {
      echo '<h1> Clase indefinida </h1>';
    }
  }
}