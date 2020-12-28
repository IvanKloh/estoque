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
  	 	<title>Inserir Funcionários</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script> <! -- scritp para os comentarios do facebook --> 
	<body>
		<?php
			include('menuFuncionario.php'); ///incluir o menu dos funcionarios
		?>
	<div class="container">
		<div id="form">
			  	<label for="nome">Nome:</label><! -- caixa de texto para inserir o Nome--> 
			  	<input type="text" id="nome" name="nome"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Nome do Funciónário"><br><br>

			  	<label for="codigoFuncionario"> Codigo do Funcionário:</label><! -- caixa de texto para inserir o codigo--> 
			  	<input type="text" id="codigoFuncionario" name="codigoFuncionario"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Codigo do Funciónário"><br><br>

				<label for="funcao">Função:</label><! -- caixa de texto para inserir a funcao-> 
			  	<input type="text" id="funcao" name="funcao"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Função"><br><br>	
				<label>
			 		<span>Sexo</span>
			 		<select  type="text" name="sexo" id = "sexo" class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Sexo"> <! -- caixa de texto para selecionar o sexo--> 
			 			<option  value="Masculino">  Masculino	</option>
			 			<option  value="Femenino">  Femenino </option>
			 			
			 		</select>
				</label> <br><br>		
			  	<label for="nasc">Nascimento:</label><! -- caixa de texto para inserir a data de nascimento  --> 
			 	<input type="date" id="nasc" name="nasc"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Data de Nascimento"><br><br>
			  	
			 	<label for="adm">Data de Admisão:</label><! -- caixa de texto para inserir a data de admisao --> 
			 	<input type="date" id="adm" name="adm"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Data de Admisão"><br><br>
			 	
			 	<button  class="voltar" onclick='history.go(-1)'> 
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
					VOLTAR
				</button> <! -- botão de  voltar-->
				
				<button type="button"  class="limpar" onclick="limparFuncionario()">
					 <i class="fa fa-eraser" aria-hidden="true"></i>
					LIMPAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
				

			 	<button type="button"  class="cadastrar" onclick="inserirFuncionario(getElementById('nome').value,getElementById('codigoFuncionario').value,getElementById('funcao').value,getElementById('sexo').value,getElementById('nasc').value,getElementById('adm').value)">
			 		<i class="fa fa-check"></i>	
					 CADASTRAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
				
				

		</div>	
	</div>	
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
			<?php @include('../visao/rodape.php');///include do rodape  ?>
	</body>
</html>
