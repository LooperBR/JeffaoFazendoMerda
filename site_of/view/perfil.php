<?php
    session_start();
    if((!isset($_SESSION['email_usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email_usuario']);
        unset($_SESSION['senha']);
        header('Location: ../view/login.php');
    }
    $logado = $_SESSION['email_usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">

    <link rel="shortcut icon" href="../img/icone.png">
    
    <title>OpenFeob</title>
</head>
<body>
    <!-- COMEÇO HEADER -->
    <header id="header">

            <nav class="navbar navbar-expand-lg navbar-light">

                <img src="../img/logo-nav.png" class="image-fluid" height="67">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php" title="Clique para voltar para o ínicio!">Ínicio</a>
                        </li>
        
                        <li class="nav-item">
                          <a class="nav-link" href="cursos.php" title="Você está aqui!">Cursos</a>
                        </li>
        
                        <li class="nav-item">
                          <a class="nav-link" href="publicar_curso.php" title="Clique para publicar um curso seu!">Publicar Curso</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="perfil.php" title="Você está aqui!">Meu Perfil</a>
                        </li>
  
                        <li class="nav-item">
                          <a class="nav-link" href="login.php" title="clique para acessar sua conta!">Entrar</a>
                        </li>
  
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrar.php" title="Clique para criar uma conta.">Criar Conta</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="../model/sair.php" class="nav-link">Sair</a>
                        </li>  

                      </ul>
      
                </div>
            </nav>
    </header>

    <!-- FIM HEADER -->

    <!-- BANNER -->
    <div id="banner" class="block" style="height: 300px;">
    </div>
    <!-- FIM BANNER -->

    <!-- PERFIL | CURSOS -->

    <div id="perfil">
        <div class="container">
            <div class="row">
                <!-- PERFIL -->
                <div class="col-4 border-end">
                    <div class="img-perfil dados">
                        <img src="../img/img-perfil.jpg" class="img-fluid rounded-circle"> 
                    </div>
                    <div class="pt-3">
                        <h3 class="text-center"> Caio Detore <!-- php --> </h3>  <hr>
                        <h6>Cursos Matriculados: <!-- php --></h6>
                        <h6>Cursos Finalizados: <!-- php --></h6>
                        <h6>Cursos Públicados: <!-- php --></h6>

                        <!-- redes sociais href= php com o link -->
                        <div id="footer" class="text-end justify-content-center d-flex pt-3">
                            <ul class="nav list-unstyled">
                              <li class="ms-3"> <a class="text-muted" href="#"> <img src="../img/fb-ico.png" class="bi" width="24" height="24"> </a></li>
                              <li class="ms-3"> <a class="text-muted" href="#"> <img src="../img/tt-ico.png" class="bi" width="24" height="24"> </a></li>
                              <li class="ms-3"> <a class="text-muted" href="#"> <img src="../img/yt-ico.png" class="bi" width="24" height="24"> </a></li>
                              <li class="ms-3"> <a class="text-muted" href="#"> <img src="../img/inst-ico.png" class="bi" width="24" height="24"> </a></li>
                            </ul>
                        </div>

                    </div>
                    
                </div>
                <!-- FIM PERFIL -->

                <!-- CURSOS -->
                <div class="col-6">
                    <h1 class="title">Matriculado:</h1>
                </div>
                <!-- FIM CURSOS -->

            </div>
        </div>
    </div>

    <!-- FIM PERFIL | CURSOS -->


    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    
</body>
</html>