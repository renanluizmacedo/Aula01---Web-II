<?php

    include_once ("pessoa_fisica.php");


        function gravar(PessoaFisica $pessoa) {
            $fp = fopen('pessoas.txt', 'a+');

            if ($fp) {
                $linha = $pessoa->cpf."-".$pessoa->nome."-".$pessoa->telefone."-".$pessoa->endereco;
                fputs($fp, "$linha\n");
                fclose($fp);
            }
        }

        function leitura() {
            
            $dados = array();
            $fp = fopen('pessoas.txt', 'r');
    
            if ($fp) {
    
                while(!feof($fp)) {
                    $linha = fgets($fp);
                    
                    if(!empty($linha)) {
                        $dados = explode("-", $linha);
                        echo "<tr>";
                            echo "<td>".$dados[0]."</td>";
                            echo "<td>".$dados[1]."</td>";
                            echo "<td>".$dados[2]."</td>";
                            echo "<td>".$dados[3]."</td>";

                            echo "<td>";
                            echo "<a  href = \"AlterarCadastro.php?cpf={$dados[0]}\">";
                                echo "<img src='../img/edit.svg'> ";
                            echo "</a>";
                            echo "&nbsp";
                            echo "<button type='submit' name='acao' value='remover/"."'>";
                                echo "<img src='../img/delete.svg'>";
                            echo "</button>";
                            echo "</td>";      
                        echo "</tr>";

                }
            }
    
                fclose($fp);
            }
        }
        function alterar($dados){
            echo $_GET['dados'];


          //  $cpf = 
        }
        function remover(){

        }

?>