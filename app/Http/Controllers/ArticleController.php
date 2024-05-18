<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $categories = Category::all();
        $data = Article::latest()->paginate(5);
        return view("articles.index",["articles" => $data] , ["categories" => $categories]);
           
    }
    
    public function add(){
        return view("articles.add");
    }
    
    public function editForm($id){
        $categories = Category::all();
        $data = Article::find($id);
        return view("articles.edit" , ["article" =>$data], ["categories" => $categories]);
    }


    public function detail($id){
        $data = Article::find($id);
        return view("articles.detail" , ["article" => $data]);
    }
    public function delete($id){
        $data = Article::find($id);
        $data->delete();
        return redirect("/articles")->with("info" , "Deleted Article");
    }
    public function create(){

        $validator = validator(request()->all(), [
            "title" => "required",
            "body" => "required",
            "category_id" => "required",
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

       $article = new Article();
       $article->title = request("title");
       $article->body = request("body");
       $article->category_id = request("category_id");
       $article->save();

        return redirect("/articles");
    }
    public function edit($id){

        $validator = validator(request()->all(), [
            "title" => "required",
            "body" => "required",
            "category_id" => "required",
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

       $article = Article::find($id);
       $article->title = request("title");
       $article->body = request("body");
       $article->category_id = request("category_id");
       $article->save();

        return redirect("/articles");
    }
}
