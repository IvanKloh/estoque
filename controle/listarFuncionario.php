<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>

<?php
///listar nome, aniversario, sexo

if($acaoLista == 'lista'){
	$result = mysqli_query($okdb, "SELECT * FROM funcionario  ORDER BY id_funcionario DESC");///select faz a consulta no banco e mostra em ordem de cadastro. mais novos primeiro
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
           $array_funcionario=array();
	   while($rows = $result->fetch_assoc()){
       $conar ++;

       $array_funcionario[$conar]['id_funcionario']     = $rows['id_funcionario'];  ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['nome_funcionario']   = $rows['nome_funcionario']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['codigo_funcionario'] = $rows['codigo_funcionario']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['funcao']             = $rows['funcao']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['sexo']               = $rows['sexo']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['data_nascimento']    = $rows['data_nascimento']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['data_admisao']       = $rows['data_admisao']; ///recebe os valores e passa os valores para array_funcionario
}

}else if($acaoLista =='id_funcionario'){

	$result = mysqli_query($okdb, "SELECT * FROM funcionario WHERE id_funcionario=".$id);///select procurando pelo id

	   $conar = 0;
           $array_funcionario=array();
	   while($rows = $result->fetch_assoc()){
       $conar ++;
       $array_funcionario[$conar]['id_funcionario']     = $rows['id_funcionario']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['nome_funcionario']   = $rows['nome_funcionario']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['codigo_funcionario'] = $rows['codigo_funcionario']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['funcao']             = $rows['funcao']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['sexo']               = $rows['sexo']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['data_nascimento']    = $rows['data_nascimento']; ///recebe os valores e passa os valores para array_funcionario
       $array_funcionario[$conar]['data_admisao']       = $rows['data_admisao']; ///recebe os valores e passa os valores para array_funcionario
}

}
?>