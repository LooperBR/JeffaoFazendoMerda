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
    <link rel="stylesheet" href="css/main.css">

    <link rel="shortcut icon" href="img/icone.png">
    
    <title>OpenFeob</title>
</head>
<body>
    <!-- COMEÇO HEADER -->
    <header id="header">

            <nav class="navbar navbar-expand-lg navbar-light">

                <img src="img/logo-nav.png" class="image-fluid" height="67">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
    
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" title="Clique para voltar para o ínicio!"> Ínicio </a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="cursos.php" title="Veja todos os cursos disponíveis!">Cursos</a>
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
                            <a href="model/sair.php" class="nav-link">Sair</a>
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
      
    <!-- SOBRECURSO -->
    <div id="sobrecurso" class="block"> 
      <div class="container">
        <div class="row">

            <!-- sobre curso -->
            <div class="sobre_curso col-lg-4 col-md-6 align-self-center mb-md-0 mb-4 pt-3">
              <h2 class="text-center"> Sobre o Curso </h2> <hr>
              <h4 class="ms-3"> Tempo estimado:</h4>
              <p> <!-- php para a inserção--> </p>
              <h4 class="ms-3"> Alunos matriculados: </h4>
              <p> <!-- php para a inserção--> </p>
              <h4 class="ms-3"> Data de publicação: </h4>
              <p> <!-- php para a inserção--> </p>
              <h4 class="ms-3"> Descrição: </h4>
              <p> <!-- php para a inserção--> </p>
            </div>
          
          <!-- fim sobre curso -->

          <!-- video sobre -->
          <div class="col-lg-8 col-md-6 align-self-center text-center">
            <h3> Video Sobre </h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mPZkdNFkNps" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
          <!-- fim video sobre -->
        </div>
      </div>  
    </div>
  <!-- FIM SOBRECURSO -->

  <!-- INSCREVER-SE + PERFIL ALUNO TUTOR -->
  <div id="sobrecurso" class="block"> 
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4 col-md-6 align-self-center mb-md-0 mb-4">
            <a href="aulas.php" class="button btn btn-primary button-primary" style="width: 100%;"> Inscrever-se </a>
        </div>
      
        <!-- sobre tutor -->
        <div class="sobre_tutor col-lg-8 col-md-6 text-end">
          <div class="pe-5 text-end"> 
            <h5> Nome tutor </h5>
            <p>informações extras</p>
          
          </div>
          <img src="img/golden-fish.png">
        </div>
        <!-- fim sobre tutor -->
      </div>
    </div>  
  </div>

  <!-- FIM INSCREVER-SE + PERFIL ALUNO TUTOR -->



    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>