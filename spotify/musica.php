
<?php

	session_start();

	if (!isset($_SESSION['id'])) {
		header("location: login.php");
		exit();
	}

?>

  <html lang="pt-br">
      <head>
        <title>Bem vindo - Suas músicas</title>
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

         <style type="text/css">
          #audio{

                width: 200px;
                height: 20px;
            }
        </style>


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

<body id="entrar" style="background: white;">
       <!-- Botão de Menu --> 
       <!-- &#9776 -->
    <header>
            <nav class="navbar navbar-expand-md navbar-white fixed-top navbar-transparente " style="background: black;">
                <div class="container">

                    <a href="index.php" class="navbar-brand"><img src="imagens/spotify.svg" width="142"></a>

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal" style="border: 1px solid rgba(255,255,255,0.5);">
                        <i class="fas fa-bars text-white"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="nav-principal">

                        <ul class="navbar-nav ml-auto">

                            <!--<li class="nav-item">
                                <a href="" class="nav-link "><strong>Premium</strong></a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link ml-3"><strong>Ajuda</strong></a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link ml-3"><strong>Baixar</strong></a>

                            </li>

                            <li class="nav-item divisor"> </li>   -->             

                            <li class="nav-item">
                                <a href="musica.php" class="btn btn-outline-light ml-3"><strong>Editar</strong></a>
                            </li>

                            <li class="nav-item">
                                <a href="sair.php" class="btn btn-outline-light ml-3"><strong>Sair</strong></a>
                            </li>

                        </ul>

                    </div>

                </div>

            </nav>
    </header>

<br><br><br><br>

<h2 class="text-success">Bem vindo! A página de músicas</h2>



    

</div>

 <h4 class="text-center  text-success p-2">MPB</h4><br>

<div class="table-responsive">

<table class="table  table-dark">

    <thead class="text-success text-center">

        <th>Faixa</th>
        <th>Autor</th>
        <th>Música</th>
        <th>MP3</th>
        <th>Play</th>

    </thead>

    <tbody class="text-center">

        <tr>
            <td>1</td>
            <td>O rappa</td>
            <td>Homem amarelo</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/04 Homem Amarelo.mp3" type="audio/mpeg"/></audio></td>
        </tr>

         <tr>
            <td>2</td>
            <td>O rappa</td>
            <td>Lado B Lado A</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls"id="audio" ><source src="musicas/05 Lado B Lado A.mp3" type="audio/mpeg"/></audio></td>
        </tr>

         <tr>
            <td>3</td>
            <td>O rappa</td>
            <td>Rodo Cotidiano</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls"id="audio" ><source src="musicas/08 Rodo Cotidiano.mp3" type="audio/mpeg"/></audio></td>
        </tr>

         <tr>
            <td>4</td>
            <td>O rappa</td>
            <td>Pescador de Ilusões</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls"id="audio" ><source src="musicas/10 Pescador de Ilusões.mp3" type="audio/mpeg"/></audio></td>
        </tr>

    </tbody>
</table>

</div>

 <h4 class="text-center  text-success p-2">Reggae</h4><br>

 <div class="table-responsive">

<table class="table  table-dark">

    <thead class="text-success text-center">

        <th>Faixa</th>
        <th>Autor</th>
        <th>Música</th>
        <th>MP3</th>
        <th>Play</th>

    </thead>

    <tbody class="text-center">

        <tr>
            <td>1</td>
            <td>Edson gomes</td>
            <td>Adultério</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Adultério.mp3" type="audio/mpeg"/></audio></td>
        </tr>

         <tr>
            <td>2</td>
            <td>Edson gomes</td>
            <td>Apocalipse</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Apocalipse.mp3" type="audio/mpeg"/></audio></td>
        </tr>

        <tr>
            <td>3</td>
            <td>Edson gomes</td>
            <td>Babylon Vampire</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Babylon Vampire.mp3" type="audio/mpeg"/></audio></td>
        </tr>

        <tr>
            <td>4</td>
            <td>Edson gomes</td>
            <td>Campo de Batalha</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Campo de Batalha.mp3" type="audio/mpeg"/></audio></td>
        </tr>

        <tr>
            <td>5</td>
            <td>Edson gomes</td>
            <td>Criminalidade</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Criminalidade.mp3" type="audio/mpeg"/></audio></td>
        </tr>


        <tr>
            <td>6</td>
            <td>Edson gomes</td>
            <td>Fala So De Amor</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Fala So De Amor.mp3" type="audio/mpeg"/></audio></td>
        </tr>

         <tr>
            <td>7</td>
            <td>Edson gomes</td>
            <td>Malandrinha</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Malandrinha.mp3" type="audio/mpeg"/></audio></td>
        </tr>

        <tr>
            <td>8</td>
            <td>Edson gomes</td>
            <td>Babylon Vampire</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Babylon Vampire.mp3" type="audio/mpeg"/></audio></td>
        </tr>

        <tr>
            <td>9</td>
            <td>Edson gomes</td>
            <td>Meus Direitos</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Meus Direitos.mp3" type="audio/mpeg"/></audio></td>
        </tr>

        <tr>
            <td>10</td>
            <td>Edson gomes</td>
            <td>Sistema Do Vampiro</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/Sistema Do Vampiro.mp3" type="audio/mpeg"/></audio></td>
        </tr>

    </tbody>
</table>




<h4 class="text-center  text-success p-2">Rock</h4><br>
    
<div class="table-responsive">

<table class="table  table-dark">

    <thead class="text-success text-center">

        <th>Faixa</th>
        <th>Autor</th>
        <th>Música</th>
        <th>MP3</th>
        <th>Play</th>

    </thead>

    <tbody class="text-center">

        <tr>
            <td>1</td>
            <td>50cent</td>
            <td>Candy shop</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/01.mp3" type="audio/mpeg"/></audio></td>
        </tr>

         <tr>
            <td>2</td>
            <td>Akon</td>
            <td>Snack</td>
            <td><i class="fas fa-music"></td>
            <td><audio controls="controls" id="audio"><source src="musicas/01.mp3" type="audio/mpeg"/></audio></td>
        </tr>

    </tbody>
</table>

    


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

