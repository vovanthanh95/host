<?php
class Controller
{
    public function model($model)
    {
        require_once "./mvc/models/".$model.".php";
        return new $model();
    }

    public function view($view, $data=[])
    {
        require_once "./mvc/views/".$view.".php";
    }
    public function authAdmin($url){
      if(!isset($_SESSION["user-email"]) && !isset($_SESSION["level"])){
          header("Location: $url");
      }
    }
    public function authUser($url){
      if(!isset($_SESSION["user-email"])){
          header("Location: $url");
      }
    }
}
?>
