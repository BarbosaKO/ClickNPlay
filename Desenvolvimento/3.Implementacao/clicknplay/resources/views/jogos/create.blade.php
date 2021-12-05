@extends('templates.pagina-template')
@section('titulo', 'Criar novo jogo')


@section('conteudo')
    <h1 class="ml-4">Crie um novo jogo</h1>
    
    <div id="jogo-create-container" class="col-6 offset-3 mt-5 mb-5">
        <form action="/jogos" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3">
              <label for="nome">Nome:</label>
              <input type="text" name="nome" id="nome" class="form-control" placeholder="nome..">              
            </div>

            <div class="form-group my-3">
                <label for="categoria">Categoria:</label>
                <select class="form-select" name="categoria" id="categoria">
                    <option selected>Selecione uma categoria..</option>
                    <option value="Acao">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Casual">Casual</option>
                    <option value="Indie">Indie</option>
                    <option value="MMO">MMO</option>
                    <option value="RPG">RPG</option>
                    <option value="FPS">FPS</option>
                    <option value="MOBA">MOBA</option>
                    <option value="Esporte">Esporte</option>
                    <option value="Terror">Terror</option>
                    <!-- <option value=""></option> -->
                </select>              
            </div>

            <div class="form-group my-3">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" min="0.00" name="preco" id="preco" class="form-control" placeholder="nome..">              
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control from-control-file imagem_principal" name="imagem_principal" id="imagem_principal">
                <label class="input-group-text" for="imagem_principal">Imagem do jogo</label>
            </div>

            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
            
            <input type="submit" class="btn btn-success" value="Adicionar Jogo">
        </form>
    </div>
@endsection