<body id="login-bg">

    <!-- LOGIN -->
    <div id="login"> 
        <div class="container ">
          <div class="menu d-flex flex-column align-items-start pt-5 ">
            <h2 class="title me-md-2">Acesse sua conta:</h2>

            <form action="model/login_model.php" method="POST">
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
    <script src="js/main.js"></script>
    
</body>
</html>