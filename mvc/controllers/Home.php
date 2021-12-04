<?php

class Home extends Controller
{
    public function __construct()
    {
    }

    public function Index()
    {
        $b = $this->view("Main", []);
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
