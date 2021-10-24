<?php

class Home extends Controller {
    public function __construct() {

    }

    function hello() {
        $a = $this->model("Hello");
        $v = "Login";
        if(isset($_SESSION["user_email"])){
          $v = "sub-menu";
        }
        $b = $this->view("Main",["content"=>"Hello","sub-menu"=>$v]);
    }

    function login(){
        $v = $this->view("Main",["content"=>"Login"]);
    }

    function signUp(){
        $v = $this->view("Main",["content"=>"SignUp","sub-menu"=>"Login"]);
    }
}

?>
