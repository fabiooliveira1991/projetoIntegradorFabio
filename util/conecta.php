<?php
//$db = mysqli_connect("localhost", "root", "");
//$conexao = mysql_select_db(""); //nome do banco de dados que tem que estar igual no pgadmin

	require('adodb5/adodb.inc.php'); //biblioteca necessária para trabalhar com o ADODB5
	require('funcoes.php');
	
	class conexao 
	{
		var $tipo_banco = "mysql";
		var $servidor = "localhost";
		var $usuario = "root";
		var $senha = "";
		var $banco;
		
		function conexao() // metodo construtor
		{
			$this->banco = NewADOConnection($this->tipo_banco);
			$this->banco->dialect = 3;
			$this->banco->debug = false;
			$this->banco->Connect($this->servidor,$this->usuario,$this->senha,"controlepedidos");
		}
	}
	
	$con = new conexao();
	
	//mysql_select_db("controlepedidos");
	
	if($con) 
	//	echo "conectado ao banco de dados "."<br>";
	//else
	//	echo "não conectou";	
		
?>