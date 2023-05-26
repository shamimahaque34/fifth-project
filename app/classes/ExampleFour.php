<?php 
 namespace App\classes;


 class ExampleFour{
     public $startingNumber;
     public $endingNumber;
     public $decriment;
     public $result;
     public  $i='';

    public function __construct($data){
   $this->startingNumber = $data['starting_number'];
   $this->endingNumber = $data['ending_number'];
   $this->decriment = $data['decriment'];
    }

    public function index(){

        for( $this->i=$this->startingNumber; $this->i>=$this->endingNumber;$this->i=$this->i-$this->decriment){
          $this->result.= $this->i .' ';
        }

        return $this->result;

        
        
      
       
        // header('Location:pages/example-two.php');
    }
 }