<?php

class Home extends Controller {
    public function __construct() {

    }

    function hello() {
        $a = $this->model("Hello");
        $b = $this->view("LayoutMain",["content"=>"Hello","sub-menu"=>"Login"]);
    }

    function abc() {
        $a = $this->model("Hello");

        $b = $this->view("LayoutMain",["content"=>"Abc"]);
    }
    function login(){
        $v = $this->view("LayoutMain",["content"=>"Login"]);
    }

    function signUp(){
        $v = $this->view("LayoutMain",["content"=>"Server","sub-menu"=>"Login"]);
    }
}

?>
