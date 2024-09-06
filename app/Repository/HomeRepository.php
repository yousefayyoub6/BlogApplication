<?php

namespace App\Repository;

use App\IRepository\HomeInterface;
use App\Models\Post;

class HomeRepository implements HomeInterface{

    public function index(){
        $posts = Post::orderBy("created_at","desc")->simplePaginate(10);
        return view("Home.blog", compact("posts"));
    }


    public function showComments(){
        return view("Home.showcomments");
    }
}