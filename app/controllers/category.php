<?php
 require_once 'controller.php';
class category extends controller{
    function display(){
        $categoryModule=$this->create_model("category");
        $categorys_result=$categoryModule->select();
        $this->view("home", $categorys_result);
    }
    
  
}





?>