<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>

<?php
///listar nome, aniversario, sexo

if($acaoLista == 'LnomeAniverSexo'){
	$result = mysqli_query($okdb, "SELECT * FROM produto ORDER BY id_produto DESC");///select faz a consulta no banco e mostra em ordem de cadastro. mais novos primeiro
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
          $array_estoque=array();
	   while($rows = $result->fetch_assoc()){
       $conar ++;
 
       $array_estoque[$conar]['id_produto']        = $rows['id_produto']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['descricao_produto'] = $rows['descricao_produto']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['codigo_produto']    = $rows['codigo_produto']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['fabricante']        = $rows['fabricante']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['quantidadeBaixa']   = $rows['quantidadeBaixa']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['quantidadeAlerta']  = $rows['quantidadeAlerta']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['quantidadeBoa']     = $rows['quantidadeBoa']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['data']              = $rows['data']; ///recebe os valores e passa os valores para array_estoque
       
       }

}else if($acaoLista =='id_produto'){

	$result = mysqli_query($okdb, "SELECT * FROM produto WHERE id_produto=".$id);///select procurando pelo id

	   $conar = 0;
          $array_estoque=array();
	   while($rows = $result->fetch_assoc()){
       $conar ++;

       //$array_estoque[$conar]['id_produto']         = $rows['id_produto'];
       $array_estoque[$conar]['descricao_produto']  = $rows['descricao_produto']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['codigoProduto']      = $rows['codigo_produto']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['fabricante']         = $rows['fabricante']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['quantidadeBaixa']    = $rows['quantidadeBaixa']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['quantidadeAlerta']   = $rows['quantidadeAlerta']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['quantidadeBoa']      = $rows['quantidadeBoa']; ///recebe os valores e passa os valores para array_estoque
       $array_estoque[$conar]['data']               = $rows['data']; ///recebe os valores e passa os valores para array_estoque
       
       
       }

}
?>