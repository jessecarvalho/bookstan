<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimiliarityEngine extends Controller
{
    public function main()
    {
        try {
            $books = DB::table('books')->get();
            $numberOfBooks = sizeof($books);
            $genrePoints = $this->GenrePoints($books, $numberOfBooks);
            $targetPoints = $this->TargetPoints($books, $numberOfBooks);
            $tagsPoints = $this->TagsPoints($books, $numberOfBooks);
            $otherTagsPoints = $this->OtherTagsPoints($books, $numberOfBooks);
            $finalResult = $this->FinalPoints($genrePoints, $targetPoints, $tagsPoints, $otherTagsPoints);
            $array = $this->analyze($finalResult, json_decode(DB::table('books')->get()));
            if (sizeof($array) == 0){
                return view("bookDontFind");
            }
            $array = $this->sortArrayByScore($array);
            return view("findingSimilarity", ['data' => $array]);
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }


    public function sortArrayByScore($array)
    {
        try {
            $keyPositions = array();
            foreach ($array as $key => $value) {
                $keyPositions[] = $key;
            }
            foreach ($array as $key => $row) {
                $score[$key]  = $row['9'];
            }

            array_multisort($score, SORT_DESC, $array);
            $sortedArray = array();
            foreach ($array as $key => $value) {
                $sortedArray[$keyPositions[$key]] = $value;
            }
            return $sortedArray;
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function analyze($score, $books)
    {
        try {
            $arrayBooks = [];
            $arrayNames = [];
            $size = sizeof($score) - 1;
            for ($i = 0; $i <= $size; $i++){
                if ($score[$i] >= 50){
                    $arrayBooks[] = array($books[$i]->nome, $books[$i]->genero, $books[$i]->publico, $books[$i]->tags, $books[$i]->sinopse, $books[$i]->img, $books[$i]->autor, $books[$i]->anoPublicado, $books[$i]->livrosSaga, $score[$i]);
                }
            }
            return $arrayBooks;
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function GenrePoints($books, $numberOfBooks)
    {;
        try {
            $userRequest = session()->get("genero");
            $sizeOfUser = sizeof(session()->get("genero"));
            $arrayPoint = [];
            for ($i = 0; $i < $numberOfBooks; $i++){
                $decode = json_decode($books[$i]->genero);
                $sizeOfBook = sizeof($decode);
                $sizeOfDif = sizeof(array_diff($userRequest, $decode));
                //Quantos generos o usuário pediu que o livro tem
                if ($sizeOfUser != $sizeOfDif){
                    $points = (($sizeOfUser - $sizeOfDif) * 30) - ($sizeOfDif * 5);
                } else{
                    $points = -25;
                }

                $arrayPoint[] = $points;
            }
            return $arrayPoint;
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function TargetPoints($books, $numberOfBooks)
    {
        try {
            $userRequest = session()->get("target");
            $sizeOfUser = sizeof(session()->get("target"));
            $arrayPoint = [];
            for ($i = 0; $i < $numberOfBooks; $i++){
                $decode = json_decode($books[$i]->publico);
                $sizeOfBook = sizeof($decode);
                $sizeOfDif = sizeof(array_diff($userRequest, $decode));
                //Quantos gêneros o usuário pediu que o livro tem
                $points = (($sizeOfUser - $sizeOfDif) * 25) - ($sizeOfDif * 25);
                $arrayPoint[] = $points;
            }
            return $arrayPoint;
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function TagsPoints($books, $numberOfBooks)
    {
        try {
            $userRequest = session()->get("tags");
            $sizeOfUser = sizeof(session()->get("tags"));
            $arrayPoint = [];
            for ($i = 0; $i < $numberOfBooks; $i++){
                $decode = json_decode($books[$i]->tags);
                $sizeOfBook = sizeof($decode);
                $sizeOfDif = sizeof(array_diff($userRequest, $decode));
                //Quantos gêneros o usuário pediu que o livro tem
                $points = (($sizeOfUser - $sizeOfDif) * 15) - ($sizeOfDif * 5);
                $arrayPoint[] = $points;
            }
            return $arrayPoint;
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function OtherTagsPoints($books, $numberOfBooks)
    {
        try {
            $userRequest = session()->get("otherTags");
            $sizeOfUser = sizeof(session()->get("otherTags"));
            $arrayPoint = [];
            for ($i = 0; $i < $numberOfBooks; $i++){
                $decode = json_decode($books[$i]->tags);
                $sizeOfBook = sizeof($decode);
                $sizeOfDif = sizeof(array_diff($userRequest, $decode));
                //Quantos gêneros o usuário pediu que o livro tem
                $points = (($sizeOfUser - $sizeOfDif) * 5);
                $arrayPoint[] = $points;
            }
            return $arrayPoint;
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }

    public function FinalPoints($genrePoints, $targetPoints, $tagPoints, $otherTagsPoints)
    {
        try {
            $points = [];
            for ($i = 0; $i < sizeof($targetPoints); $i++){
                $score = $tagPoints[$i] + $genrePoints[$i] + $targetPoints[$i] + $otherTagsPoints[$i];
                if ($score > 100){
                    $score = 100;
                } elseif ($score < 0){
                    $score = 0;
                }
                $points[] = $score;
            }
            return $points;
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }
    }


}
