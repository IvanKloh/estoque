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

		$acaoLista = 'LnomeAniverSexo';
		include('../controle/listarEpi.php');///inclusao do arquivo com o comando de listar os Epis
	?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Listar Produtos de EPI</title>
	</head>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script>
<body>
	<div class="posicao">
		<?php
			include('menuEpi.php');
		
		?>

	</div>
<div class="container">
	<div id="tbl">
		<table  id="myTable" style="width: 100%;">
			<thead>

			<tr>
				<th> Registro </th>
				<th> Produto </th>
				<th> Código </th>
				<th> Fabricante </th>
				<th> Baixo </th>
				<th> Alerta  </th>
				<th> Bom </th>
				<th> Data e Hora </th>
			</tr>
		</thead>	
			<?php
				foreach ($array_estoque as $value) {
			?>
			<tr>
				<td><?php echo $value['id_produto'] ?></td>
				<td><?php echo $value['descricao_produto'] ?></td>
				<td><?php echo $value['codigo_produto'] ?></td>
				<td><?php echo $value['fabricante'] ?></td>
				<td><?php echo $value['quantidadeBaixa'] ?></td>
				<td><?php echo $value['quantidadeAlerta'] ?></td>
				<td><?php echo $value['quantidadeBoa'] ?></td>
				<td><?php echo  $data = date('d-m-Y H:i:s',strtotime($value['data'])); $value['data'] ?></td>
			
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
		
			<div class="fb-comments" data-href="http://estoque.rf.gd/estoque/" data-numposts="5" data-width="1210" style="top: 50px;
}"></div><br><br><br><br>
		<?php @include('../visao/rodape.php'); ///include do rodape?>
	</body>

</html>

