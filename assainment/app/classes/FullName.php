<?php


namespace App\classes;


class FullName
{
 public $firstaName, $lastNmae, $fullName;

 public function __construct($post)
 {
     $this->firstaName = $post["first_name"];
     $this->lastNmae = $post["last_name"];
 }
 public function index(){
     $this->fullName = $this->firstaName.' '.$this->lastNmae;

     header("Location: web.php?page=contact&&result= $this->fullName");
 }

}