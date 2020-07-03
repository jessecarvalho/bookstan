@extends('master.layout')
@section('content')

    <div class="loginForm">
        <form class="px-4 py-3" method="post" action="{{route("manager.tryLogin")}}">
            @csrf
            @if($errors->all())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email Administrativo</label>
                <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

@endsection
