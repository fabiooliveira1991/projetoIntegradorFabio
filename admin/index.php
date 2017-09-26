<?
   if(!$isset('pesquisa')) $pesquisa="";
   if(!$isset('ordem')) $ordem="";
   

?>
<link href="../util/estilos.css" rel="stylesheet" type="text/css" />

<div align="center">
  <table width="740" height="243" border="1" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="titulo_sistema">ÁREA ADMINISTRATIVA DA PIZZARIA PÁDOVA</td>
    </tr>
    <tr>
      <td width="109" class="menu" height="115" align="left" valign="middle" nowrap="nowrap"><ul>
          <li><a href="index.php?tabela=home&acao=listar" onmouseover="this.className='menu_over'; " onmouseout="this.className='menu';">Home</a></li>
          <li><a href="index.php?tabela=categoria&acao=listar&pesquisa=&ordem" onmouseover="this.className='menu_over'; " onmouseout="this.className='menu';">Categoria</a></li>
          <li><a href="index.php?tabela=cidades&acao=listar&pesquisa=&ordem" onmouseover="this.className='menu_over'; " onmouseout="this.className='menu';">Cidades</a></li>
          <li><a href="#">Fornecedor</a></li>
          <li><a href="#">Pessoas</a></li>
          <li><a href="#">Pedidos</a></li>
          <li><a href="#">Produtos</a></li>
          <li><a href="#">Promoção</a></li>
          <li><a href="../index.php">Sair</a></li>
        </ul>
      </td>
      <td width="693" align="center" valign="top"> 
      <?php 
	  		require('../util/conecta.php');
			$tabela = $_REQUEST['tabela'];
			echo "tabela = ".$tabela;
			
			if($tabela == "cidades")
				require('cidade_acao.php');		
			else if($tabela == "categoria")
				require('categoria_acao.php');				
			else 
				require('principal.php');	
					
	  ?>	
      </td>
    </tr>
    <tr>
      <td colspan="2"><h2 align="center" class="titulo_sistema">Sistema desenvolvido por Fábio de Oliveira</h2></td>
    </tr>
  </table>
</div>
