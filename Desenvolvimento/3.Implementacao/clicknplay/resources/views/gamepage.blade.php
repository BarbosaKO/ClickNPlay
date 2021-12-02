@extends('templates.pagina-template')
@section('titulo', 'ClickNPlay | Gamepage')
@section('conteudo')
<div class="container-fluid">
        
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <H1>Counter-Strike</H1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8">
            <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/cs1.6-Page/cs_img1-md.jpg" class="rounded mx-auto d-block carrossel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/cs1.6-Page/cs_img2-md.jpg" class="rounded mx-auto d-block carrossel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/cs1.6-Page/cs_img3-md.jpg" class="rounded mx-auto d-block carrossel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/cs1.6-Page/cs_img4-md.jpg" class="rounded mx-auto d-block carrossel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/cs1.6-Page/cs_img5-md.jpg" class="rounded mx-auto d-block carrossel" alt="...">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card bg-dark text-white">
                <img src="./img/cs1.6-Page/cs_main-md.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Counter-Strike</h5>
                    <h6 class="card-title">Desenvolvedor: <a href="https://www.valvesoftware.com/pt-br/">Valve Corporation</a></h6>
                    <p class="card-text">Jogue o jogo de ação número 1 no mundo. Junte-se a uma guerra incrivelmente realística contra o terrorismo neste jogo baseado em equipes.</p>
                </div>
                
                <div class="card-body">
                    <a href="https://store.steampowered.com/app/10/CounterStrike/" class="card-link btn btn-info">Download</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h3>Jogos como este:</h3>
        </div>
    </div>
        
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card bg-dark text-white mb-3" style="max-width: 480px">
                <a href="#" class="text-underline-hover ms-3"><h5 class="card-title pt-3">Rocket League</h5></a>
                
                <div class="row g-0">
                    <div class="d-flex flex-wrap align-items-center col-md-6">
                        <img src="./img/Thumbs/rocket-league-1.jpg" class="img-fluid rounded center d-block" alt="...">
                    </div>

                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">Rocket League tem de um a quatro jogadores designados para cada uma das duas equipes, usando veículos movidos a foguete para acertar o gol do adversário e marcar pontos ao longo de uma partida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card bg-dark text-white mb-3" style="max-width: 480px">
                <a href="#" class="text-underline-hover ms-3"><h5 class="card-title pt-3">Far Cry 5</h5></a>
                
                <div class="row g-0">
                    <div class="d-flex flex-wrap align-items-center col-md-6">
                        <img src="./img/Thumbs/far-cry5-1.jpg" class="img-fluid rounded center d-block" alt="...">
                    </div>

                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">Bem-vindo a Hope County, Montana, terra dos livres e valentes, mas também o lar de um culto apocalíptico fanático, conhecido como O Projeto em Eden’s Gate, que está ameaçando a liberdade da comunidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card bg-dark text-white mb-3" style="max-width: 480px">
                <a href="#" class="text-underline-hover ms-3"><h5 class="card-title pt-3">Deep Rock Galactic</h5></a>
                
                <div class="row g-0">
                    <div class="d-flex flex-wrap align-items-center col-md-6">
                        <img src="./img/Thumbs/Deep-Rock-Galactic-1.jpg" class="img-fluid rounded center d-block" alt="...">
                    </div>

                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">Deep Rock Galactic é um FPS de co-op de ficção científica com Anões durões, ambientes 100% destrutíveis, grutas processualmente geradas e inúmeras hordas de monstros alienígenas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection