@extends('master.layout')

@section("content")

    <div class="about">
        <i class="icofont icofont-sad"></i>
        <h1 style="margin-top: 2%">Não encontramos nenhum livro que se encaixa no seu pedido.</h1>
        <h2 style="margin-top: 2%">
            Tente novamente com algumas mudanças e evite pedidos contraditórios, exemplo: AutoAjuda, Para Shippar, Parte corações.
        </h2>
        <a href="{{ route("discover") }}"><button type="button" class="btn-discover btn btn-light" style="margin-top: 2%; border: none">Tentar novamente!</button></a>
    </div>


@endsection

