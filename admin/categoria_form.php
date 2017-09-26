<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link href="../util/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <form id="form1" name="form_cadastro" method="post" action="index.php">
  <div align="center">
    <table width="500" border="1" cellpadding="5" cellspacing="5" class="ordenacao_novo_registro">
      <tr>
        <td colspan="2"><div align="center">
          <h1 class="titulos_lista_pesquisa">Manutencao de Categoria</h1>
        </div></td>
      </tr>
      <tr>
        <td width="99">Nome</td>
        <td width="360">
        <input type="text" name="DESCRICAO" id="DESCRICAO" size="40" 
        	value="<?php if($acao!="incluir")echo $oquefazer->registros->DESCRICAO;?>"  />  
      		
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center" class="titulos_lista_pesquisa"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="categoria" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>" />
       <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->IDCATEGORIA;?>" />        
        </td>
   
      </tr>
      <tr>
        <td colspan="2" class="titulos_lista_pesquisa">Rodapé</td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>