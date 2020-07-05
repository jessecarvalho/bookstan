@extends('master.layout')
@section('content')
<?php

    echo '<div class="container-InfoBook">';
        echo '<img src="http://localhost/Bookstan/public/img/books/' . $data->img . '.jpg">';
        echo '<h1>' . $data->nome . '</h1>';
        echo '<h2>' . $data->autor . '</h2>';
        echo '<h3>' . $data->genero . '</h3>';
        echo '<h3>Livro indicado para o publico: ' . $data->publico . '</h3>';
        echo '<h3>Tags: ' . $data->tags . '</h3>';
        echo '<h3>Ano de públicação: ' . $data->anoPublicado . '</h3>';
        echo '<h3>' . $data->livrosSaga . ' Livros públicados</h3>';
        echo '<h4>' . $data->sinopse . '</h4>';
        echo '<div class="text-center">';
        echo '<a href="'. route('similiarity') .'"> <button type="button" class="btn btn-success">Gostei</button></a>';
        echo '<a href="'. route('similiarity') .'"> <button type="button" class="btn btn-danger">Não gostei</button></a>';
        echo '</div>';

    echo '</div>';

?>


@endsection
