<?php
    include_once ("pessoa_fisica.php");

    class PessoaController {

        function gravar(PessoaFisica $pessoa) {
            $fp = fopen('pessoas.txt', 'a+');

            if ($fp) {
                $linha = $pessoa->cpf." - ".$pessoa->nome." - ".$pessoa->telefone." - ".$pessoa->endereco;
                fputs($fp, "$linha\n");
                fclose($fp);
            }
        }

    }

?>