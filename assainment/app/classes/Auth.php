<?php


namespace App\classes;
use App\classes\User;



class Auth
{
 public $userName, $password,$user,$status;
 public function __construct($post)
 {
     $this->userName = $post['user_name'];
     $this->password = $post['password'];
 }
 public function loginCheck(){
     $this->user = new User();
     $this->users = $this->user->getAllUsers();
     $this->status = false;
     foreach ($this->users as $user){
         if ($user['user_name'] == $this->userName && $user['password'] == $this->password){
             $this->status =true;
         }
     }
     if ($this->status == true){
         header('Location: web.php?page=dashboard');
     }
     else{
         header('Location: web.php?page=login&&message=Invalid credential.');
     }

 }
}