<?php

class Home extends Controller {
    public function __construct() {

    }

    function hello() {
        $a = $this->model("Hello");
        $b = $this->view("Main",["content"=>"Hello","sub-menu"=>"Login"]);
    }

    function login(){
        $v = $this->view("Main",["content"=>"Login"]);
    }

    function signUp(){
        $v = $this->view("Main",["content"=>"SignUp","sub-menu"=>"Login"]);
    }
}

?>
