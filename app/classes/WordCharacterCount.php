<?php

namespace App\classes;

class WordCharacterCount{

    public $givenString;
    public $totalWord;
    public $totalCharacter;
    public $result =[];

    public function __construct($data){
      $this->givenString = $data['given_string'];
    }

    public function index(){

      $this->totalWord = str_word_count($this->givenString);
      

      $this->totalCharacter = strlen($this->givenString) ;

      $this->result =[
          'total_word' =>'Total Word :'.$this->totalWord,
          'total_character' =>'Total Character :'.$this->totalCharacter
      ];


      return $this->result;


      


    }
}