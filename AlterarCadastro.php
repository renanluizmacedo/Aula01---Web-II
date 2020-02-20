<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once ("PessoaController.php");

    if( !empty($_GET) ) {
        $pc = exibirFormularioAlteracao($_GET);
    } else if( !empty($_POST)) {
        $pc = gravarAlteracao($_POST);
    }

    function exibirFormAlteracao($dados) {
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Alterar Pessoa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 jumbotron">
            <form action="AlterarCadastro.php" method="post">
                <h3>Alterar Pessoa </h3>
                <div class = "form-group">
                    <label for="nome">Nome:</label>
                    <input class = "form-control" type="text" value="<?php echo $dados[1] ?>" name = "nome"/>
                </div>
                <div class = "form-group">
                    <label for="cpf">CPF:</label>
                    <input class = "form-control" type="text" 
                        value="<?php echo $dados[0]; ?>" name = "cpf" />
                </div>
                <div class = "form-group">
                    <label for="endereco">Endereço:</label>
                    <input class = "form-control" type="text" value="<?php echo $dados[2] ?>" name = "endereco" />
                </div>
                <div class = "form-group">
                    <label for="telefone">Telefone:</label>
                    <input class = "form-control" type="text" value="<?php echo $dados[3] ?>" name = "telefone" />
                </div>

                <div class = "row mt-5">
                  <div class = "col-lg-3">
                     <a href = "index.php" class = "btn btn-warning btn-block mb-2">Voltar</a>
                 </div>
                 <div class = "offset-lg-6 col-lg-3"  >
                     <button class = "btn btn-success btn-block ">Alterar</button>
                 </div>
               </div>
            </form>
            </div>
        </div>

    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

    <?php } ?>