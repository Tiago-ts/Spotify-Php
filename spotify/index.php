<?php
session_start();
?>
<html lang="pt-br">
  <head>
    <title>Música para todos - Spotify</title>
    <link rel="icon" href="imagens/favicon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap CSS na pasta-->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- Bootstrap CSS na internet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--HTML5Shiv -->
    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>
   <!-- Botão de Menu --> 
   <!-- &#9776 -->
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
            <div class="container">

                <a href="index.php" class="navbar-brand"><img src="imagens/spotify.svg" width="142"></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal" style="border: 1px solid rgba(255,255,255,0.5);">
                    <i class="fas fa-bars text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="" class="nav-link "><strong>Premium</strong></a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link ml-3"><strong>Ajuda</strong></a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link ml-3"><strong>Baixar</strong></a>

                        </li>

                        <li class="nav-item divisor"> </li>                

                        <li class="nav-item">
                            <a href="cadastro.php" class="btn btn-outline-light ml-3"><strong>Inscrever-se</strong></a>
                        </li>

                        <li class="nav-item">
                            <a href= "login.php" class="btn btn-outline-light ml-3"><strong>Entrar</strong></a>
                        </li>

                    </ul>

                </div>

            </div>

        </nav>
    </header>

    <section id="home" class="d-flex"> <!--inicio home -->
        <div class="container align-self-center"> <!-- inicio container -->
            <div class="row"> <!-- inicio row -->
                <div class="col-md-12 capa"> <!-- home -->

                    <div id="carousel-spotify" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner"><!-- inner -->

                            <div class="carousel-item active">

                                <h1>Música para todos.</h1>

                                <a href="" class="btn btn-lg btn-custon btn-roxo">APROVEITE O SPOTIFY FREE</a>

                                <a href="" class="btn btn-lg btn-custon btn-branco">OBTer SPOTIFY PREMIUM</a>

                            </div>

                             <div class="carousel-item ">

                                <h1>As melhores músicas</h1>
                                
                                <a href="login.php" class="btn btn-lg btn-custon btn-branco"><i class="fas fa-music"></i> Ouça agora</a>

                            </div>

                        </div><!--fim inner -->
                        <!-- controles -->
                        <a href="#carousel-spotify" class="carousel-control-prev" data-slide="prev"> <i class="fas fa-angle-left fa-3x"></i></a>

                        <a href="#carousel-spotify" class="carousel-control-next" data-slide="next"> <i class="fas fa-angle-right fa-3x"></i></a>

                    </div>

                </div> <!-- col-md-12 -->

            </div> <!--fim row -->

        </div> <!-- fim container -->

    </section> <!-- fim home -->

    <section id="servicos">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="row albuns">

                        <div class="col-md-6">

                           <img src="imagens/img1.jpg" class="img-fluid">

                        </div>

                         <div class="col-md-6">

                            <img src="imagens/img2.jpg" class="img-fluid">

                        </div>

                    </div>


                    <div class="row albuns">

                        <div class="col-md-6">

                           <img src="imagens/img3.jpg" class="img-fluid">

                        </div>

                         <div class="col-md-6">

                            <img src="imagens/img4.jpg" class="img-fluid">

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <h2>O que o Spotify tem?</h2>
                    <h3>Músicas</h3>
                    <p>O Spotify tem milhões de músicas. Música para todos os gostos e de todas as partes do mundo, podcasts e listas personalizadas, tudo com o Spotify, onde você estiver.</p>

                    <h3>Playlist</h3>
                    <p>As playlists são simplesmente coleções de músicas. Você pode criar as suas e compartilhá-las, e também pode curtir milhões de outras playlists criadas pelo Spotify, por artistas e por outros ouvintes do mundo inteiro.</p>
                    

                    <h3>Novos lançamentos</h3>
                    <p>Você está interessado nas novidades do mundo da música, a categoria de “Lançamentos” na tela de navegação do Spotify mostra tudo</p>
                    

                </div>
            </div>
        </div>
    </section>


    <section id="recursos">

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <h2>Fácil</h2>

                    <h3>Buscar</h3>

                    <p>Música para todos os gostos e de todas as partes do mundo, podcasts e listas personalizadas, tudo com o Spotify, onde você estiver.</p>

                    <h3>Navegar</h3>
                    <p>Spotify, por artistas e por outros ouvintes do mundo inteiro.</p>
                    

                    <h3>Descobrir</h3>
                    <p>Você está interessado nas novidades do mundo da música.</p>
                    
                </div>

                <div class="col-md-8">

                    <div class="row rotacionar">

                        <div class="col-md-6">

                            <img src="imagens/iphone1.png" class="img-fluid d-none d-md-block"> 

                        </div>

                        <div class="col-md-6">

                             <img src="imagens/iphone2.png" class="img-fluid d-none d-md-block"> 

                        </div>
                        
                    </div>

                </div>

            </div>

        </div>
    </section>


    <footer>
        <div class="container">

            <div class="row">

                <div class="col-md-2">

                    <img src="imagens/spotify.svg" width="142">

                </div>

                <div class="col-md-2">

                    <h4>Company</h4>

                    <ul class="navbar-nav">

                        <li>
                            <a href="">Sobre</a>
                        </li>
                        <li>
                            <a href="">Emprego</a>
                        </li>
                        <li>
                            <a href="">Imprensa</a>
                        </li>
                        <li>
                            <a href="">Novidade</a>
                        </li>

                    </ul>
                </div>


                <div class="col-md-2">

                    <h4>Comunidade</h4>

                    <ul  class="navbar-nav">
                        <li>
                            <a href="">Artista</a>
                        </li>
                        <li>
                            <a href="">Desenvolvedores</a>
                        </li>
                        <li>
                            <a href="">Marcas</a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-2">

                    <h4>Links úteis</h4>

                     <ul  class="navbar-nav">
                        <li>
                            <a href="">Ajuda</a>
                        </li>
                        <li>
                            <a href="">Presente</a>
                        </li>
                        <li>
                            <a href="">Player da web</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-4">

                    <h4>Redes sociais</h4>

                      <ul  class="navbar-nav">

                        <li class="flo">
                            
                            <a href="" ><img src="imagens/facebook.png"></a>
                       
                            <a href="" ><img src="imagens/twitter.png"></a>
                       
                            <a href=""><img src="imagens/instagram.png"></a>
                        </li>
                        
                    </ul>

                </div>

            </div>

        </div>

    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>