<?php
	function tratar_erros($erro_numero) 
	{
		$mensagem_erro = "";
		switch($erro_numero)
		{
			case 1045: $mensagem_erro = "O usuario ou senha sao invalidos, favor rever isso!";break;
			case 1146: $mensagem_erro = "Essa Tabela não existe!";break;
			default: $mensagem_erro = "Erro não identificado";break;
		}
		return $mensagem_erro;
	}
	
	function alerta($mensagem)
	{
		echo '<script>alert("'.$mensagem.'");</script>';
	}

?>