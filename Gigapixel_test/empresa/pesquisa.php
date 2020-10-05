<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pesquisar</title>
  </head>
  <body>

    <?php 
      
      $pesquisa = $_POST['busca'] ?? '';      
      
      include "conexao.php";

      $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

      $dados = mysqli_query($conn, $sql);

      ?>



    <div class="container">
      <div class="row">
        <div class="col">
         <h1>Pesquisar</h1>
         <nav class="navbar navbar-light bg-light">
           <form class="form-inline" action="pesquisa.php" method="POST">
             <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
           </form>
         </nav>

         <table class="table table-hover">
           <thead>
             <tr>
               <th scope="col">Nome completo</th>
               <th scope="col">Recebimentos</th>
               <th scope="col">Despesas</th>
               <th scope="col">Saldo</th>
               <th scope="col">Funções</th>
             </tr>
           </thead>
           <tbody>

            <?php 

            while ($linha =  mysqli_fetch_assoc($dados) ) {
              $cod_pessoa = $linha['cod_pessoa'];
              $nome = $linha['nome'];
              $recebimentos = $linha['recebimentos'];
              $despesas = $linha['despesas'];
              $saldo = $linha['saldo'];

              echo "<tr>
                       <th scope='row'>$nome</th>
                       <td>$recebimentos</td>
                       <td>$despesas</td>
                       <td>$saldo</td>
                       <td width=150px>
                           <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                           <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                           onclick=" .'"' ."pegar_dados($cod_pessoa, '$nome')" .'"' .">Excluir</a>                        

                       </td>
                   </tr>";

             }

            ?>
             
            <!--  onclick="pegar_dados($id, '$nome')"  O SEGREDO ESTÁ AQUI!!!-->
           </tbody>
         </table>
          
          <a href="index.php" class="btn btn-info">Voltar ao Inicio</a>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action=excluir_script.php method="POST">
           <p>Deseja realmente excluir <b id="nome_pessoa">Nome da Pessoa</b>?</p>           
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>              
              <input type="hidden" name="nome" id="nome_pessa_1" value="">
              <input type="hidden" name="id" id="cod_pessoa" value="">
              <input type="submit" class="btn btn-danger" value="Sim">
            </form>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      function pegar_dados(id, nome) {
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('nome_pessa_1').value = nome;
        document.getElementById('cod_pessoa').value = id;
      }
    </script>


    

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