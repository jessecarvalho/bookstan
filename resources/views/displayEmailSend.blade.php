@extends('master.layout')

@section("content")

    <div class="about">
        <i class="icofont icofont-email"></i>
        <h1>Mensagem enviada com sucesso!</h1>
        <h2>
            Leremos seu envio e caso seja necessário retornaremos a mensagem no email informado. Muito obrigado!
        </h2>
        <a href="{{ route("welcome") }}"><button type="button" class="btn-discover btn btn-light">Voltar ao home</button></a>
    </div>


@endsection
