<?php

class Home extends Controller
{
    public function __construct()
    {
    }

    public function Index()
    {
        $a = $this->model("Hello");
        $v = "Login";
        if (isset($_SESSION["user_email"])) {
            $v = "sub-menu";
        }
        $b = $this->view("Main", ["content"=>"Hello","sub-menu"=>$v]);
    }

    public function login()
    {
        $v = $this->view("Main", ["content"=>"Login"]);
    }

    public function signUp()
    {
        $v = $this->view("Main", ["content"=>"SignUp","sub-menu"=>"Login"]);
    }
}
