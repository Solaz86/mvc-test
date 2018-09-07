<?php
/**
 * Created by PhpStorm.
 * User: esinergia
 * Date: 6/09/18
 * Time: 10:06 AM
 */

class UsersModel extends Model {

  public function register(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if (empty($post['name']) || empty($post['email']) || empty($post['password'])){
      Messages::setMsg('Por favor ingrese todos los campos', 'error');
    } else {
      $password = md5($post['password']);
      if ($post['submit']){
        $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        $this->bind(':name', $post['name']);
        $this->bind(':email', $post['email']);
        $this->bind(':password', $password);
        $this->execute();
        if ($this->lastInsertId()){
          header('Location: ' . ROOT_URL . 'users/login' );
        }
      }
      return;
    }
  }

   public function login(){
     $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

     $password = md5($post['password']);

     if ($post['submit']){
       $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
       $this->bind(':email', $post['email']);
       $this->bind(':password', $password);

       $row = $this->single();
       if ($row){
         $_SESSION['is_logged_in'] = true;
         $_SESSION['user_data'] = array(
           'id'   => $row[0]['id'],
           'name' => $row[0]['name'],
           'email' => $row[0]['email'],
         );
         header('Location: ' . ROOT_URL . 'radicado' );

       } else {
         Messages::setMsg('Inicio de sesion incorrecto', 'error');
       }
     }
     return;
   }
}