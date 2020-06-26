<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/descobrir', function (){
    return view("discover");
})->name("discover");

Route::get('/sobre', function (){
    return view('about');
})->name("about");

Route::get('/contacto', function (){
    return view("contact");
})->name("contact");

Route::get('/blog', function (){
    return view("blog");
})->name("blog");

Route::get('/manager', 'PostController@showForm');

Route::post('/sendPost', 'PostController@sendPost')->name("sendPost");

Route::get('/sendmail', 'ContactController@send')->name('sendMail');

Route::get('/genre', 'PageController@genre')->name('genreController');

Route::get('/target', 'PageController@target')->name('targetController');

Route::get('/tags', 'PageController@tags')->name('tagsController');

Route::get('/findingsimiliarity', 'SimiliarityEngine@return')->name('similiarity');



