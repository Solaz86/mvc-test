<?php

class Radicado extends Controller{

  protected function Index(){
    $viewmodel = new RadicadoModel();
    $this->returnView($viewmodel->Index(), true);
  }

  protected function add(){

    if (!isset($_SESSION['is_logged_in'])){
      header('Location: ' . ROOT_URL . 'radicado');
    }
    $viewmodel = new RadicadoModel();
    $this->returnView($viewmodel->add(), true);
  }

  protected function load(){

    if (!isset($_SESSION['is_logged_in'])){
      header('Location: ' . ROOT_URL . 'radicado');
    }
    $viewmodel = new RadicadoModel();
    $this->returnView($viewmodel->load(), true);
  }

}