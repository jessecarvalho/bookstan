<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pageController extends Controller
{

    public function session($atribute, $value)
    {
        session([$atribute=>$value]);
    }


    public function genre(Request $request)
    {
        $this->session("genero", $request->genre);
        echo json_encode($request->genre);
    }
    public function target(Request $request)
    {
        $this->session("target", $request->target);
        echo json_encode($request->target);
    }
    public function tags(Request $request)
    {
        $this->session("tags", $request->tags);
        echo json_encode($request->tags);
    }
}
