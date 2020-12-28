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
    			 
		
///select para mostrar todos os elementos da tabela  start		
			$sql="SELECT
					 id_funcionario, 
					 nome_funcionario,
					 codigo_funcionario, 
                     funcao, 
                     sexo,
                     data_nascimento,
                     data_admisao
					 FROM 
					 funcionario WHERE 
					 nome_funcionario LIKE '%$nome%'";///comando para mostrar todos os elementos da tabela 
 				
	 	$result = mysqli_query($okdb,$sql);
///select para mostrar todos os elementos da tabela  end 

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
				<th> Registro</th>
				<th> Nome </th>
				<th> Código </th>
				<th> Função </th>
				<th> Sexo </th>
				<th> Data de Nascimento </th>
				<th> Data de Admissão</th>
			</tr>";

		 while($rows = $result->fetch_assoc()){
			  echo "<tr>";

				  echo "<td><a href='../visao/alterarFuncionario.php?id=".$rows['id_funcionario']."'>" . $rows['id_funcionario'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarFuncionario.php?id=".$rows['id_funcionario']."'>" . $rows['nome_funcionario'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarFuncionario.php?id=".$rows['id_funcionario']."'>" . $rows['codigo_funcionario'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarFuncionario.php?id=".$rows['id_funcionario']."'>" . $rows['funcao'] ."</a></td>";///link na tabela
				  echo "<td><a href='../visao/alterarFuncionario.php?id=".$rows['id_funcionario']."'>" . $rows['sexo'] ."</a></td>";  ///link na tabela
				  echo "<td><a href='../visao/alterarFuncionario.php?id=".$rows['id_funcionario']."'>" . $rows['data_nascimento'] ."</a></td>";  ///link na tabela
				  echo "<td><a href='../visao/alterarFuncionario.php?id=".$rows['id_funcionario']."'>" . $rows['data_admisao'] ."</a></td>";  ///link na tabelaecho"</tr>";
			  }
			echo "</table>";
		}
	mysqli_close($okdb);
	
      
?>