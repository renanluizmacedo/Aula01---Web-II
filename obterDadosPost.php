<?php

	function obterDados($post) {

		$pessoa = $post['cpf']." - ".$post['nome']." - ".$post['endereco']." - ".$post['telefone'];
		echo "<script> alert('".$pessoa."') </script>";

	}
	
?>


