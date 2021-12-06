@extends('templates.pagina-template')
@section('titulo', 'ClickNPlay')


@section('conteudo')
    @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ session('msg') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div id="conteudo-usuario">
        <a href="/jogos/create" class="btn btn-success mx-5 my-2">Novo Jogo</a>
        <h1 class="mx-5 my-2 text-white">Meus projetos:</h1>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jogos as $jogo)
                    <tr>
                        <th scope="row">{{ $jogo->id }}</th>
                        <td>{{ $jogo->nome }}</td>
                        <td>{{ $jogo->categoria }}</td>
                        <td>{{ $jogo->preco }}</td>
                        <td>
                            <a href="#" class="btn btn-info">Editar</a>
                            <a href="/jogos/delete/{{ $jogo->id }}" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
