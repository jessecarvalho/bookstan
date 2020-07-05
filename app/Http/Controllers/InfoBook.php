<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoBook extends Controller
{
    public function showInfo($slug)
    {
        $data = DB::table('books')->where("img", $slug)->get();
        return view('bookSingleInfo', ["data" => $data[0]]);
    }
}
