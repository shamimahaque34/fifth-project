<?php

namespace APP\classes;

class ExampleThree{
    public $result =[];
    
    public $Subject = [];
    public function __construct($data){
    //    echo '<pre>';
    //    print_r($_POST);
    //    echo '</pre>';
    $this->result = $data;

    
    }

    public function index(){
    return $this->result;
    }
}