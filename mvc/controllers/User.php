<?php

class User extends Controller
{
    public function checkUser()
    {
        $a = $this->model("UserModel");
        $a->checkUserModel($_POST['username']);
    }
    public function checkEmail()
    {
        $a = $this->model("UserModel");
        $a->checkEmailModel($_POST['email']);
    }

    public function register()
    {
        $a = $this->model("UserModel");
        $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $a->insertUser($_POST['UserName'], $_POST['Email'], $password_hash);
        $v = "Login";
        if (isset($_SESSION["user_email"])) {
            $v = "sub-menu";
        }
        $b = $this->view("Main", ["content"=>"Hello","sub-menu"=>$v]);
    }

    public function login()
    {
        $a = $this->model("UserModel");
        if ($a->checkUserNamePass()) {
            header("Location: http://localhost/mvc/");
        } else {
            echo "sai thông tin";
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: http://localhost/mvc/");
    }
}
