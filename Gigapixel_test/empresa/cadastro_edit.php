<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <?php 

      include "conexao.php";
      $id = $_GET['id'] ?? '';
      $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

      $dados = mysqli_query($conn, $sql);
      $linha = mysqli_fetch_assoc($dados);

     ?>


    <div class="container">
      <div class="row">
        <div class="col">
         <h1>Cadastro</h1>
          <form action="edit_script.php" method="POST">            
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="texto" class="form-control" name="nome" id="nome" value="<?php echo $linha['nome']; ?>">                
            </div>
            <div class="form-group">
                <label for="recebimentos">Recebimentos</label>
                <input type="texto" class="form-control" name="recebimentos" id="recebimentos" value="<?php echo $linha['recebimentos']; ?>">                
            </div>
            <div class="form-group">
                <label for="despesas">Despesas</label>
                <input type="texto" class="form-control" name="despesas" id="despesas"value="<?php echo $linha['despesas']; ?>">                
            </div>
            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input type="texto" class="form-control" name="saldo" id="saldo"value="<?php echo $linha['saldo']; ?>">                
            </div>
            <div class="form-group">                
                <input type="submit" class="btn btn-success" value="Salvar Alterações">  
                <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'] ?>">                              
            </div>            
          </form>
          <a href="index.php" class="btn btn-info">Voltar ao Inicio</a>
        </div>
      </div>
    </div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
          </form>

        </div>
      </div>
    </div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>