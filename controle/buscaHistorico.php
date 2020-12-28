<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php

	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$nome = $_GET["nome"];///recebe o valor nome do arquivo da visao
    	
 				
	///lista os funcionarios  start	
			$sql="SELECT
					  A.id_usuario, 
	                  A.id_funcionario, 
	                  A.cod_produto, 
	                  A.status, 
	                  A.motivo, 
	                  A.quantidade, 
	                  A.data,
	                  (SELECT nome_funcionario FROM funcionario WHERE id_funcionario = A.id_funcionario) AS nome_funcionario, 
	                  (SELECT nome_usuario FROM usuario WHERE id_usuario = A.id_usuario) AS nome_usuario, 
	                  (SELECT descricao_produto FROM produto WHERE codigo_produto = A.cod_produto) AS descricao_produto
	                  FROM mov_estoque A  WHERE 
					 id_funcionario LIKE '%$nome%'";
	                 

				///comando para mostrar todos os elementos da tabela 
 				
	 	$result = mysqli_query($okdb,$sql);

		$tCabecalho = mysqli_num_rows($result);
	 	 
	 	if ($tCabecalho == 0){
	 	?>
	 	<div class="retorno">
	 		Nenhum resultado encontrado!
	
		</div>
	 	<?php 	
	 	}else{
		 echo "<table border='1'>
			<tr>
				<th> Usuario </th> 
				<th> Funcionario </th>
				<th> Produto </th>
				<th> status </th>
				<th> Motivo </th>
				<th> Quantidade </th>
				<th> Data  </th>
				
			</tr>";

		 while($rows = $result->fetch_assoc()){
			  echo "<tr>";

				  echo "<td>" . $rows['nome_usuario'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['nome_funcionario'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['descricao_produto'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['status'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['motivo'] ."</td>"; ///mostra os valores na tabela
				  echo "<td>" . $rows['quantidade'] ."</td>"; ///mostra os valores na tabela
				  echo "<td class='data'>" . $data = date('d-m-Y H:i:s',strtotime($rows['data'])); $rows['data'] ."</td>"; ///mostra os valores na tabela

				  echo "</tr>";
				}	
			echo "</table>";
		}

	mysqli_close($okdb);
	
     //// lista os funcionarios end 
?>