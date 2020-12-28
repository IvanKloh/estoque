<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php
         
           include('../modelo/conexao.php');///inclusao do arquivo que faz a conexão com o banco de dados

   ///recebe valores atravez do metodo get do arquivo alterarAlunos da pasta visão start
    			  $nome   = $_GET["nome"];///recebe os valores passados a  nome 
            $codigo = $_GET["codigoFuncionario"];///recebe os valores passados ao codigo do funcionario 
    			  $funcao = $_GET["funcao"];///recebe os valores passados a  função
    			  $sexo   = $_GET["sexo"];///recebe os valores passados a  sexo
            $nasc   = $_GET["nasc"];///recebe os valores passados a  nasc
            $adm    = $_GET["adm"];///recebe os valores passados a  adm
    			  $lid    = $_GET["lid"];///recebe os valores passados a  lid
   ///recebe valores atravez do metodo get do arquivo alterarAlunos da pasta visão  end
    			// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery =" 
                          UPDATE funcionario SET
                      		
                            		 nome_funcionario= '".$nome."',
                                 codigo_funcionario= '".$codigo."',
                             		 funcao ='".$funcao."',
                            		 sexo = '".$sexo."',
                              	 data_nascimento = '".$nasc."',
                                 data_admisao = '".$adm."'
                            		 WHERE 
                            		 id_funcionario =  '".$lid."'" ;  

                        		     
               $result = mysqli_query($okdb,$execQuery)or 
               die(false);

                  echo true;
    	///executera a QUERY end	
    			?>
