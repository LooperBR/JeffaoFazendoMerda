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
    
    <title>OpenFeob - Entrar</title>
</head>
<body id="login-bg">
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
      
                </div>
            </nav>
    </header>

    <!-- FIM HEADER -->

    <!-- LOGIN -->
    <div id="login"> 
        <div class="container ">
          <div class="menu d-flex flex-column align-items-start pt-5 ">
            <h2 class="title me-md-2">Acesse sua conta:</h2>

            <form action="../model/login_model.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_usuario">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha:</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                </div>
                <a href="cadastrar.php" class="me-5" title="Clique para criar uma conta.">Criar conta</a>
                <button type="submit" name="submit" id="submit" class="button btn btn-primary button-primary justify-content-end">Acessar minha conta</button>
            </form>
              
          </div>
        </div>
    </div>
    

    <!-- FIM LOGIN -->


    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    
</body>
</html>