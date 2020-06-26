@extends('master.layout')

@section("content")

    <div class="main">
        <h1>BOOKSTAN</h1>
        <h2>Descubra um novo livro</h2>
        <i class="icofont icofont-read-book"></i> <br>
        <a href="{{route('discover')}}"><button type="button" class="btn-discover btn btn-light">Descobrir</button></a>
        <br>
    </div>

@endsection
