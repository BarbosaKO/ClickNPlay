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
                    <button class="btn btn-info"><a href="gamepage">Saiba mais</a></button>
                </div>
            </div>
        </div>

    </div>

    <div class="row conteudo-2">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-2 mb-4">
            <h1>Jogos em destaque</h1>
        </div>
    </div>

    <div class="row conteudo-2">
        <div class="col-sm-12 col-md-12 col-lg-12">
            
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 destaques ">
                    <a href="#"><img src="img/index/destaque1.jpg" alt=""></a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 destaques">
                    <a href="#"><img src="img/index/destaque2.jpg" alt=""></a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 destaques">
                    <a href="#"><img src="img/index/destaque3.jpg" alt=""></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 destaques">
                    <a href="#"><img src="img/index/destaque4.jpg" alt=""></a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 destaques">
                    <a href="#"><img src="img/index/destaque5.jpg" alt=""></a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 destaques">
                    <a href="#"><img src="img/index/destaque6.jpg" alt=""></a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection