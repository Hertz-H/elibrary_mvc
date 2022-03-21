<?php

class controller{
    public function index(){
      
       }
    function create_model($model_name){

        require_once 'app/models/'.$model_name.'.php';
        
        return new $model_name();//create instance of the model to perform operathin in database
    }
    function view($view_name,$data){////view the page in html with data from database

        require_once 'app/views/'.$view_name.'.php';


      
    }
  
}





?>