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
                            <a class="nav-link" href="perfil.php" title="Clique para ver o seu perfil!">Meu Perfil</a>
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

    <!-- INFOR -->
    <div id="info" class="container-fluid">
        
        <div class="nome-curso text-center justify-content-center">
            <h1> nome do curso </h1>
            <hr>
        </div>

        <div class="container">

            <h4> Progresso: </h4>
            <div class="progress container">
                <div class="progress-bar " role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>

            <div class="pt-3">
                <h5> Aulas restantes: <!-- php para as aulas restantes--> </h5> 
                <h5> Aulas concluidas: <!-- php para as aulas concluidas--> </h5> 
            </div>
            
        </div>
        <hr>

    </div>
    <!-- FIM INFO -->

    <!-- AULAS -->
    <div id="aulas">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="card col-lg-3 col-md-6 mb-lb-0 m-2">
                    <div class="img-container ">
                        <!-- php para inserção da imagem_aula -->
                        <img src="../img/miniatura-aula.jpg" class="img-fluid">
                    </div>
                    <h5 class="text-uppercase"> <!-- php para a inserção do campo nome_aula  --> Nome aula </h5>
                    <p class="mb-0"> <!-- php para a inserção do campo descricao_aula --> Descrição aula </p>
                    <button class="button btn btn-primary button-primary" style="width: 100%;"> Acessar aula </button>
                </div>

                <div class="card col-lg-3 col-md-6 mb-lb-0 m-2">
                    <div class="img-container ">
                    <!-- php para inserção da imagem_aula -->
                    <img src="../img/miniatura-aula.jpg" class="img-fluid">
                    </div>
                    <h5 class="text-uppercase"> <!-- php para a inserção do campo nome_aula  --> Nome aula </h5>
                    <p class="mb-0"> <!-- php para a inserção do campo descricao_aula --> Descrição aula </p>
                    <button class="button btn btn-primary button-primary" style="width: 100%;"> Acessar aula </button>
                </div>

                <div class="card col-lg-3 col-md-6 mb-lb-0 m-2">
                    <div class="img-container ">
                    <!-- php para inserção da imagem_aula -->
                    <img src="../img/miniatura-aula.jpg" class="img-fluid">
                    </div>
                    <h5 class="text-uppercase"> <!-- php para a inserção do campo nome_aula  --> Nome aula </h5>
                    <p class="mb-0"> <!-- php para a inserção do campo descricao_aula --> Descrição aula </p>
                    <button class="button btn btn-primary button-primary" style="width: 100%;"> Acessar aula </button>
                </div>

                <div class="card col-lg-3 col-md-6 mb-lb-0 m-2">
                    <div class="img-container ">
                    <!-- php para inserção da imagem_aula -->
                    <img src="../img/miniatura-aula.jpg" class="img-fluid">
                    </div>
                    <h5 class="text-uppercase"> <!-- php para a inserção do campo nome_aula  --> Nome aula </h5>
                    <p class="mb-0"> <!-- php para a inserção do campo descricao_aula --> Descrição aula </p>
                    <button class="button btn btn-primary button-primary" style="width: 100%;"> Acessar aula </button>
                </div>
            </div>

        </div>
    </div>
    <!-- FIM AULAS -->



    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    
</body>
</html>