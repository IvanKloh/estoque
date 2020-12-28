<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
	<?php
		include('../controle/controleSession.php');///inclusao do arquivo de controleSession
		include('../modelo/conexao.php');///include do arquivo  que faz z conexão com o banco


	?>

<html>
	<head>
  		<meta charset="UTF-8"/>
  	 	<title>Ficha de Entrega </title>
  	 	
  	 	 <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Última versão JavaScript compilada e minificada -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  
        <script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes --> 
	</head>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 


	<body>
		
			<?php
				include('menuMov.php');///include do arquivo do menu de movimentaçoes
				//session_start();
			?>
	<div class="container">
		<div id="form">
			
			  	
			  	<input type="hidden" value="<?php   echo $_SESSION['id_usuario']; ?>" id="usuario" name="usuario"><br><br><! -- pega o id do usuario logado --> 

				<label for="funcionario">Funcionário:</label><! -- caixa de texto para inserir o funcioanario--> 
			  	<select type="text" name="funcionario" id = "funcionario"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Nome do Funcionário">
		 			<option value="0">  Selecione o Funcionário </option>
			 			<?php 
			 				$sql="
			 				SELECT * FROM funcionario";

			 				  $result = mysqli_query($okdb,$sql);
			 				   while($rows = $result->fetch_assoc()){

			 			?>
		 			<option value="<?php echo $rows['id_funcionario'] ?>">  <?php echo /*$rows['id_funcionario'].'-'.*/$rows['nome_funcionario']  ?> </option>
			 			<?php
					 		}
					 	?>
			 			
		 		</select>
			  	<br><br>	

			  	<label for="produto">Produto:</label><! -- caixa de texto para inserir o codigo do produto--> 
			  	<input type="text" id="produto" name="produto"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Descrição do Produto"><br><br>	
				<label>
			 		<span>Status</span><! -- caixa de texto para a saida-> 
			 		<select type="text" name="status" id = "status"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Status">
			 			
			 			<option value="Saida">  Saída </option>
			 			
			 		</select>
				</label> <br><br>		
				<label>
			 		<span>Motivo</span><! -- caixa de texto para inserir o motivo da saida--> 
			 		<select type="text" name="motivo" id = "motivo"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Motivo">
			 			
			 			<option value="Troca">  Troca </option>
			 			<option value="Novo">  Novo </option>
			 			<option value="Perca">  Perca </option>


			 		</select>
				</label> <br><br>		
			  	<label for="quantidade">Quantidade:</label><! -- caixa de texto para inserir a quantidade--> 
			 	<input type="text" id="quantidade" name="quantidade"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Quantidade"><br><br>

			 	<label for="codigoFuncionario">Codigo de Validação:</label><! -- caixa de texto para inserir a quantidade--> 
			 	<input type="text" id="codigoFuncionario" name="codigoFuncionario"class="btn btn-secondary" data-toggle="tooltip" data-placement="input" title="Código do Funcionário"><br><br>
			  	
			 	
			 	<button  class="voltarSaida" onclick='history.go(-1)'> 
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
						VOLTAR
				</button> <! -- botão de  voltar-->

	 			<button type="button" class="limparSaida" onclick="limparSaida()">
					 <i class="fa fa-eraser" aria-hidden="true"></i>
						LIMPAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp;<! -- botão de  limpar-->
			
			 	<button type="button" class="cadastrarSaida" onclick="saida(getElementById('usuario').value,getElementById('funcionario').value,getElementById('produto').value,getElementById('status').value,getElementById('motivo').value,getElementById('quantidade').value,getElementById('codigoFuncionario').value)">
			 		<i class="fa fa-check"></i>	
			 			CADASTRAR
				</button>&nbsp;&nbsp;&nbsp;&nbsp; <! -- botão de Cadastrar. Quando apertado envia os valores --> 
				
				

				<button type="button" class="imprimirSaida" onclick="imprimir(getElementById('usuario').value,getElementById('funcionario').value,getElementById('produto').value,		getElementById('status').value,getElementById('motivo').value,getElementById('quantidade').value)">
					<i class="fa fa-print fa-x3" aria-hidden="true"></i>
						IMPRIMIR
				</button>
			</div>	
		</div>
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>	
		<?php @include('../visao/rodape.php'); ///include do arquivo do rodape ?>
	</body>
</html>
