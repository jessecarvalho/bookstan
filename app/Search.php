<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    public function getGenre(){
        return $this->genre;
    }
}
