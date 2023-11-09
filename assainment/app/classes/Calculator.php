<?php


namespace App\classes;


class Calculator
{
    public $first_number, $second_number,$choice, $result;

    public function __construct($post)
    {
        $this->first_number = $post["first_number"];
        $this->second_number = $post["second_number"];
        $this->choice = $post['choice'];
    }

    public function index(){
      switch ($this->choice){
          case '+';
              $this->result = $this->first_number + $this->second_number;
          break;

          case '-';
              $this->result = $this->first_number - $this->second_number;
           break;

          case '*';

              $this->result = $this->first_number * $this->second_number;
           break;

          case '/';
              $this->result = $this->first_number / $this->second_number;
           break;

          case '%';
              $this->result = $this->first_number % $this->second_number;
           break;

          case '0';
              $this->result = $this->first_number.''.$this->second_number;
          break;

      }
      header("location:web.php?page=calculator&&result=$this->result&&first_number=$this->first_number&&second_number=$this->second_number");

    }




}