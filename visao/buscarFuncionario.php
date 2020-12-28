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
    	<title>Buscar Funcionários</title>
    	<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

	<body>
			
		<?php
			include('../modelo/conexao.php');///inclusao do arquivo que faz a conexão com o banco de dados
			include('menuFuncionario.php');///include do arquivo menuFuncionario
		?>
		<div class="container">	
			<div id="campos">
				<label for="nome">Nome do Funcionário :</label> <! -- caixa de texto para inserir o nome do funcionario --> 
				<input type="text" onkeypress="buscarFuncionario(getElementById('nome').value)" id="nome" name="nome"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Nome do Funciónário"><br><br> <! -- comando para aparecer os resultados conforme vai digitando na pesquisa --> 
						
				<button  class="voltarBusca" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button> <! -- botão de  voltar-->
								
				<button type="button" class="limpar"  onclick="limparFuncionario()">
				    <i class="fa fa-eraser" aria-hidden="true"></i>
						LIMPAR
				</button><br><br><! -- botão de  limpar-->
			
			</div>
								
			<div id="txtHint">
				 
			</div>
		</div>
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>	
		<?php @include('../visao/rodape.php'); ///include do rodape  ?>
	</body>
</html>
	
