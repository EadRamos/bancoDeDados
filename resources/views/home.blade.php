@extends('./base')

@section('sessao')
    <div class="divgrande divcenter color3">
        <div class="divmedio divcenter color1"><h2>Projeto bando de dados</h2></div>
        <br>
        <button class="color1 divcantois divpequeno aredon"><a href="{{route('criar.usuario')}}">Adicionar Usuario</a></button>
        <section style="width: 80%" class="color2">

            <table style="width: 90%; margin: auto;">
                <thead style="width: 100%">
                    <tr class="divpequeno color1 linha titulo font1">
                        <th>nome</th>
                        <th>CPF</th>
                        <th>Data</th>
                    </tr>
                </thead>

                <tbody style="width: 100%">
                    @foreach ($usuarios as $usuario )
                    <tr class="divpequeno color3 font2" style="color:white">
                        <th>{{$usuario->nome}}</th>
                        <th>{{$usuario->cpf}}</th>
                        <th>{{date('m-d-Y', strtotime($usuario->data))}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>

@endsection
