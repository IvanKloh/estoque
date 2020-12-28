<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php

	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$nome_usuario = $_GET["nome_usuario"];
	//	///recebe o valor nome_usuario do arquivo da visao
    			 
		
///select para mostrar todos os elementos da tabela  start

			$sql="SELECT
					 id_usuario, 
					 nome_usuario,
					 senha_usuario,
					 id_funcionario
				FROM 
					 usuario WHERE 
					 nome_usuario LIKE '%$nome_usuario%'";///comando para mostrar todos os elementos da tabela 
 				
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
				<th> Usuário </th>
				<th> Registro</th>
			</tr>";

		 while($rows = $result-> fetch_assoc()){
			echo "<tr>";
			    echo "<td><a href='../visao/alterarUsuario.php?id=".$rows['id_usuario']."'>" . $rows['nome_usuario'] ."</a></td>"; ///link  na tabela
			    echo "<td><a href='../visao/alterarUsuario.php?id=".$rows['id_usuario']."'>" . $rows['id_funcionario'] ."</a></td>"; ///link  na tabela
			 
			echo"</tr>";
			  }
		echo "</table>";
	}

	mysqli_close($okdb);
	
      
?>