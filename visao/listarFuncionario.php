<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
	<?php

		include('../controle/controleSession.php');///inclusao do arquivo de controleSession

		
		include('../modelo/conexao.php');///inclusao do arquivo que faz a conexão com o banco de dados

		$acaoLista = 'lista';
		include('../controle/listarFuncionario.php');///inclusao do arquivo com o comando de listar funcionarios
	?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Listar Funcionários</title>
	</head>
	<div id="fb-root"></div>
	
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

<body>
	<div class="posicao">
		<?php
			include('menuFuncionario.php')///faz o include do menu dos funcionarios;
		?>
	</div>
<div class="container">
	<div id="tbl">
		<table class="display nowrap" id="myTable" style="width: 100%;" >
			<thead>
			<tr>
				<th> Registro</th>
				<th> Nome </th>
				<th> Código </th>
				<th> Função </th>
				<th> Sexo </th>
				<th> Nascimento </th>
				<th> Admissão</th>
			</tr>
		</thead>	
			<?php
				foreach (@$array_funcionario as $value) {
			?>
			<tr>
			  <?php  echo "<td><a href='../visao/historico.php?id=".$value['id_funcionario']."'>" . $value['id_funcionario'] ."</a></td>"; ?> <! -- link para o arquivo do historico--> 
			  <?php  echo "<td class='data'><a href='../visao/historico.php?id=".$value['id_funcionario']."'>" . $value['nome_funcionario'] ."</a></td>"; ?><! -- link para o arquivo do historico--> 
			  <?php  echo "<td class='data'><a href='../visao/historico.php?id=".$value['id_funcionario']."'>" . $value['codigo_funcionario'] ."</a></td>"; ?><! -- link para o arquivo do historico--> 
			  <?php  echo "<td><a href='../visao/historico.php?id=".$value['id_funcionario']."'>" . $value['funcao'] ."</a></td>"; ?><! -- link para o arquivo do historico--> 
			  <?php  echo "<td><a href='../visao/historico.php?id=".$value['id_funcionario']."'>" . $value['sexo'] ."</a></td>"; ?><! -- link para o arquivo do historico--> 
			  <?php  echo "<td class='data'><a href='../visao/historico.php?id=".$value['id_funcionario']."'>" . $value['data_nascimento'] ."</a></td>"; ?><! -- link para o arquivo do historico--> 
			  <?php  echo "<td class='data'><a href='../visao/historico.php?id=".$value['id_funcionario']."'>" . $value['data_admisao'] ."</a></td>"; ?><! -- link para o arquivo do historico--> 
				
			</tr>
			<?php
				}
			?>

		</table><br><br><br><br><br><br>
				<center><br><br><br><br>
		<button class="voltarLista" onclick='history.go(-1)'>
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
				VOLTAR
		</button></center> <! -- botão de  voltar-->
		</div>
		</div>
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php');///include do rodape  ?>
	</body>
</html>

