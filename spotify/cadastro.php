

<?php
 require_once 'usuario.php';
 $u = new Usuario;


?>
    <html lang="pt-br">
      <head>
        <title>Inscrever-se - Spotify</title>
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

<body id="entrar" style="background: white;">
       <!-- Botão de Menu --> 
       <!-- &#9776 -->
    <header>
            <nav class="navbar navbar-expand-md navbar-white  navbar-transparente " style="background: black;">
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
                                <a href="login.php" class="btn btn-outline-light ml-3"><strong>Entrar</strong></a>
                               
                               
                            </li>

                        </ul>

                    </div>

                </div>

            </nav>
    </header>

     <section id="home" class=" " style=" margin-bottom: -100px; "> <!--inicio home -->

        <div class="container align-self-center" style=" margin-bottom: -100px; "> <!-- inicio container -->
            <div class="row" style=""> <!-- inicio row -->

                <div class="ml-auto mr-auto mt-3 form-group" style=" margin-bottom: -100px; "> <!-- home -->
                    <div>
                         <a href="https://pt-br.facebook.com/" class=" btn btn-lg btn-custon btn-primary " style="text-transform: none; margin-left: 60px;">Inscreva-se com facebook</a>
                    </div>

                    

                    <h6 style="padding-bottom:0px; margin-top: 0px; text-align: center;">ou</h6>

                            <h5 style="padding-bottom:20px; text-align: center;">Inscrever-se com seu endereço de e-mail</h5>


						<form method="post">
							
							<input class="form-control"  type="text" name="nome" placeholder="Seu nome"maxlength="50" required><br>

							
							<input class="form-control" type="email" name="email" placeholder="Seu E-mail" maxlength="60"required ><br>

							
							<input class="form-control" type="password" name="senha" placeholder="Senha" maxlength="8" required ><br>

							
							<input class="form-control" type="password" name="confsenha" placeholder="Confirmar senha" maxlength="8" required><br>

                            <?php

//verificar se clicou no botao

if(isset($_POST['nome'])) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confsenha = addslashes($_POST['confsenha']);


//verificar se esta preenchido


    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($confsenha)) {
        
        $u->conectar("teste","localhost","root","");

        if ($u->msgErro == "") {

            if ($senha == $confsenha) {

                if ($u->cadastrar($nome,$email,$senha)) {

                    ?>
                    <div class=" text-success"><h6 class="text-center">Cadastrado com sucesso! Acesse para entrar!</h6></div>
                    <?php

                    
                }else{

                     ?>
                    <div class=" text-danger"><h6 class="text-center">Email já cadastrado!</h6></div>
                    <?php

            
                }
                

            } else {

                    ?>
                    <div class=" text-danger"><h6 class="text-center">Senha e confirmar senha não corresponde!</h6></div>
                    <?php

              
            }
            

        }else{

             ?>
             <div class=" text-danger"><h6 class="text-center"><?php echo "Erro: ".$u->msgErro;?></h6></div>
             <?php


        }

    } else {

            ?>
            <div class=" text-danger"><h6 class="text-center">Preencha todos os campos</h6></div>
            <?php

        
    }
    
}

?>



							<button type="submit" class="btn btn-lg btn-custon btn-success " style="padding-top: 5px; margin-left:60px; margin-top:15px; margin-bottom:0px;padding-right:80px; padding-left: 80px; text-transform: none;">Inscreva-se</button>

						</form>



                    
                </div> <!-- col-md-12 -->
            </div> <!--fim row -->
        </div> <!-- fim container -->
    </section> <!-- fim home -->




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>




</body>
</html>