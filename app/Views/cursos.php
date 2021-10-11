<!-- BANNER -->
<div id="banner" class="block">
  <div class="container pt-5">

      <div class="mb-md-0 mb-4"> 
        <h1 class="d-flex title justify-content-center pt-3"> Encontre um curso de sua escolha! </h1>

        <form action="" method="get" class="d-flex title justify-content-center">
            <input class="form-control" type="text" name="pesquisa" placeholder="Digite o nome do curso aqui..."/> 
            <button type="submit" class="busca ms-3"> </button> 
        </form>	

      </div>

  </div>
</div>

<!-- FIM BANNER -->

<!-- FILTRO -->
<div id="filtro">
    <div class="container-fluid">
        <h5 class="title d-flex justify-content-center"> Filtro avançado </h3>
        <hr>
        
        <div class="container">    
        <form action=""  class="row row-cols-lg-auto g-3 align-items-center">
            
            <div class="row g-3">
                <div class="col-auto">
                    <label for="categoria" class="col-form-label"> Categoria: </label>
                </div>
                <div class="col-auto">
                    <select class="form-select" name="" id="categoria" style="width: 300px;"> 
                        <option value=""> Exatas </option>
                        <option value=""> 2 </option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-auto">
                    <label for="categoria" class="col-form-label"> Área do curso: </label>
                </div>
                <div class="col-auto">
                    <select class="form-select" name="" id="categoria" style="width: 300px;"> 
                        <option value=""> Direito </option>
                        <option value=""> 2 </option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-auto">
                    <label for="categoria" class="col-form-label"> Ordenar por: </label>
                </div>
                <div class="col-auto">
                    <select class="form-select" name="" id="categoria" style="width: 300px;"> 
                        <option value=""> Data publicação </option>
                        <option value=""> Mais vistos </option>
                    </select>
                </div>
            </div>

        </form>
        </div>
    </div>
</div>
<hr>
<!-- FIM FILTRO -->

<!-- CURSOS/MENU -->
<div id="menu" class="block pt-3" style="background-color: white;">
    <div class="container">

      <div class="row d-flex justify-content-center">

        <div class="col-lg-3 col-md-6 mb-4 mb-lb-0">
          <a href="pagina_curso.php" class="destaque" >
            <div class="img-container">
              <!-- php para inserção da imagem_curso -->
              <img src="img/miniatura-curso.jpg" class="img-fluid" title="Ver os cursos.">
            </div>
            <h5 class="text-uppercase"> <!-- php para a inserção do campo nome_curso  --> Nome Curso </h5>
            <p class="mb-0"> <!-- php para a inserção do campo descricao_curso --> Descrição curso </p>
            <button class="button btn btn-primary button-primary" style="width: 100%;"> Acessar curso </button>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lb-0">
          <a href="#" class="destaque" >
            <div class="img-container">
              <!-- php para inserção da imagem_curso -->
              <img src="img/miniatura-curso.jpg" class="img-fluid" title="Ver os cursos.">
            </div>
            <h5 class="text-uppercase"> <!-- php para a inserção do campo nome_curso  --> Nome Curso </h5>
            <p class="mb-0"> <!-- php para a inserção do campo descricao_curso --> Descrição curso </p>
            <button class="button btn btn-primary button-primary" style="width: 100%;"> Acessar curso </button>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lb-0">
          <a href="#" class="destaque" >
            <div class="img-container">
              <!-- php para inserção da imagem_curso -->
              <img src="img/miniatura-curso.jpg" class="img-fluid" title="Ver os cursos.">
            </div>
            <h5 class="text-uppercase"> <!-- php para a inserção do campo nome_curso  --> Nome Curso </h5>
            <p class="mb-0"> <!-- php para a inserção do campo descricao_curso --> Descrição curso </p>
            <button class="button btn btn-primary button-primary" style="width: 100%;"> Acessar curso </button>
          </a>
        </div>

      </div>

    </div>
  </div>

<!-- FIM CURSOS/MENU  -->

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>
