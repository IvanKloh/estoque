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
  	 	<title>Inserir Usuário</title>
  	 		<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

	<body>
		<?php
			include('menuUsuario.php');
		?>
	<div class="container">
		<div id="form">
			  	<label for="nome_usuario">Usuario:</label><! -- caixa de texto para inserir o nome do usuario --> 
			  	<input type="text" id="nome_usuario" name="nome_usuario"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Nome do Usuário"> <br><br>
			  	
				<label for="senha_usuario">Senha:</label><! -- caixa de texto para inserir  senha do usuario --> 
			  	<input type="password" id="senha_usuario" name="senha_usuario"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Senha do Usuário"> <br><br>

			  	<label for="id_funcionario">Registro:</label><! -- caixa de texto para inserir o id do funcionario--> 
			  	<input type="text" id="id_funcionario" name="id_funcionario"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Registro do Funciónário"> <br><br></label>
			  	
		 	<button type="button"  class="cadastrar" onclick="insereUsuario(getElementById('nome_usuario').value,getElementById('senha_usuario').value,getElementById('id_funcionario').value)">
		 		<i class="fa fa-check"></i>	
		 			CADASTRAR
	 		</button>
			<button type="button"  class="limpar" onclick=" limparUsuario()">
				 <i class="fa fa-eraser" aria-hidden="true"></i>
					LIMPAR
			</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
			<button  class="voltar" onclick='history.go(-1)'> 
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
					VOLTAR
			</button><! -- botão de  voltar-->
				
			</div>	
		</div>
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php'); //include do rodape ?>
	</body>
</html>
