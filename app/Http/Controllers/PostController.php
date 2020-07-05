<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Exception\UnexpectedValueException;

class PostController extends Controller
{
    public function authentication()
    {
        try {
            if (Auth::check() === true) {
                return view("managerPosts");
            }
            return redirect()->route("manager.login");
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function listEdit()
    {
        $data = DB::table("posts")->orderBy("created_at", "desc")->paginate(7);
        return view("blogManagerPages.editPost",['data' => $data]);
    }

    public function showForm()
    {
        try {
            return view("login");
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function login(Request $request)
    {
        try {
            $credentials = [
                "email" => $request->email,
                "password" => $request->password
            ];
            if (Auth::attempt($credentials)){
                return redirect(route("manager"));
            }
            return redirect()->back()->withInput()->withErrors(["Os dados informados não conferem"]);
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return redirect()->route("welcome");
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }

    }

    public function sendPost(Request $request)
    {
        try {
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
            return view('blogManagerPages.resultEdit', ["data" => ["icofont-smirk", "Postagem realizada com sucesso!"]]);
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }

    }

    public function edit($id)
    {
        try {
            $data = DB::table("posts")->where('id', $id)->first();
            return view("blogManagerPages.singleEditPage", ["data" => $data]);
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }

    }

    public function doEdit(Request $request, $id, $col)
    {
        try {
            DB::table('posts')->where('id', $id)->update([$col => $request["new"]]);
            if ($col == "texto") {
                $resume = substr($request["new"], 0, 170);
                DB::table('posts')->where('id', $id)->update(["resumo" => $resume]);
            }
            $data = array("icofont-smirk", "Edição realizada com sucesso!");
            return view("blogManagerPages.resultEdit", ["data" => $data]);
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }


    }

    public function delete($id)
    {
        try {
            DB::table('posts')->where('id', $id)->delete();
            $data = array("icofont-smirk", "Postagem deletada com sucesso!");
            return view("blogManagerPages.resultEdit", ["data" => $data]);
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }

    }


}
