@extends('./base')

@section('sessao')
    <div>
        <div><h2>Cadastro</h2></div>
        <br>
        @isset($erro)
            <div>
                <p>{{$erro}}</p>
            </div>
        @endisset

        <form action="{{route('adicionar.usuario')}}" method="POST">
            @csrf
            CPF: <input type="text" name="cpf"><br>
            Nome: <input type="text" name="nome"><br>
            Data: <input type="date" name="data"><br>
            <input type="submit" >
        </form>
    </div>

@endsection
