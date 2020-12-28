<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
	<?php
	include('../controle/controleSession.php');///faz o include do arquivo controleSession

	?>

<html>
	<head>
  		 <meta charset="UTF-8"/>
  	 	 	<title>Alterar EPI</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

	<body>
		<?php
			include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados
				$id = $_GET['id'];
				$acaoLista = "id_produto";
			include('../controle/listarEpi.php');///faz o include do arquivo listarEpi da pasta controle
			include('menuEpi.php');///faz o include do arquivo menuEPi
		?>
	<div class="container">	
	
		<div class= "form">
			<div id="campos">
			
				<input type="Hidden" id="id_produto" value="<?php echo $id  ?>" >   <! --id que ta url--> 
  			  
  			  	<label for="produto">Produto:</label><! -- caixa de texto para alterar o produto--> 
			  	<input type="text" id="produto" name="produto" value="<?php echo $array_estoque[1]['descricao_produto'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Descrição do Produto"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
				<label for="codigoProduto">Código:</label><! -- caixa de texto para alterar o codigo do produto--> 
			 	<input type="text" id="codigoProduto" name="codigoProduto" value="<?php echo $array_estoque[1]['codigoProduto'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Código do Produto"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 	
			 	<label for="fabricante">Fabricante:</label><! -- caixa de texto para alterar o fabricante--> 
			 	<input type="text" id="fabricante" name="fabricante" value="<?php echo $array_estoque[1]['fabricante'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Fabricante"><br><br><! -- campo de textoc prenchido já com os valores--> 

			 	<label for="quantidadeBaixa">Estoque Baixo:</label><! -- caixa de texto para alterar a quantidade para o estoque baixo--> 
			  	<input type="text" id="quantidadeBaixa" name="quantidadeBaixa" value="<?php echo $array_estoque[1]['quantidadeBaixa'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Estoque Baixo"><br><br>

			  	<label for="quantidadeAlerta">Estoque em Atenção:</label><! -- caixa de texto para alterar a quantidade para o estoque em alerta--> 
			  	<input type="text" id="quantidadeAlerta" name="quantidadeAlerta"value="<?php echo $array_estoque[1]['quantidadeAlerta'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Estoque em Atenção"><br><br>

			  	<label for="quantidadeBoa">Estoque Bom:</label><! -- caixa de texto para alterar a quantidade para o estoque bom--> 
			  	<input type="text" id="quantidadeBoa" name="quantidadeBoa"value="<?php echo $array_estoque[1]['quantidadeBoa'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Estoque Bom"><br><br>

			<div id="botão">
				
				<button  class="voltar" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button> <! -- botão de  voltar-->
				
				<button type="button"  class="limpar" onclick="limpar()">
					 <i class="fa fa-eraser" aria-hidden="true"></i>
						LIMPAR
				</button><! -- botão de  limpar-->
				
				<button type="button"  class="cadastrar" onclick="alterarEpi(getElementById('produto').value,getElementById('codigoProduto').value,getElementById('fabricante').value,getElementById('quantidadeBaixa').value,getElementById('quantidadeAlerta').value,getElementById('quantidadeBoa').value,getElementById('id_produto').value)">
					<i class="fa fa-check"></i>	
						ALTERAR
				</button> <! -- botão de alterar. Quando apertado envia os valores --> 
				 </div>
			</div>	
							
			<div id="txtHint">
				
			</div>	
			</div>	
		</div>	
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
			<?php @include('../visao/rodape.php');  ?>
	</body>
</html>
