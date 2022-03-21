<?php

class book{
  private $pdo;
  function __construct()
    {
     
       
      require_once('DBClass.php');
      $this->pdo=new DatabaseClass();

    }
    function select(){
      $books_result = $this->pdo->select()->query_build();
      //query builder call;
     return  $books_result;
    }
 
}





?>