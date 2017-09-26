<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<table width="831" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="4"><div align="center">
      <h2>Lista de Cidades da área administrativa do sistema </h2>
    </div></td>
  </tr>
  <tr>
    <td width="494">Descrição</td>
    <td width="60">UF</td>
    <td colspan="2">Novo Registro</td>
  </tr>
 
  <?php
  
	require('../util/conecta.php');
	
	$sql = "SELECT * FROM cidades";
	
	$resultado = $con->banco->Execute($sql);
	
	while(!$resultado->EOF)
	{
		//echo " cidades = " . $resultado->Fields('DESCRICAO')."<br>";
		
	

	?>
           <tr>
            <td><?php echo $resultado->Fields('DESCRICAO') ?></td>
            <td><?php echo $resultado->Fields('UF') ?></td>
            <td width="73">Alterar</td>
            <td width="94">Excluir</td>
          </tr>
<?php 
		$resultado->MoveNext();
   } ?>     
  <tr>
    <td colspan="4"><div align="center">
      <p align="left">Numero de Registros</p>
      <p><strong>email: fabiooliveira1941@gmail.com</strong></p>
    </div></td>
  </tr>
</table>
</body>
</html>