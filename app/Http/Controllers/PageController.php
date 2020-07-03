<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function session($atribute, $value)
    {
        session([$atribute=>$value]);
    }

    public function genre(Request $request)
    {
        if ($request->genre === null){
            $genre['success'] = false;
            $genre['message'] = 'Por favor, escolha ao menos um genero para continuarmos';
            echo json_encode($genre);
        } elseif (sizeof($request->genre) > 2){
            $genre['success'] = false;
            $genre['message'] = 'Por favor, escolha no máximo dois generos para prosseguirmos';
            echo json_encode($genre);
        }
        else{
            $this->session("genero", $request->genre);
            $genre['success'] = true;
            echo json_encode($genre);
        }
    }

    public function target(Request $request)
    {
        if ($request->target === null){
            $target['success'] = false;
            $target['message'] = 'Por favor, escolha ao menos um público alvo para prosseguirmos';
            echo json_encode($target);
        } else{
            $this->session("target", $request->target);
            $target['success'] = true;
            echo json_encode($target);
        }
    }

    public function tags(Request $request)
    {
        if ($request->tags === null){
            $tags['success'] = false;
            $tags['message'] = 'Por favor, escolha ao menos uma tag essencial para continuarmos';
            echo json_encode($tags);
        } elseif (sizeof($request->tags) > 2){
            $tags['success'] = false;
            $tags['message'] = 'Por favor, escolha no máximo duas tags essenciais para prosseguirmos';
            echo json_encode($tags);
        }
        else{
            $this->session("tags", $request->tags);
            $tags['success'] = true;
            echo json_encode($tags);
        }
    }

    public function otherTags(Request $request)
    {
        if (sizeof($request->otherTags) > 3){
            $otherTags['success'] = false;
            $otherTags['message'] = 'Por favor, escolha no máximo 3 tags';
            echo json_encode($otherTags);
        }
        else{
            $this->session("otherTags", $request->otherTags);
            $otherTags['success'] = true;
            echo json_encode($otherTags);
        }
    }

}
