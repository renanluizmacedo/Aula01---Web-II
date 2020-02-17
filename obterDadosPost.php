<?php

	include_once ("PessoaController.php");
	include_once ("pessoa_fisica.php");
	
	function obterDados($post) {
		$pessoa = new PessoaFisica();
		$pessoa->nome = $post['nome'];
		$pessoa->cpf = $post['cpf'];
		$pessoa->endereco = $post['endereco'];
		$pessoa->telefone = $post['telefone'];

		$controllerPessoa = new PessoaController();

		$controllerPessoa->gravar($pessoa);
	}
	
?>


