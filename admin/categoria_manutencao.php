<?php
  	class categoria_manutencao
	{
		var $resultado;
		var $registros;
		
		function categoria_manutencao() //metodo construtor tem o mesmo nome da classe
		{
			$this->con = new conexao();
		}
		
		function listar_categoria()
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
     			$sql = "SELECT * FROM categoria ORDER BY ".$ordenacao;
			else
				$sql = "SELECT * FROM categoria WHERE DESCRICAO like '".$filtro."%' ORDER BY ".$ordenacao;
				
			 
				
		//echo "sql = [$sql]<br>";
			$this->resultado = $this->con->banco->Execute($sql);
			
		}
		
		function excluir()
		{
			$sql = "DELETE FROM categoria WHERE IDCATEGORIA = ".$_REQUEST['codigo'];
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
			$sql = "INSERT INTO categoria (DESCRICAO) VALUES ('".$_REQUEST['DESCRICAO']."')";
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
			$sql = "SELECT * FROM categoria WHERE IDCATEGORIA = ".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravar_alterar()
		{
			$sql = "UPDATE categoria SET DESCRICAO = '".$_REQUEST['DESCRICAO']."' WHERE IDCATEGORIA = ".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		
		
		function total_registros()
		{
			$sql = "SELECT COUNT(*) AS TOTAL FROM categoria ";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL;	
		}

	}

?>