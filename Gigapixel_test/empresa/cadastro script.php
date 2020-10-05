<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
       <?php
         include "conexao.php";

         $nome = $_POST['nome'];
         $recebimentos = $_POST['recebimentos'];
         $despesas = $_POST['despesas'];
         $saldo = $_POST['saldo'];

         $sql = "INSERT INTO `pessoas`(`nome`, `recebimentos`, `despesas`, `saldo`) VALUES ('$nome','$recebimentos','$despesas','$saldo')";

         if (mysqli_query($conn, $sql)) {
             mensagem("$nome cadastrado com sucesso!",'success'); 
         } else 
             mensagem("$nome NÃO cadastrado!", 'danger');

       ?>
       <hr>
       <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
         