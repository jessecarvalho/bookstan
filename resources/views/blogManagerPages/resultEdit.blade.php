@extends('master.layout')

@section("content")

    <?php
        echo '<div class="about">';
        echo '<i class="icofont ' . $data[0] . '"></i>';
        echo '<h1 style="margin-top: 2%">' . $data[1] . '</h1>';
        echo '<a href="' . route('manager') . '"><button type="button" class="btn-discover btn btn-light" style="margin-top: 2%; border: none">Voltar para controle</button></a>';
        echo '</div>'
    ?>

@endsection

