<?php


namespace App\classes;


class User
{
 public $Users = [];
 public function __construct()
 {
     $this->Users=[
        0 =>[
        "id"      => '1',
        "user_name"    => 'admin',
        "password"=> '1234',

        ]

    ];
 }
 public function getAllUsers(){
     return $this->Users;
 }
}