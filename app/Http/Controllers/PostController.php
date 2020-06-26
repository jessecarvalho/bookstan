<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return view("managerPosts");
    }

    public function sendPost(Request $request)
    {
        $fileName = $request->file("image")->hashName();
        $request->file("image")->store('blog');
        $post = new Post();
        $post->titulo = $request->title;
        $post->img = $fileName;
        $post->tags = $request->tags;
        $post->autor = $request->author;
        $post->texto = $request->text;
        $post->comentarios = 0;
        $post->resumo = $request->text;
        $post->save();
    }
}
