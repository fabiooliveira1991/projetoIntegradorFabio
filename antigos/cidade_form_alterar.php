﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
 <form id="form1" name="form_cadastro" method="post" action="index.php">
  <div align="center">
    <table width="500" border="1" cellspacing="5" cellpadding="5">
      <tr>
        <td colspan="2"><div align="center">
          <h1>Alterar de Cidades</h1>
        </div></td>
      </tr>
      <tr>
        <td width="99">Nome</td>
        <td width="360"><label>
        <input name="DESCRICAO" type="text" id="DESCRICAO" size="40" 
        value="<?php echo $oquefazer->registros->DESCRICAO;?>" />
        </label></td>
      </tr>
      <tr>
        <td>UF</td>
        <td><label>
          <select name="UF" id="UF">
          <?php 
		  		$estado1 = '';
		  		$estado2 = '';
		  		$estado3 = '';
		  		$estado4 = '';
				$estado5 = '';
		  		$estado6 = '';
				switch($oquefazer->registros->UF)
				{
					case 'PR': $estado1 = 'selected';break;
					case 'RS': $estado2 = 'selected';break;
					case 'SC': $estado3 = 'selected';break;
					case 'TO': $estado4 = 'selected';break;
					case 'SP': $estado5 = 'selected';break;
					case 'RJ': $estado6 = 'selected';break;
				}
		  ?>
            <option value="PR" <?php echo $estado1; ?>>PR</option>
            <option value="RS" <?php echo $estado2; ?>>RS</option>
            <option value="SC" <?php echo $estado3; ?>>SC</option>
            <option value="TO" <?php echo $estado4; ?>>TO</option>
            <option value="SP" <?php echo $estado5; ?>>SP</option>
            <option value="RJ" <?php echo $estado6; ?>>RJ</option>
        </select>
        </label></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="cidades" />
        <input type="hidden" name="acao" value="gravar_alteracao" />
       <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->IDCIDADE;?>" />        
        </td>
   
      </tr>
      <tr>
        <td colspan="2">Rodapé</td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>