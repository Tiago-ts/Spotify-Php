<?php

 require_once 'usuario.php';
 $u = new Usuario;


?>
    <html lang="pt-br">
      <head>
        <title>Login - Spotify</title>
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

<body style="background: white;">
       <!-- Botão de Menu --> 
       <!-- &#9776 -->
    <header>
            <nav class="navbar navbar-expand-md navbar-white  navbar-transparente " style="background: black;">
                <div class="container">

                    <a href="index.php" class="navbar-brand ml-auto mr-auto"><img src="imagens/spotify.svg" width="142"></a>

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal" style="border: 1px solid rgba(255,255,255,0.5);">
                        <i class="fas fa-bars text-white"></i>
                    </button>

                   

                    </div>

                </div>

            </nav>
    </header>

     <section id="home" class="d-flex " style=" margin-top: -70px; margin-bottom: -50px;"> <!--inicio home -->

        <div class="container align-self-center" style=" "> <!-- inicio container -->

            <div class="row" style=""> <!-- inicio row -->

                <div class=" ml-auto mr-auto form-group " style=""><!-- home -->

                    <h4>Para continuar, faça login no Spotify.</h4><br>

						<form method="post" >

							<fieldset>

								<input class="form-control" placeholder="Digite sua Email"  type="email" name="email" required ><br>

							
								<input class="form-control" placeholder="Digite sua Senha"  type="password" name="senha" maxlength="8"><br>
								
								<button type="submit" class="btn btn-lg btn-custon btn-success " style="margin-left:140px; margin-bottom:25px;
								padding: 8px 30px;text-transform: none;">Entrar </button><br>

						
                            </fieldset>

                            <?php

								//verificar se clicou no botao

								if(isset($_POST['email'])) {

									$email = addslashes($_POST['email']);
									$senha = addslashes($_POST['senha']);

								//verificar se esta preenchido

									if (!empty($email) && !empty($senha)) {

										if ($u->msgErro == "") {

											$u->conectar("teste","localhost","root","");

											if ($u->login($email,$senha)) {
												header("location: musica.php");
												
											}else{
												?>
												<div class=" text-danger"><h6 class="text-center">Email ou senha incorreto!</h6></div>
												<?php
											}

										}else{
												?>
												<div class=" text-danger"><h6 class="text-center"><?php echo "Erro: ".$u->msgErro;?></h6></div>
												<?php

												
											
										}

									}else{
											?>
												<div class=" text-danger"><h6 class="text-center">Preencha todos os campos!</h6></div>
												<?php

									}
								}
?>   

                            

                            <h4 style="margin-top:25px; text-align: center;">Não tem conta?</h4><br>

                            <a href="cadastro.php" class="btn btn-lg btn-custon btn-primary " style="margin-left:50px;  padding-right:50px; padding-left: 50px; text-transform: none;">Inscreva-se no Spotify</a> 



						</form>


				</div> <!-- col-md-12 -->
            </div> <!--fim row -->
        </div> <!-- fim container -->
    </section> <!-- fim home -->

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