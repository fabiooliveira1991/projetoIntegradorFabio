<?php
	require('conecta.php');
	
	$sql = "SELECT * FROM cidades";
	
	$resultado = $con->banco->Execute($sql);
	
	while(!$resultado->EOF)
	{
		echo " cidades = " . $resultado->Fields('DESCRICAO')."<br>";
		$resultado->MoveNext();
	}

?>