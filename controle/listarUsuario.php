<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>

<?php


if($acaoLista == 'user'){
	$result = mysqli_query($okdb, "SELECT * FROM usuario ORDER BY usuario.id_usuario DESC");///select faz a consulta no banco e mostra em ordem de cadastro. mais novos primeiro
 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

	   $conar = 0;
      $array_usuario=array();
	   while($rows = $result->fetch_assoc()){
       $conar ++;
 
        $array_usuario[$conar]['nome_usuario']   = $rows['nome_usuario']; ///recebe os valores e passa os valores para array_usuario
        $array_usuario[$conar]['senha_usuario']  = $rows['senha_usuario']; ///recebe os valores e passa os valores para array_usuario
        $array_usuario[$conar]['id_funcionario'] = $rows['id_funcionario']; ///recebe os valores e passa os valores para array_usuario
       
       }

}else if($acaoLista =='id_usuario'){

	$result = mysqli_query($okdb, "SELECT * FROM usuario WHERE id_usuario =".$id); 
	   $conar = 0;
      $array_usuario=array();
	   while($rows = $result->fetch_assoc()){
       $conar ++;

        $array_usuario[$conar]['nome_usuario']   = $rows['nome_usuario']; ///recebe os valores e passa os valores para array_usuario
        $array_usuario[$conar]['senha_usuario']  = $rows['senha_usuario']; ///recebe os valores e passa os valores para array_usuario
        $array_usuario[$conar]['id_funcionario'] = $rows['id_funcionario']; ///recebe os valores e passa os valores para array_usuario
       
       
       }

}
?>