<?php
    session_start();
    //print_r($_SESSION);
    
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location: login.php');

    }

    $logado = $_SESSION['usuario'];


?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESE</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="./img/logo1.png" alt="logo" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn">
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>

            <ul class="menu">
                <li><a href="#" class="active">Inicio</a></li>
                <li><a href="#">Filmes</a></li>
                <li><a href="http://localhost/PROJETO_SESE/tela_news/">Noticias</a></li>
                <li><a href="#">Series</a></li>
                <li><a href="#">Sobre nós</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>SESE <span>NETWORK</span></h1>
            <p class="details">Vocês estão prontas, crianças? Estamos capitão!!!</p>
            <div class="header-btns">
                <a href="#" class="header-btn">Filmes</a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="about-image">
            <img src="./img/about1.png">
        </div>
        <div class="about-text">
            <h2>Homem-aranha: Sem volta para casa (2021)</h2>
            <h3>O aranhaverso finalmente estará entre nós...</h3>
            <p>Em Homem-Aranha: Sem Volta para Casa, Peter Parker (Tom Holland) precisará lidar com as consequências da sua identidade como aracnídeo ter sido revelada pela reportagem do Clarim Diário. Incapaz de separar sua vida normal das aventuras de ser um super-herói, Parker pede ao Doutor Estranho (Benedict Cumberbatch) para que todos esqueçam sua verdeira identidade. Entretanto, o feitiço não sai como planejado e a situação torna-se ainda mais perigosa, forçando-o a descobrir o que realmente significa ser o Homem-Aranha.</p>
            <button onclick="window.location.href='../telas_novas/homemAranha.html'" style="cursor: pointer;">Saiba Mais</button>
        </div>
    </section>

    <section class="watch">

        <div class="main-heading">
            <h1>Conheça mais sobre outros <span>FILMES</span></h1>
            <p class="details">Velozes e furiosos 9, Venom: Tempo de carnificina, Shang-chi e a lenda dos dez aneis, Viuva Negra, Invocação do mal: A ordem do demonio...</p>
                <br>
            <p class="details"> SABIA MAIS SOBRE OS MAIORES FILMES DE 2021 <p>
            <div class="header-btns">
                <a href="#" class="header-btn">Filmes</a>
            </div>
        </div>
    </section>

    <section id="movies">
        <div class="m-heading">
            <h1>PRINCIPAIS FILMES DE 2021</h1>
            <p>Se liga no que teve de melhor nesse ano de 2021...</p>
        </div>
        <div class="movie-container">
            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/velozes.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/velozes.html" class="header-btn">Saiba Mais</a>
                </div>
            </div>

            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/viuva.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/viuva.html" class="header-btn">Saiba Mais</a>
                </div>

            </div>
            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/double.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/double.html" class="header-btn">Saiba Mais</a>
                </div>
            </div>

            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/spac.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/jam.html" class="header-btn">Saiba Mais</a>
                </div>
            </div>



        </div>

        <div class="movie-container">
            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/shang.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/shang.html" class="header-btn">Saiba Mais</a>
                </div>
            </div>
            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/duna.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/duna.html" class="header-btn">Saiba Mais</a>
                </div>
            </div>
            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/eternos.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/eternos.html" class="header-btn">Saiba Mais</a>
                </div>
            </div>
            <div class="movie-box">
                <div class="movie-image">
                    <img src="./img/venom.jpg">
                </div>
                <div class="movie-call">
                    <a href="../telas_novas/venom.html" class="header-btn">Saiba Mais</a>
                </div>
            </div>



        </div>

    </section>

    <section id="subscriber">
        <h3>Inscrave-se para receberem as novidades</h3>
        <div class="subscriber-input">
        <input type="email" placeholder="example@gmail.com">
        <a href="#" >Cadastrar</a>
        </div>    
    </section>

</body>


</html>