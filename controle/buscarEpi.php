<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php
	
	include('../modelo/conexao.php');///inclusão do arquivo de conexão com o banco


		$produto = $_GET["produto"];///recebe o valor produto do arquivo da visao
    			 
		//$okdb = mysqli_connect("localhost", "root", "", "estoque");///conexão com o banco de dados


///select para mostrar todos os elementos da tabela  start
			$sql="SELECT
					 id_produto, 
					 descricao_produto,
					 codigo_produto,
					 fabricante,
					 quantidadeBaixa,
					 quantidadeAlerta,
					 quantidadeBoa,
					 data
					 FROM 
					 produto WHERE 
					 descricao_produto LIKE '%$produto%'";///comando para mostrar todos os elementos da tabela 
 				
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
				<th> Registro </th>
				<th> Produto </th>
				<th> Código </th>
				<th> Fabricante </th>
				<th> Baixo </th>
				<th> Alerta  </th>
				<th> Bom </th>
				<th> Data e Hora </th>
			</tr>";

		 while($rows = $result->fetch_assoc()){
			  echo "<tr>";

				  echo "<td><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" . $rows['id_produto'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" . $rows['descricao_produto'] ."</a></td>"; ///link  na tabela
				  echo "<td><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" . $rows['codigo_produto'] ."</a></td>";///link na tabela
				  echo "<td><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" . $rows['fabricante'] ."</a></td>";///link na tabela
				  echo "<td><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" . $rows['quantidadeBaixa'] ."</a></td>";///link na tabela
				  echo "<td><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" . $rows['quantidadeAlerta'] ."</a></td>";///link na tabela
				  echo "<td><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" . $rows['quantidadeBoa'] ."</a></td>";///link na tabela
				  echo "<td class='data'><a href='../visao/alterarEpi.php?id=".$rows['id_produto']."'>" .$data = date('d-m-Y H:i:s',strtotime( $rows['data'])); $rows['data'] ."</a></td>";  ///link na tabela

			  echo"</tr>";
			  }
			echo "</table>";
		}

	mysqli_close($okdb);
	
      
?>