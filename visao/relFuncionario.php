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
		include('../controle/relFuncionario.php');///inclusao do arquivo com o comando de listar as movimentaçoes
	?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>RELATÓRIO DOS FUNCIONÁRIOS</title>
	</head>
	<div id="fb-root"></div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 

<body>
	<div class="posicao">
		<?php
			include('relatoriosMenu.php');
			
		?>
	</div>
<div class="container">
	<div id="tbl">
		<table  id="myTable" class="display">
			
		<thead>
			<tr>
				<th> Funcionário </th>
			    <th class="data"> Data e Hora </th>
			</tr>
		</thead>
			<?php
				foreach (@$array_mov as $value) {
			?>
			<tr>
				<td><?php echo $value['nome_funcionario'] ?></td>
				<td><?php echo  $data = date('d-m-Y H:i:s',strtotime($value['data'])); $value['data'] ?></td>
				
			</tr>
			<?php
				}
			?>
		</table><br><br><br><br><br><br>
			<center><br><br><br><br>
		<button  class="voltarLista" onclick='history.go(-1)'> 
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
				VOLTAR
		</button> </center> <! -- botão de  voltar-->
		</div>
		</div>
		<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="margin-left:100px;"></div>
		<?php @include('../visao/rodape.php'); ///faz o include do rodape ?>
	</body>
</html>

