<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class SimiliarityEngine extends Controller
{
    public function return()
    {
        $books = DB::table('books')->get();
        $numberOfBooks = sizeof($books);
        $genrePoints = $this->GenrePoints($books, $numberOfBooks);
        $targetPoints = $this->TargetPoints($books, $numberOfBooks);
        $tagsPoints = $this->TagsPoints($books, $numberOfBooks);
        $finalResult = $this->FinalPoints($genrePoints, $targetPoints, $tagsPoints);
        $array =    $this->analyze($finalResult, json_decode(DB::table('books')->get()));
        return view("findingSimilarity", ['data' => $array]);
    }



    public function analyze($score, $books)
    {
        $arrayBooks = [];
        $arrayNames = [];
        $size = sizeof($score) - 1;
        for ($i = 0; $i <= $size; $i++){
            if ($score[$i] >= 40){
                $arrayBooks[] = array($books[$i]->nome, $books[$i]->genero, $books[$i]->publico, $books[$i]->tags, $books[$i]->sinopse, $books[$i]->img, $books[$i]->autor, $books[$i]->anoPublicado, $books[$i]->livrosSaga, $score[$i]);
            }
        }
        return $arrayBooks;
    }

    public function GenrePoints($books, $numberOfBooks)
    {;
        $userRequest = session()->get("genero");
        $sizeOfUser = sizeof(session()->get("genero"));
        $arrayPoint = [];
        for ($i = 0; $i < $numberOfBooks; $i++){
            $decode = json_decode($books[$i]->genero);
            $sizeOfBook = sizeof($decode);
            $sizeOfDif = sizeof(array_diff($userRequest, $decode));
            //Quantos generos o usuário pediu que o livro tem
            $points = (($sizeOfUser - $sizeOfDif) * 30) - ($sizeOfDif * 30);
            $arrayPoint[] = $points;
        }
        return $arrayPoint;
    }

    public function TargetPoints($books, $numberOfBooks)
    {
        $userRequest = session()->get("target");
        $sizeOfUser = sizeof(session()->get("target"));
        $arrayPoint = [];
        for ($i = 0; $i < $numberOfBooks; $i++){
            $decode = json_decode($books[$i]->publico);
            $sizeOfBook = sizeof($decode);
            $sizeOfDif = sizeof(array_diff($userRequest, $decode));
            //Quantos gêneros o usuário pediu que o livro tem
            $points = (($sizeOfUser - $sizeOfDif) * 20) - ($sizeOfDif * 5);
            $arrayPoint[] = $points;
        }
        return $arrayPoint;
    }

    public function TagsPoints($books, $numberOfBooks)
    {
        $userRequest = session()->get("tags");
        $sizeOfUser = sizeof(session()->get("tags"));
        $arrayPoint = [];
        for ($i = 0; $i < $numberOfBooks; $i++){
            $decode = json_decode($books[$i]->tags);
            $sizeOfBook = sizeof($decode);
            $sizeOfDif = sizeof(array_diff($userRequest, $decode));
            //Quantos gêneros o usuário pediu que o livro tem
            $points = (($sizeOfUser - $sizeOfDif) * 10) - ($sizeOfDif * 10);
            $arrayPoint[] = $points;
        }
        return $arrayPoint;
    }

    public function FinalPoints($genrePoints, $targetPoints, $tagPoints)
    {
        $points = [];
        for ($i = 0; $i < sizeof($targetPoints); $i++){
            $score = $tagPoints[$i] + $genrePoints[$i] + $targetPoints[$i];
            if ($score > 100){
                $score = 100;
            } elseif ($score < 0){
                $score = 0;
            }
            $points[] = $score;
        }
        return $points;
    }


}
