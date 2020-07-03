@extends('blogManagerPages.newPost')
@extends("master.layout")
@section("content")

    <div id="options" class="options-manager" style="display: block">
        <div class="text-center">
            <a href="{{route("manager.logout")}}"><button type="button" id="logoutButton">Sair da conta</button></a>
        </div>
        <button class="btn-manager button-post" onclick="addNewPost()">Adicionar nova postagem</button>
        <a href="{{route("manager.listEdit")}}"><button class="btn-manager button-post">Editar post</button></a>
        <a href="{{route("manager.listEdit")}}"><button class="btn-manager button-post">Deletar post</button></a>
    </div>

@endsection
