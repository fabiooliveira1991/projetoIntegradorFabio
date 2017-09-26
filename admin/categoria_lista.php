<link href="../util/estilos.css" rel="stylesheet" type="text/css" />

<table width="831" border="1px" class="borda_tabela" cellspacing="2">
  <tr class="titulos_lista_pesquisa">
    <td colspan="3" align="center"><div align="center">
      <h2>Lista de Categoria</h2>
      <form id="form_pesquisa" name="form_pesquisa" method="post" action="index.php?tabela=categoria&acao=listar">
        <p align="center">
          <label>
          	Pesquisa.:
          	<input name="pesquisa" type="text" id="pesquisa" size="50" />
          </label>
          <label>
          	<input type="submit" name="button" id="button" value="Pesquisar" />
           </label> 
        </p>
      </form>
    </div>
  <tr class="ordenacao_novo_registro">
    <td width="494"><a href="index.php?tabela=categoria&acao=listar&ordem=DESCRICAO&pesquisa"><script>document.getElementById('pesquisa').value</script>Descrição</a></td>
    <td colspan="2"><a href="index.php?tabela=categoria&acao=incluir">Novo Registro</a></td>
  </tr> 
  <?php
  
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
	?>
           <tr>
            <td class="itens_tabela_banco"><?php echo $oquefazer->registros->DESCRICAO;?></td>
            <td class="alterar_excluir" onmouseover="this.className='alterar_excluir_over'; " onmouseout="this.className='alterar_excluir'; " width="73"><a href="index.php?tabela=categoria&acao=alterar&codigo=<?php echo $oquefazer->registros->IDCATEGORIA;?>">Alterar</a></td>
            <td class="alterar_excluir" onmouseover="this.className='alterar_excluir_over';" onmouseout="this.className='alterar_excluir'" width="94"><a href="javascript:if(confirm('Deseja excluir esse registro ? ')) {location='index.php?tabela=categoria&acao=excluir&codigo=<?php echo $oquefazer->registros->IDCATEGORIA;?>';}">Excluir</a></td>
          </tr>
<?php 
   } ?>     
  <tr class="titulos_lista_pesquisa">
    <td colspan="3"><div align="center">
      <p align="left">Numero de Registros: <?php echo $oquefazer->total_registros();?></p>
      <p><strong>email: fabiooliveira1941@gmail.com</strong></p>
    </div></td>
  </tr>
</table>
