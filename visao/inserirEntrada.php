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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

	<body>
		
			<?php
				include('menuMov.php');///include do menu das movimentacoes
			?>
	<div class="container">
		<div id="form">
			  	<label for="nome">Usuário:</label><! -- caixa de texto para inserir o usuario--> 
			  	<input type="text" id="nome" name="nome"><br><br>

				<label for="codigo">Codigo do  Produto:</label><! -- caixa de texto para inserir o codigo do produto--> 
			  	<input type="text" id="codigo" name="codigo"><br><br>	
				<label>
			 		<span>Status</span>
			 		<select name="status" id = "status"> <! -- caixa de texto selecionar Entrada ou saida--> 
			 			<option value="Entrada">  Entrada	</option>
			 			<option value="Saida">  Saída </option>
			 			
			 		</select>
				</label> <br><br>		
			  	<label for="quantidade">Quantidade:</label><! -- caixa de texto para inserir a quantidade de itens --> 
			 	<input type="text" id="quantidade" name="quantidade"><br><br>
			  	
			 		 	
			 	<button type="button" onclick="entrada(getElementById('nome').value,getElementById('codigo').value,getElementById('status').value,getElementById('quantidade').value)">
			 		<i class="fa fa-check"></i>	
			 			CADASTRAR</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
				<button type="button" onclick="limparFuncionario()">
					 <i class="fa fa-eraser" aria-hidden="true"></i>
						LIMPAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				<button  class="voltar" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button> <! -- botão de  voltar-->
		
			</div>	
		</div>	
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php'); ///include do rodape ?>
	</body>
</html>
