
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
    	<title>Histórico</title>
    	<link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/font-awesome-4.7.0/css/font-awesome.min.css"?>"> <! -- acessa o arquivo de css para a parte dos icónes da pagina--
	</head>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

	<link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/stilo.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->
	<body>
			
		<?php
			include('../modelo/conexao.php');///inclusao do arquivo que faz a conexão com o banco de dados
			
		?>
		<div class="container">	
				<div id="tbl">

					<?php

						include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco
								$nome =$_GET['id'];

    			 
///faz a consulta na lista do funcionarios e traz o historico  start	
									$sql="SELECT
							  				A.id_usuario,
		                      				A.id_funcionario, 
		                      				A.cod_produto, 
		                      				A.status,
	                      					A.motivo,
	                      					A.quantidade,
	                      					A.data,
	                     						(SELECT nome_funcionario FROM funcionario WHERE id_funcionario = A.id_funcionario) AS nome_funcionario,
	                      						(SELECT nome_usuario FROM usuario WHERE id_usuario = A.id_usuario) AS nome_usuario
										 FROM 
											 mov_estoque A  WHERE 
										 A.id_funcionario = $nome";///comando para mostrar todos os elementos da tabela 
	 						
		 					$result = mysqli_query($okdb,$sql);
		 					$tCabecalho = mysqli_num_rows($result);
		 	
///faz a consulta na lista do funcionarios e traz o historico  end	
	 						if ($tCabecalho == 0){
	 				?>
	 	<div class="retorno">
	 		Nenhum resultado encontrado!
	
		</div>
	 	<?php 	
	 	}else{
	 
		 echo "<table class='table-round-corner'>
			<tr>
				<th> Usuário </th> 
				<th> Funcionário </th>
				<th> Produto </th>
				<th> Status </th>
				<th> Motivo </th>
				<th> Quantidade </th>
				<th> Data  </th>
				
				
			</tr>";

		 while($rows = $result->fetch_assoc()){
			  echo "<tr>";

				  echo "<td>" . $rows['nome_usuario'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['nome_funcionario'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['cod_produto'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['status'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['motivo'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['quantidade'] ."</td>"; ///mostra os valores na tabela
				  echo "<td class='data'>" . $data = date('d-m-Y H:i:s',strtotime($rows['data'])); $rows['data'] ."</td>"; ///mostra os valores na tabela
				  
				  echo "</tr>";
				}	
			echo "</table>";
		}

			mysqli_close($okdb);
	

			?>

			</div>

		</div>	
			
			<button style="font-size: 14px; width: 145px; background-color: #0abab5; margin-left: 592px; top: 207px; position: relative;" onclick='history.go(-1)'> 
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
					VOLTAR
			</button><! -- botão de  voltar-->
				
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php'); ///include do roadape ?>
	</body>
</html>
