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
  	 	 	<title>Alterar Usuario</title>
  	 			<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

	<body>
		
		<?php
			include('../modelo/conexao.php');///faz o include do arquivo  de conexão com o banco de dados
				$id = $_GET['id'];
				$acaoLista = "id_usuario";
			include('../controle/listarUsuario.php');///faz o include do arquivo listarUsuario da pasta controle
			include('menuUsuario.php');///faz o include do arquivo menuUsuario
			?>
		<div class="container">	
	
		<div class= "form">
			<div id="campos">
			 <input type="Hidden" id="id_usuario" value="<?php echo $id  ?>" >   <! --id que ta url--> 
  			  	
			 
			 <label for="nome_usuario">Usuario:</label><! -- caixa de texto para inserir o nome do usuario --> 
			 <input type="text" id="nome_usuario" name="nome_usuario" value="<?php echo   $array_usuario[1]['nome_usuario'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Nome do Usuário"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 <label for="senha_usuario">Senha:</label><! -- caixa de texto para inserir  senha do usuario --> 
			 <input type="text" id="senha_usuario" name="senha_usuario" value="<?php echo   $array_usuario[1]['senha_usuario'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Senha do Usuário"><br><br><! -- campo de textoc prenchido já com os valores--> 
			 
			 <label for="id_funcionario">Registro:</label><! -- caixa de texto para inserir o id do funcionario--> 
			 <input type="text" id="id_funcionario" name="id_funcionario" value="<?php echo   $array_usuario[1]['id_funcionario'];?>"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Registro do Funciónário"><br><br><! -- campo de textoc prenchido já com os valores--> 
			
			
			 <div id="botão">
			 		
				<button  class="voltar" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button> <! -- botão de  voltar-->
						
				<button type="button" class="limpar" onclick=" limparUsuario()">
				 	<i class="fa fa-eraser" aria-hidden="true"></i>
					   LIMPAR
				</button><! -- botão de  limpar-->
				
				<button type="button"  class="cadastrar"  onclick="alterarUsuario(getElementById('nome_usuario').value,getElementById('senha_usuario').value,getElementById('id_funcionario').value,getElementById('id_usuario').value)">
					<i class="fa fa-check"></i>	
		 				ALTERAR
		 		</button> <! -- botão de alterar. Quando apertado envia os valores --> 
			</div> 
		</div>
							
		<div id="txtHint">	</div>	
		</div>	
		</div>	
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php');  ///include do rodape?>
	</body>
</html>
