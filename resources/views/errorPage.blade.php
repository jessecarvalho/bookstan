@extends('master.layout')

@section("content")

    <?php
    echo '<div class="error text-center">';
    echo '<i class="icofont ' . $data[0] . '"></i>';
    echo '<h1>Oooops, pane no sistema!</h1>';
    echo '<h2>Por favor, envie as informações abaixo para nossos desenvolvedores para que possamos corrigir o problema o mais rápido possível.</h2>';
    echo '<h3>Error: ' . $data[1] . '</h3>';
    echo '<h3>Code: ' . $data[2] . '</h3>';
    echo '<h3>Line: ' . $data[3] . '</h3>';
    echo '<h3>File: ' . $data[4] . '</h3>';
    echo '<a href="' . route('contact') . '"><button type="button" class="btn-discover btn btn-light" style="margin-top: 2%; border: none">Entrar em contato</button></a>';
    echo '</div>'
    ?>

@endsection

