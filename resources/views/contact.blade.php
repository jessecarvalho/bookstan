@extends('master.layout')

@section('content')

<div class="container">
    <form method="get" action="{{route("sendMail")}}">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputName">Nome</label>
                <input type="name" class="custom-form form-control" id="inputName" name="name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">E-mail</label>
                <input type="email" class="custom-form form-control" id="inputEmail" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputTel">Telefone</label>
                <input type="tel" class="custom-form form-control" id="inputTel" name="tel">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputAssunto">Assunto</label>
                <input type="text" class="custom-form form-control" id="inputAssunto" name="assunto">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputMensagem">Mensagem</label> <br>
                <textarea rows="5" id="inputMensagem" name="mensagem"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-send">Enviar</button>
    </form>
</div>

@endsection
