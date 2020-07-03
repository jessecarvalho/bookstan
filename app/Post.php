<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';

    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setResumoAttribute($value)
    {
        $value = substr($value, 0, 170);
        $this->attributes['resumo'] = $value;
    }

}
