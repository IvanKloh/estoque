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
  	 	<title>Entrada dos Produtos</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

	<body>
		
		<?php
			include('menuMov.php');
		?>
	<div class="container">
		<div id="form">
			   	<input type="hidden" value="<?php   echo $_SESSION['id_usuario']; ?>" id="usuario" name="usuario"><br><br><! -- pega o id do usuario logado--> 
				<label for="codigo">Codigo do  Produto:</label><! -- caixa de texto para inserir o codigo do produto--> 
			  	<input type="text" id="codigo" name="codigo"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Código do Produto"><br><br>	
				<label>
			 		<span>Status</span><! -- caixa de texto para selecionar a entrada ou saida dos produtos--> 
			 		<select type="text" name="status" id = "status"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Status">
			 			<option value="Entrada">  Entrada	</option>
			 			<option value="Saida">  Saida	</option>
			 		</select>
				</label> <br><br>		
			  	<label for="quantidade">Quantidade:</label><! -- caixa de texto para inserir a quantidade --> 
			 	<input type="text" id="quantidade" name="quantidade"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Quantidade"><br><br>
			  	
			 		 	
			 	<button  class="voltar" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button> <! -- botão de  voltar-->
			 
				<button type="button"  class="limpar" onclick="limparEntrada()">
					 <i class="fa fa-eraser" aria-hidden="true"></i>
						LIMPAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				
				<button type="button" class="cadastrar"  onclick="entrada(getElementById('usuario').value,getElementById('codigo').value,getElementById('status').value,getElementById('quantidade').value)">
					<i class="fa fa-check"></i>	
						CADASTRAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
			</div>	
		</div>	
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php');///include do rodape  ?>
	</body>
</html>
