@extends('master.layout')
@section('content')

    <?php
        $routeTitle = "do/" . $data->id . "/titulo";
        $routeTags = "do/" . $data->id . "/tags";
        $routeAuthor = "do/" . $data->id . "/autor";
        $routeText = "do/" . $data->id . "/texto";
    ?>

        <div id="editOptions" class="options-manager" style="display: block; margin-top: 5%">
            <div class="text-center">
                <a href="{{route("manager")}}"><button type="button" id="logoutButton">Voltar</button></a>
            </div>
            <button class="btn-manager button-post" onclick="edit('editTitle')">Editar titulo</button>
            <button class="btn-manager button-post" onclick="edit('editTags')">Editar tags</button>
            <button class="btn-manager button-post" onclick="edit('editAuthor')">Editar autor</button>
            <button class="btn-manager button-post" onclick="edit('editText')">Editar texto</button>
        </div>
        <div class="col-md-12 text-center edit-form" style="display: none" id="editTitle">
            <form action=<?=$routeTitle?> method="get">
                <label for="newTitle">Novo titulo</label>
                <input type="newTitle" class="custom-form form-control" id="newTitle" name="new" value="<?= $data->titulo ?>">
                <button type="button" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: left" onclick="backEdit()">Voltar</button>
                <button type="submit" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: right">Enviar</button>
            </form>
        </div>

        <div class="col-md-12 text-center edit-form" style="display: none" id="editTags">
            <form action=<?=$routeTags?> method="get">
                <label for="newTags">Novas tags</label>
                <input type="newTags" class="custom-form form-control" id="newTags" name="new" value="<?= $data->tags ?>">
                <button type="button" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: left" onclick="backEdit()">Voltar</button>
                <button type="submit" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: right">Enviar</button>
            </form>
        </div>

        <div class="col-md-12 text-center edit-form" style="display: none" id="editAuthor">
            <form action=<?=$routeAuthor?> method="get">
                <label for="newAuthor">Novo autor</label>
                <input type="newAuthor" class="custom-form form-control" id="newAutor" name="new" value="<?= $data->autor ?>">
                <button type="button" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: left" onclick="backEdit()">Voltar</button>
                <button type="submit" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: right">Enviar</button>
            </form>
        </div>

        <div class="col-md-12 text-center edit-form" style="display: none; margin-top: 10%" id="editText">
            <form action=<?=$routeText?> method="get">
                <label for="newText">Novo texto</label>
                <textarea class="custom-form form-control" id="newText" name="new" rows="10"><?= $data->texto ?></textarea>
                <button type="button" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: left" onclick="backEdit()">Voltar</button>
                <button type="submit" class="btn btn-Post" style="width: 40%; margin-top: 3%; float: right">Enviar</button>
            </form>
        </div>

@endsection
