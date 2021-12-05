@extends('templates.pagina-template')

@section('titulo', $jogo->nome)

@section('conteudo')

<div class="container-fluid conteudo-game-page" style='background-image: url("{{asset('img/fundo-game-page.png')}}"); background-repeat: no-repeat; background-position: top; padding-top: 190px; background-color: #e5e8f0;'>
    <div class="row col-12">
        <div id="img_principal" class="col-4">
            <img src='{{asset("img/jogos-img/$jogo->imagem_principal") }}' alt="" style="width: 300px; height: 400px;">
            <h5>Vantagens da Click in Play Store: </h5>
            <p>Faça pré-download do seu jogo</p>
            <p>Seja o primeiro a jogar no lançamento</p>
            <p>O melhor preço garantido</p>
            <p>Pagamento seguro</p>
        </div>
        <div class="col-4">
            <h2 class="text-white">{{ $jogo->nome }}</h2>
            <h4 class="text-white"><b>Categoria:</b>{{ $jogo->categoria }} </h4>
            <p class="text-white"><b>Data de lançamento:</b> {{ $jogo->created_at }} </p>
            <p class="descricao"><b>Descrição:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce metus neque, rutrum sed tempus eget, sagittis eget velit. Aenean laoreet, arcu quis tempor porttitor, ante massa porta tortor, quis placerat justo massa vitae mi. Fusce placerat ac ligula sed rutrum. Nam at pulvinar nunc, non luctus nisl. Ut non odio consequat eros varius lobortis eget non lectus. Curabitur fringilla pharetra cursus. Quisque tincidunt mollis lobortis. Sed ullamcorper dapibus diam sed varius. Curabitur varius risus non bibendum scelerisque. Etiam laoreet fringilla ipsum. Vivamus et ultrices arcu, eu pharetra lorem. Nunc malesuada rutrum luctus. Nam a erat eu est finibus sodales. Praesent sit amet velit purus. </p>
        </div>
        <div class="col-4">
            <div id="preco" class="py-5 text-center" style="background-color: white;">
                <h3> R$ {{ $jogo->preco }}</h3>
                <a href="#" class="btn btn-success py-4" style="width: 72%;">Compre</a>
            </div>
        </div>
    </div>
</div>

@endsection