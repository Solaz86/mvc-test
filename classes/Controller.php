<?php
/**
 * Created by PhpStorm.
 * User: esinergia
 * Date: 6/09/18
 * Time: 6:57 AM
 */

abstract class Controller{
  protected $request;
  protected $action;

  public function __construct($action, $request)
  {
    $this->action = $action;
    $this->request = $request;
  }

  /**
   * @param mixed $action
   */
  public function executeAction()
  {
    return $this->{$this->action}();
  }

  protected function returnView($viewmodel, $fullview){
    $view = 'views/' . get_class($this) . '/' . $this->action . '.php';
    if ($fullview){
      require('views/main.php');
    } else {
      require($view);
    }
  }
}
