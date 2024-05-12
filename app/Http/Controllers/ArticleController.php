<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $data = Article::all();
       return view("articles.index",["articles" => $data]);
           
    }
    public function detail($id){
        $data = Article::find($id);
        return view("articles.detail" , ["article" => $data]);
    }
}
