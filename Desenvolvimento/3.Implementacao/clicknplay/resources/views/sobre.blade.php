@extends('templates.pagina-template')
@section('titulo', 'ClickNPlay | Sobre')
@section('conteudo')
<div class="container-fluid">
            <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12" id="conteudo">
                        
                        <div class="row">
                              <section class="col-sm-12 col-md-12 col-lg-12" id="sobre-nos">
                                    <div class="col-sm-6 col-md-8 col-lg-8 section-conteudo mx-auto">
                                          <h1 id="titulo"><span id="mini">Sobre nós </span><br>
                                          <span id="nome">Click'N'Play</span></h1>
                                          <h2 id="subtitulo">
                                                A plataforma perfeita para comprar jogos e publicar os seus próprios jogos.
                                          </h2>
                                    </div>
                              </section>
                        </div>

                        <div class="row">
                              <section class="col-sm-12 col-md-12 col-lg-12" id="jogos">
                                    <div class="col-sm-6 col-md-8 col-lg-8 section-conteudo mx-auto px-4">
                                          <article class="texto d-inline-block">
                                                <h2>Compre e baixe jogos instantaneamente</h2>
                                                <p>A plataforma conta com mais de 2 jogos. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci similique harum architecto perferendis reiciendis in doloribus quasi quos repellat fugit excepturi eos libero error repudiandae laboriosam ipsa delectus, id omnis!</p>
                                          </article>
                                          <picture>
                                                <source media="(max-width: 420px)" srcset="img/sobre-page/tela-catalogo-sm.png" type="image/png">
                                                <img class="rounded float-lg-end mx-auto d-block" src="img/sobre-page/tela-catalogo-md.png" alt="">
                                          </picture>
                                    </div>
                              
                              </section>
                        </div>

                        <div class="row">
                              <section class="col-sm-12 col-md-12 col-lg-12" id="publique">
                                    <div class="col-sm-6 col-md-8 col-lg-8 section-conteudo mx-auto px-4">
                                          <article class="texto d-inline-block">
                                                <h2>Publique seus jogos de modo fácil e rápido.</h2>
                                                <p>Nossa plataforma também conta com uma página onde você pode publicar os seus jogos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate beatae quibusdam ipsam debitis accusamus ducimus a aspernatur eligendi quod, porro architecto facere nihil similique? Assumenda similique amet neque ut?</p>
                                          </article>
                                          <picture>
                                                <source media="(max-width: 420px)" srcset="img/sobre-page/tela-catalogo-sm.png" type="image/png">
                                                <img class="rounded float-lg-start mx-auto d-block" src="img/sobre-page/tela-catalogo-md.png" alt="">
                                          </picture>
                                          
                                    </div>
                              </section>
                        </div>
                  </div>
            </div>
      </div>
@endsection