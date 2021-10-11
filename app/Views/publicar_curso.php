    <!-- FIM HEADER -->

    <!-- CADCURSO -->
    <div id="cadcurso" class="container pt-5">
        <div class="infocurso">
            <h1 class="title text-center mb-5"> Publicar curso </h1>
                
            <form action="">
            <div class="row justify-content-around">
                <div class="col-4">
                    <label for="" class="form-label"> Título do curso: </label>
                    <input type="text" class="form-control" title="Insira o título do seu curso" > 

                    <label for="" class="form-label pt-3"> Descrição: </label>
                    <textarea type="text box" class="form-control" title="Coloque aqui uma breve descrição do que se trata seu curso"> </textarea>

                    <label for="" class="form-label pt-3"> Tempo estimado: </label>
                    <input type="number" class="form-control" name="" id="">

                    <label for="" class="form-label pt-3"> Área do curso: </label>
                    <select class="form-select mb-3" id="area_curso" name="categora" title="Selecione a área academica do curso." required> </select>

                    <!-- checkboxes -->
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="comentarios">
                    <label for="vehicle1"> Permitir comentários:   </label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="emailview">
                    <label for="vehicle2"> Permitir visualização de seu email: </label><br>

                </div>

                <div class="col-4">

                  <div class="mb-3">
                    <label for="formFile" class="form-label pt-3"> <h3> Video sobre: </h3> 
                    <h5 class="subtitle"> (opcional) Insira um video resumindo o que ira se tratar o curso </h5> </label>
                    <input class="form-control" type="file" id="formFile" title="">
                  </div>

                  <div class="mb-3">
                    <label for="miniatura" class="form-label pt-3"> <h4> Miniatura do vídeo: </h4>
                    <p class="subtitle"> (opcional) Insira uma imagem que mostre o que ira se tratar o curso </p> </label>
                    <input class="form-control" type="file" id="miniatura">
                  </div>

                </div>

            </div>
            <div class="pb-3 d-flex justify-content-center mt-5"> 
                <button type="submit" class="button btn btn-primary button-primary">Próximo</button>
            </div> 
            </form>
         </div>

    </div>

    <!-- FIM CADCURSO -->



    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>