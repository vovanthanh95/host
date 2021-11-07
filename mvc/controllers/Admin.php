<?php

class Admin extends Controller
{
    public function __construct()
    {
    }

    public function hello()
    {
        $b = $this->view("Admin", ["content"=> "AdminCategory"]);
    }

    public function Category()
    {
        $b = $this->view("Admin", ["content"=> "AdminCategory"]);
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
}
