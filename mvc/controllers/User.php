<?php

class User extends Controller {

    public $userModel;

    public function __construct() {
        $this->userModel = $this->model("UserModel");
    }
    public function checkUser() {
        echo $this->userModel->checkUserModel($_POST["fname"]);
            
    }
}

?>
