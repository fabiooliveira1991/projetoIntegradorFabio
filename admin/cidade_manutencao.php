<?php
  	class cidade_manutencao
	{
		var $resultado;
		var $registros;
		
		function cidade_manutencao() //metodo construtor tem o mesmo nome da classe
		{
			$this->con = new conexao();
		}
		
		function listar_cidade()
		{	
		    if(!isset($_REQUEST['ordem'])) 
			  $ordenacao = "DESCRICAO";
			else
		      $ordenacao = $_REQUEST['ordem'];
			//echo "ordenacao... = $ordenacao<br>";
			if($ordenacao == '')
			   $ordenacao = "DESCRICAO";
				
		    if(!isset($_REQUEST['pesquisa']))
			   $filtro=""; 
			else
			   $filtro = $_REQUEST['pesquisa'];
			//echo "filtro... = $filtro<br>";

			if($filtro == '')
     			$sql = "SELECT * FROM cidades ORDER BY ".$ordenacao;
			else
				$sql = "SELECT * FROM cidades WHERE DESCRICAO like '".$filtro."%' ORDER BY ".$ordenacao;
				
			 
				
		//echo "sql = [$sql]<br>";
			$this->resultado = $this->con->banco->Execute($sql);
			
		}
		
		function excluir()
		{
			$sql = "DELETE FROM cidades WHERE IDCIDADE = ".$_REQUEST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql))
			{
				alerta("O Registro foi excluido com sucesso!");
				return true;	
			}
			else 
			{
				alerta("Não foi Possível excluir Registro!");
				return false;	
			}
		}
		
		function gravar_incluir()
		{
			$sql = "INSERT INTO cidades (DESCRICAO, UF) VALUES ('".$_REQUEST['DESCRICAO']."','".
																   $_REQUEST['UF']."')";
			if($this->resultado = $this->con->banco->Execute($sql))
			{
				alerta("O Registro foi incluido com sucesso!");
				return true;	
			}
			else 
			{
				alerta("Não foi Possível gravar Registro!");
				return false;	
			}
		}
		
		function incluir()
		{
			
		}
		
		function alterar()
		{
			$sql = "SELECT * FROM cidades WHERE IDCIDADE = ".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravar_alterar()
		{
			$sql = "UPDATE cidades SET DESCRICAO = '".$_REQUEST['DESCRICAO']."', UF = '".$_REQUEST['UF']."' WHERE IDCIDADE = ".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		
		
		function total_registros()
		{
			$sql = "SELECT COUNT(*) AS TOTAL FROM cidades ";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL;	
		}

	}

?>