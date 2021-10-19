<?php
class User extends Controller
{
  public function checkUser(){
    $a = $this->model("UserModel");
    $a->checkUserModel($_POST['fname']);
  }

  public function register(){
      $a = $this->model("UserModel");
      $a->insertUser($_POST['UserName'], $_POST['Email'], $_POST['password']);
    $b = $this->view("Main",["content"=>"Hello","sub-menu"=>"Login"]);
  }
}

 ?>
