@extends('templates.pagina-template')
@section('titulo', 'ClickNPlay')
@section('conteudo')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8 conteudo-1 pb-5 pt-5">   
            <img src="img/index/index-Image.jpg" alt="">
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 conteudo-1 pb-5 pt-5">   
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-12">   
                    <p>No Click'N'Play você você poderá conhecer diversos títulos dos mais variádos tipos! Se divirta e se emocione com mais de 500 jogos diferentes!</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-12 col-lg-12">   
                    <a href="/sobre" class="btn btn-info">Saiba mais</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row conteudo-2">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-2 mb-4">
            <h1>Nossos jogos:</h1>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 m-4">
        
        @foreach ($jogos as $jogo)
            <div class="col">
                <div class="card w-100">
                    <img src="img/jogos-img/{{ $jogo->imagem_principal }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $jogo->nome }}</h5>
                        <p class="card-text">Categoria: {{ $jogo->categoria }}</p>
                        <a href="/gamepage/{{ $jogo->id }}" class="btn btn-primary">Veja mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Preço: {{ $jogo->preco }}</small>
                    </div>
                </div>
            </div>
        @endforeach
        
      </div>
</div>
@endsection