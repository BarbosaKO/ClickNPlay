@extends('templates.pagina-template')
@section('titulo', 'ClickNPlay | Catálogo')
@section('conteudo')
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 px-3 py-4" id="conteudo">
                <div id="carouselExampleCaptions" class="carousel slide backgroundPrimario" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/index/destaque1.jpg" class="d-block mx-auto" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Need For Speed Hot Pursuit</h5>
                          <p>Jogo de Corrida focado em Carros</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/index/destaque2.jpg" class="d-block mx-auto" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Apex Legends</h5>
                          <p>Jogo de Tiro em 1° Pessoa</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/index/destaque3.jpg" class="d-block mx-auto" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>F1 2021</h5>
                          <p>Jogo de Corrida de Formula 1</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 titulos  mt-5">
                    <h2>Destaque</h2>
                </div>

                    <div id="carouselDestaque" class="carousel slide">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">Need For Speed</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Apex Legends</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">F1 2021</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque4.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">The Sims 4</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Battlefield 2042</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">Need For Speed</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Apex Legends</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">F1 2021</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque4.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">The Sims 4</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Battlefield 2042</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">Need For Speed</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Apex Legends</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">F1 2021</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque4.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">The Sims 4</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Battlefield 2042</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestaque" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDestaque" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                <div class="col-sm-12 col-md-12 col-lg-12 titulos mt-5">
                    <h2>Ação</h2>
                </div>

                    <div id="carouselAcao" class="carousel slide">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">Apex Legends</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Battlefield 2042</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">F1 2021</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Apex Legends</h5>
                                            <p class="card-text">R$ 70,00</p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Battlefield 2042</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">F1 2021</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque2.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Apex Legends</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Battlefield 2042</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 3</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAcao" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselAcao" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                <div class="col-sm-12 col-md-12 col-lg-12 titulos  mt-5">
                    <h2>Aventura</h2>
                </div>

                    <div id="carouselAventura" class="carousel slide">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card img-fluid" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 3</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 3</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 3</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAventura" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselAventura" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                <div class="col-sm-12 col-md-12 col-lg-12 titulos mt-5">
                    <h2>Indie</h2>
                </div>

                    <div id="carouselIndie" class="carousel slide">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 3</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 3</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="fileiraJogos">
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque3.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 3</h5>
                                            <p class="card-text">R$ 90,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque1.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body ">
                                            <h5 class="card-title">jogo 1</h5>
                                            <p class="card-text">R$ 70,00 </p>
                                        </div>
                                    </div>
                                    <div class="card d-inline-block">
                                        <img src="img/index/destaque5.jpg" class="card-img-top imagem-card" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">jogo 2</h5>
                                            <p class="card-text">R$ 100,00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndie" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndie" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>

            </div>
        </div>
    </div>
@endsection