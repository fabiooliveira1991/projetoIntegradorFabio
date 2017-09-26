<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Desenvolvimento do Sistema Web</title>

<link rel="stylesheet" type="text/css" href="css/estilo.css" >
<link rel="stylesheet" type="text/css" href="animate.css" >
<link rel="shortcut icon" href="imagens/icon-pizzaria.png">

<?php// require "conexao.php" ?>
</head>

<body>
	<div class="row-topo">
		<header class="generalize cf">
			<div class="logo">
				<a href="index.php">
					<img src="imagens/logo-pizzaria.png" alt="logotipo-pizzaria" title="logotipo da pizzaria" class="logo" />
				</a>
			</div>
			
			<!--<div class="contatos">
				<p>Telefone: 54 3337.2088</p>
			</div> -->

			<nav class="menu">
				<ul>
					<li><a href="index.php" title="inicio">HOME</a></li>
					<li><a href="pizzaria.php" title="pizzaria">A PIZZARIA</a></li>
					<li><a href="cardapio.php" title="cardapio">CARDÁPIO</a></li>
					<li><a href="admin/index.php" title="cardapio">ÁREA ADMINISTRATIVA</a></li>
					<!-- <li><a href="#" title="promoções">PROMOÇÕES</a></li> -->
					<li><a href="pedido.php" title="pedido">FAZER PEDIDO</a></li>
					<li><a href="contato.php" title="contato">CONTATO</a></li>
				</ul>
			</nav>

		</header>
		
	</div>

	<div class="row-slider">
			<div class="generalize cf">
				<div class="slide">
					<img src="imagens/banner1.jpg" alt="imagem 1" title="Imagem 1" class="slideImagem" ">
					<img src="imagens/banner2.jpg" alt="imagem 1" title="Imagem 1" class="slideImagem" ">
				</div>
			</div>
	</div>

	<section class="row-cardapio">
		<div class="generalize cf">

			<div class="column column01">
				<h1>PROMOÇÕES</h1>

				<article class="caixa promocao">
					<img src="imagens/pizza.jpg" />
					<h2>Quarta Feira apenas R$ 19,90</h2>
					<p>Todas as quarta feiras temos promoções em nossa pizzaria</p>

					<h2>Venha Conferir Promoções Especiais</h2>
					<p>Não tem cadastro no sistema web ? se cadastre e venha efetuar pedidos online!</p>
				</article>
			</div>		
			
			<div class="column column02">
				<h1>NOTÍCIAS</h1>

				<article class="caixa noticias">
					<img src="imagens/cocacolalata.jpg" />
					<h2>Coca cola na Promoção</h2>
					<p>Todas as quarta feiras temos promoções em nossa pizzaria</p>



				</article>

				<article class="caixa noticias-brahma">
					
					<img src="imagens/brahma.jpg" />
					
					 <h2>12/06 Especial dias dos namorados!</h2>
					<p>Venha conferir nesse dia 12 de junho nosso cardápio especial!</p> 
				</article>

			</div>	

		</div>
	</section>

	<div class="row-contato">
		<div class="generalize cf conteudo">
			<div class="caixa caixa1">
				<h1 class="tituloDestaque">Onde Estamos</h1>

				<ul class="endereco">
					<li>
						<img src="imagens/endereco.png" title="Endereço" alt="Endereço">
						<address>Endereço completo, Cidade - UF, CEP: 00000-000</address>
					</li>
					<li>
						<img src="imagens/telefone.png" title="Telefone" alt="Telefone">
						<p>Telefone: (00) 00000-0000</p>
					</li>
					<li>
						<img src="imagens/email.png" title="E-mail" alt="E-mail">
						<a href="mailto:seuemail@dominio.com">E-mail</a>
					</li>
					<li>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.308352009186!2d-49.28517318532384!3d-25.494760841696625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfb556b3eaa9d%3A0x13520787131d82cc!2sAv.+Bras%C3%ADlia%2C+6172+-+Novo+Mundo%2C+Curitiba+-+PR!5e0!3m2!1spt-BR!2sbr!4v1503011580095" width="100%;" height="50%" style="border:0"></iframe>
					</li>
				</ul>	

			</div>

			<div class="caixa caixa2">
				<h1 class="tituloDestaque">Fale Conosco</h1>

				<form name="formulario" action="?" method="post">

					<input type="text" name="nome" placeholder="Nome" required>
					<input type="email" name="email" placeholder="E-mail" required>
					<textarea name="mensagem" rows="5" placeholder="Mensagem" required></textarea>
					<input type="submit" name="enviar" value="Enviar Mensagem" class="botao botaoGrande botaoAmarelo">
				</form>
			</div>

		</div>

	</div>

	<footer>
		<div class="rodape">
			<p>&copy; 2017 - Sistema Web. Desenvolvido por Fábio de Oliveira. Todos os direitos reservados!</p>
			<span>Este sistema web é um projeto final desenvolvido para a pizzaria Pádova na qual o cliente ao acessar o sistema web poderá efetuar pedidos online.</span>

			<ul class="social">
				<li>
					<a href="http://twitter.com/bobrinhacursos" title="Twitter" target="_blank">
						<img src="imagens/twitter.png" title="Twitter" alt="Twitter">
					</a>
				</li>

				<li>
					<a href="http://facebook.com/bobrinhacursos" title="Twitter" target="_blank">
						<img src="imagens/facebook.png" title="Facebook" alt="Facebook">
					</a>
				</li>

				<li>
					<a href="http://www.youtube.com" title="Youtube" target="_blank">
						<img src="imagens/youtube.png" title="Youtube" alt="Youtube">
					</a>
				</li>								
			</ul>
		</div>
	</footer>

</body>
</html>