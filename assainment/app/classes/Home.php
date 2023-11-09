<?php


namespace App\classes;
use App\classes\Product;
use App\classes\DetailBlogs;

class Home
{
   public $blog, $blogs, $singleBlog;
    public function index()
    {
       $this->blog = new product();
       $this->blogs = $this->blog-> getAllBlog();
        return view('home', ['blogs' => $this->blogs]);
    }
    public function blogs(){
        $this->blog = new product();
        $this->blogs = $this->blog-> getAllBlog();
        return view('blogs', ['blogs' => $this->blogs]);
    }
    public function about(){
        return view('about');
    }
    public function  contact(){
        return view('contact');
    }
    public function calculator(){
            return view('calculator');
    }
    public function detail($id){
        $this->blog = new DetailBlogs();
        $this->blogs = $this->blog-> getAllBlog();
        foreach ($this->blogs as $blog){
            if ($blog['id'] == $id){
                $this->singleBlog =$blog;
            }
        }
        return view('detail', ['blog' => $this->singleBlog]);
    }


    public function series(){
        return view('series');
    }
    public function login(){
        return view('login');
    }
    public function logout(){
        return view('logout');
    }
    public function dashboard(){
        return view('dashboard');
    }


}