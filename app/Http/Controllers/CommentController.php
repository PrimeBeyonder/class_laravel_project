<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function  create(){
        
        $validator = validator(request()->all(), [
            "content" => "required"
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $comment= new Comment;
        $comment->content = request()->content;
        $comment->article_id = request()->article_id;
        $comment->user_id = auth()->id();
        $comment->save();
        return back();
    }
    public function  delete($id){
       $comment = Comment::find($id);
       $comment->delete();

       return back()->with("info", "Comment Deleted");
    }
}
