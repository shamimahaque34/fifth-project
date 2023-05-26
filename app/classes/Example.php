<?php 
 namespace App\classes;


 class Example{
     public $startingNumber;
     public $endingNumber;
     public $incriment;
     public $result;
     public  $i='';

    public function __construct($data){
   $this->startingNumber = $data['starting_number'];
   $this->endingNumber = $data['ending_number'];
   $this->incriment = $data['incriment'];
    }

    public function index(){

        for( $this->i=$this->startingNumber; $this->i<=$this->endingNumber;$this->i=$this->i+$this->incriment){
          $this->result.= $this->i .' ';
        }

        return $this->result;

        
        
      
       
        // header('Location:pages/example-two.php');
    }
 }