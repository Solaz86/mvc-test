<?php

/**
 * Class RadicadoModel
 */
class RadicadoModel extends Model {
  /**
   * @return mixed
   */
  public function Index(){
    $this->query('SELECT * FROM radicado ORDER BY numero_radicado ASC');
    $row = $this->resultSet();
    return $row;
  }

  /**
   * Insert into mySql
   */
  public function add(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['submit']){
      if (empty($post['numero_radicado']) || empty($post['fecha']) || empty($post['titulo']) || empty($post['temas'])){
        Messages::setMsg('Por favor ingrese todos los campos', 'error');
        return;
      }

      //validate numero_radicado

      $this->query('SELECT * FROM radicado WHERE numero_radicado = :numero_radicado');
      $this->bind(':numero_radicado', $post['numero_radicado']);
      $row = $this->single();

      if (empty($row)){

      $todayh = getdate();
      $d = (strlen($todayh['mday']) < 2) ? str_pad($todayh['mday'], 2, "0", STR_PAD_LEFT) : $todayh['mday'];
      $m = (strlen($todayh['mon']) < 2) ? str_pad($todayh['mon'], 2, "0", STR_PAD_LEFT) : $todayh['mon'];
      $h = (strlen($todayh['hours']) < 2) ? str_pad($todayh['hours'], 2, "0", STR_PAD_LEFT) : $todayh['hours'];
      $min = (strlen($todayh['minutes']) < 2) ? str_pad($todayh['minutes'], 2, "0", STR_PAD_LEFT) : $todayh['minutes'];

      $date = "$m-$d $h:$min";

      $this->query('INSERT INTO radicado (numero_radicado, fecha, titulo, temas) VALUES(:numero_radicado, :fecha, :titulo, :temas)');
      $this->bind(':numero_radicado', $post['numero_radicado']);
      $this->bind(':fecha', $post['fecha'] . '-' . $date);
      $this->bind(':titulo', $post['titulo']);
      $this->bind(':temas', $post['temas']);
      $this->execute();
      header('Location: ' . ROOT_URL . 'radicado' );
      return;
      } else {
        Messages::setMsg('Numero de radicado repetido', 'error');
      }
    }
  }

  public function load(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['submit']){
      $this->query('SELECT * FROM radicado WHERE numero_radicado = :numero_radicado');
      $this->bind(':numero_radicado', $post['numero_radicado']);
      $row = $this->resultSet();
      if ($row){
        return $row;
      } else {
        Messages::setMsg('El radicado Numero: ' . $post['numero_radicado'] . ' no existe', 'error');
      }
    }
  }


}