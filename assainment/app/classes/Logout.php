<?php


namespace App\classes;


class Logout
{

    public function index(){

            if ($this->status == true){
                header('Location: web.php?page=dashboard');
            }
            else{
                header('Location: web.php?page=login&&message=Invalid credential.');
            }


    }
}