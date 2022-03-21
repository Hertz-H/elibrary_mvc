<?php
 require_once 'controller.php';
class book extends controller{
    function display(){
        $bookModule=$this->create_model("book");
        $books_result=$bookModule->select();
        $this->view("home", $books_result);
    }
    
  
}





?>