@extends('master.layout')
@section('content')
    <?php
    echo "<div id='editPost'>";

    echo "<div class='text-center' style='margin: 2%'>";
    echo "<a href='". route('manager') ."'><button type='button' class='btn-backedt btn btn-light' style='margin: -10% 0'>Voltar</button></a>";
    echo "</div>";
    foreach ($data as $post){
        $routeEdit = "edit/" . $post->id;
        $routeDelete = "delete/" . $post->id;
        echo "<div class='container-editBlog'>";
        echo "<h1>" . $post->titulo . "</h1>";
        echo "<h2>" . $post->autor . "</h1>";
        echo "<h3>" . substr($post->created_at, 0, 10) . "<h3>";
        echo "<a href='" . $routeEdit . "'><button type='button' class='btn-discover btn btn-light btn-edit'>Editar </button></a>";
        echo "<a href='" . $routeDelete . "'><button type='button' class='btn-discover btn btn-light btn-warning btn-edit'>Excluir </button></a>";
        echo "</div>";
    }

    echo "<div class='row align-items-center justify-content-center' id='pagination'>";
    echo  $data->links();
    echo "</div>";
    echo "</div>";

    ?>
@endsection






