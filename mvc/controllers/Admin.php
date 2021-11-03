<?php
/**
 *
 */
class Admin extends Controller
{

  function __construct()
  {

  }

  function hello() {
    $b = $this->view("Admin",["content"=> "AdminCategory"]);
  }

  function Category() {
    $b = $this->view("Admin",["content"=> "AdminCategory"]);
  }

  function Product() {
    $b = $this->view("Admin",["content"=> "AdminProduct"]);
  }
  //ajax load data table category
  function AjaxCategory(){
    $a = $this->model("AdminAjax");
    $a->getDataCategory();
  }
}

 ?>
