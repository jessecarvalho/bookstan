<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function main()
    {
        try {
            $paginate = DB::table('posts')->orderBy('created_at', 'desc')->paginate(6);
            return view("blog", ['posts' => $paginate]);
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }

    }

    public function blogPost($slug)
    {
        try {
            $data = DB::table('posts')->where('slug', $slug)->first();
            return view('singlePostBlog', ['data' => $data]);
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }
}
