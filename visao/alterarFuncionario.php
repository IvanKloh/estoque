<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
?>
	<?php
	include('../controle/controleSession.php');///faz o include do arquivo controleSession

	?>

<html>
	<head>
  		 <meta charset="UTF-8"/>
  	 	 	<title>Alterar Funcionários</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 
	<body>
		<?php
			include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados
				$id = $_GET['id'];
				$acaoLista = "id_funcionario";
			include('../controle/listarFuncionario.php');///faz o include do arquivo listarFuncionario da pasta controle
			include('menuFuncionario.php');///faz o include do arquivo menuFuncionario
		?>
	<div class="container">	
	
		<div class= "form">
			<div id="campos">
				 <input type="Hidden" id="id_funcionario" value="<?php echo $id  ?>" >   <! --id que ta url--> 
  			  	
			  	<label for="nome">Nome:</label><! -- caixa de texto para alterar o Nome--> 
			  	<input type="text" id="nome" name="nome" value="<?php echo $array_funcionario[1]['nome_funcionario'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Nome do Funciónário"><br><br><! -- campo de textoc prenchido já com os valores--> 

			  	<label for="codigoFuncionario"> Codigo do Funcionário:</label><! -- caixa de texto para alterar o Nome--> 
			  	<input type="text" id="codigoFuncionario" name="codigoFuncionario" value="<?php echo $array_funcionario[1]['codigo_funcionario'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Codigo do Funciónário"><br><br>
			 
			 	<label for="funcao">Função:</label><! -- caixa de texto para alterar a funcao-> 
			 	<input type="text" id="funcao" name="funcao" value="<?php echo $array_funcionario[1]['funcao'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Função"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 	<label for="sexo"> Sexo: </label><! -- caixa de texto para selecionar o sexo--> 
			 	<input type="text" id="sexo" name="sexo" value="<?php echo $array_funcionario[1]['sexo'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Sexo"><br><br><! -- campo de textoc prenchido já com os valores--> 

			 	<label for="nasc">Nascimento:</label><! -- caixa de texto para alterar a data de nascimento  --> 
			 	<input type="date" id="nasc" name="nasc" value="<?php echo $array_funcionario[1]['data_nascimento'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Data de Nascimento"><br><br><! -- campo de textoc prenchido já com os valores-->

			 	<label for="adm">Data de Admisão:</label><! -- caixa de texto para alterar a data de admisao --> 
			 	<input type="date" id="adm" name="adm" value="<?php echo $array_funcionario[1]['data_admisao'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Data de Admisão"><br><br><! -- campo de textoc prenchido já com os valores-->  
			<div id="botão">
			 	<button  class="voltar" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button><! -- botão de  voltar-->
				
				<button type="button" class="limpar" onclick="limparFuncionario()">
					 <i class="fa fa-eraser" aria-hidden="true"></i>
						LIMPAR
				</button><! -- botão de  limpar-->
				
				<button type="button" class="cadastrar"  onclick="alterarFuncionario(getElementById('nome').value,getElementById('codigoFuncionario').value,getElementById('funcao').value,getElementById('sexo').value,getElementById('nasc').value,getElementById('adm').value,getElementById('id_funcionario').value)">
					<i class="fa fa-check"></i>	
						ALTERAR
				</button> <! -- botão de alterar. Quando apertado envia os valores --> 
			</div>	
		</div>
							
			<div id="txtHint">
				
			</div>	
		</div>	
		
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
			<?php @include('../visao/rodape.php');//include do rodape  ?></div>	
	</body>
</html>
