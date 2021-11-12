<?php

class Admin extends Controller
{
    public function __construct()
    {
    }
    public function Index()
    {
        $b = $this->view("Admin", ["content"=> "AdminLogin"]);
    }

    public function Category()
    {
      if (isset($_SESSION["user-email"]) && isset($_SESSION["level"])) {
          $b = $this->view("Admin", ["content"=> "AdminCategory"]);
      }else{
        header('Location: ./../Admin');
      }

    }
    public function Product()
    {
        $b = $this->view("Admin", ["content"=> "AdminProduct"]);
    }
    //ajax load data table category
    public function AjaxCategory()
    {
        $a = $this->model("AdminAjax");
        $a->getDataCategory();
    }
    //ajax load data table product
    public function AjaxProduct()
    {
        $a = $this->model("AdminAjax");
        $a->getDataProduct();
    }
    //ajax edit category
    public function editCategory()
    {
        $a = $this->model("AdminAjax");
        $a->editCategory($_POST["id"], $_POST["name_category"]);
    }
    //ajax delete category
    public function deleteCategory()
    {
        $a = $this->model("AdminAjax");
        $a->deleteCategory($_POST["idcategory"]);
    }

    //ajax add category
    public function addCategory()
    {
        $a = $this->model("AdminAjax");
        $a->addCategory($_POST["name_category"]);
    }

    //ajax check name category
    public function checkNameCategory()
    {
        $a = $this->model("AdminAjax");
        $a->checkNameCategory($_POST["name"]);
    }
    //ajax check login admin
    public function adminLogin()
    {
        $a = $this->model("AdminAjax");
        $a->adminLogin($_POST['name'],$_POST['pass']);
    }
    //logout admin
    public function logout()
    {
        session_destroy();
        header("Location: http://localhost/mvc/Admin");
    }
}
