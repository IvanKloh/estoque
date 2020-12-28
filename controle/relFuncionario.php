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


 ///select faz a consulta no banco e mostra em ordem de cadastro. mais novos primeiro start
       $sql="SELECT 
                  A.id_usuario, 
                  A.id_funcionario, 
                  A.codigo_funcionario, 
                  A.cod_produto, 
                  A.motivo, 
                  A.status, 
                  A.quantidade, 
                  A.saldo, 
                  A.data,
                  (SELECT nome_funcionario FROM funcionario WHERE id_funcionario = A.id_funcionario) AS nome_funcionario, 
                  (SELECT nome_usuario FROM usuario WHERE id_usuario = A.id_usuario) AS nome_usuario, 
                  (SELECT descricao_produto FROM produto WHERE codigo_produto = A.cod_produto) AS descricao_produto
                  FROM mov_estoque A WHERE status = 'Saida' 
                  ORDER BY A.id_mov DESC";

                  //echo $sql;
    $result = mysqli_query($okdb,$sql);///comando para mostrar todos os elementos da tabela */

     
  ///select faz a consulta no banco e mostra em ordem de cadastro. mais novos primeiro end                     
        
	   $conar = 0;
           $array_mov=array();
	   while($rows = $result->fetch_assoc()){
       $conar ++;

   
       $array_mov[$conar]['nome_usuario']        = $rows['nome_usuario']; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['nome_funcionario']    = $rows['nome_funcionario'] ; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['codigo_funcionario']  = $rows['codigo_funcionario'] ; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['cod_produto']         = $rows['cod_produto']; ///recebe os valores e passa os valores para array_mov
        $array_mov[$conar]['descricao_produto']  = $rows['descricao_produto']; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['status']              = $rows['status']; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['motivo']              = $rows['motivo']; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['quantidade']          = $rows['quantidade']; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['saldo']               = $rows['saldo']; ///recebe os valores e passa os valores para array_mov
       $array_mov[$conar]['data']                = $rows['data']; ///recebe os valores e passa os valores para array_mov
}

}

?>