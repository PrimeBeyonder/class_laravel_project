<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $data =[
            [ "id" => 1, "title" => "First Article" ],
            [ "id" => 2, "title" => "Second Article" ],
            [ "id" => 2, "title" => "Third Article" ],
        ];
       return view("articles.index",["articles" => $data]);
           
    }
    public function detail($id){
        echo "Article Controller Detail $id";
    }
}
