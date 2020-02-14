<?php 
    $listaPessoas = [
        [
            "nome" => "Felipe",
            "cpf"  => "000.000.000-00",
            "endereco" => "Endereço",
            "telefone" => "(41) 0000-0000"
        ], 
        [
            "nome" => "Renan",
            "cpf"  => "000.000.000-00",
            "endereco" => "Endereço",
            "telefone" => "(41) 0000-0000"
        ]
    ];


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <a href="CadastrarPessoa.php" class="btn btn-primary btn-block mb-3">Cadastrar Pessoa Fisíca</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>CPF</th>
                            <th>NOME</th>
                            <th>ENDEREÇO</th>
                            <th>TELEFONE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaPessoas as $pessoa): ?>
                        <tr>
                            <td>000.000.000-00</td>
                            <td><?= $pessoa['nome'] ?></td>
                            <td>Endereço</td>
                            <td>(41) 00000-0000</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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