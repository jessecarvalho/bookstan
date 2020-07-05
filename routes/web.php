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

Route::get('/blog', 'BlogController@main')->name("blog");
Route::get('/blog/{slug}', 'BlogController@blogPost')->name("blogPost");

Route::get('/manager', 'PostController@authentication')->name("manager");
Route::get('/manager/login', 'PostController@showForm')->name("manager.login");
Route::post('/manager/login/go', 'PostController@login')->name("manager.tryLogin");
Route::get('/manager/logout', 'PostController@logout')->name("manager.logout");
Route::get('/manager/edit', "PostController@listEdit")->name("manager.listEdit");
Route::get('/manager/edit/{id}', "PostController@edit")->name("manager.edit");
Route::get('/manager/edit/do/{id}/{col}', "PostController@doEdit")->name("manager.doEdit");
Route::get('/manager/delete/{id}', "PostController@delete")->name("manager.delete");

Route::post('/sendpost', 'PostController@sendPost')->name("sendPost");

Route::get('/sendmail', 'ContactController@send')->name('sendMail');

Route::get('/genre', 'PageController@genre')->name('genreController');
Route::get('/target', 'PageController@target')->name('targetController');
Route::get('/tags', 'PageController@tags')->name('tagsController');
Route::get('/othertags', 'PageController@otherTags')->name('otherTagsController');
Route::get('/findingsimiliarity', 'SimiliarityEngine@main')->name('similiarity');
Route::get('/bookinfo/{slug}', 'InfoBook@showInfo')->name('bookInfo');

Route::get('image/{filename}', 'ImageController@displayImage')->name('image.displayImage');

