<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
	<?php
		include('../controle/controleSession.php');///inclusao do arquivo de controleSession

	?>

<html>
	<head>
  		<meta charset="UTF-8"/>
  	 	<title>Inserir Epi</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script> <! -- script para o comentario do facebook --> 

	<body>
		<?php
			include('menuEpi.php');///incluir o menu dos Epi
			?>
	<div class="container">
		<div id="form">
			  	<label for="produto">Produto:</label><! -- caixa de texto para inserir o produto--> 
			  	<input type="text" id="produto" name="produto"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Descrição do Produto"><br><br>

				<label for="codigoProduto">Código:</label><! -- caixa de texto para inserir o codigo do produto--> 
			  	<input type="text" id="codigoProduto" name="codigoProduto"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Código do Produto"><br><br>		

			  	<label for="fabricante">Fabricante:</label><! -- caixa de texto para inserir o fabricante--> 
			  	<input type="text" id="fabricante" name="fabricante"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Fabricante"><br><br>		 	
			 	
			 	<label for="quantidadeBaixa">Estoque Baixo:</label><! -- caixa de texto para inserir a quantidade para o estoque baixo--> 
			  	<input type="text" id="quantidadeBaixa" name="quantidadeBaixa"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Estoque Baixo"><br><br>

			  	<label for="quantidadeAlerta">Estoque em Atenção:</label><! -- caixa de texto para inserir a quantidade para o estoque em Alerta--> 
			  	<input type="text" id="quantidadeAlerta" name="quantidadeAlerta"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Estoque em Atenção"><br><br>

			  	<label for="quantidadeBoa">Estoque Bom:</label><! -- caixa de texto para inserir a quantidade para o estoque bom--> 
			  	<input type="text" id="quantidadeBoa" name="quantidadeBoa"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Estoque Bom"><br><br>


				<button  class="voltar" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button> <! -- botão de  voltar-->
				
			 	
				<button type="button"  class="limpar" class="limpar" onclick="limpar()">
					<i class="fa fa-eraser" aria-hidden="true"></i>
					LIMPAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->

				<button type="button" class="cadastrar" onclick="inserirEpi(getElementById('produto').value,getElementById('codigoProduto').value,getElementById('fabricante').value,getElementById('quantidadeBaixa').value,getElementById('quantidadeAlerta').value,getElementById('quantidadeBoa').value)">
					 <i class="fa fa-check"></i>	
					CADASTRAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
		</div>	
	</div>	
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php'); //include do rodape ?>
	</body>
</html>
