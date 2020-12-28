<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
  		<?php
       date_default_timezone_set('America/Sao_Paulo');
       include('../modelo/conexao.php');///conexao com o banco de dados

          //include ('../visao/inserirFuncionario.php');///inclusão do arquivo onde são digitados os valores  

            
      ///recebe valores atravez do metodo get do arquivo inserirFuncionarios da pasta visão start
    			  $nome    = $_GET["nome"];  ///recebe os valores passados a  nome
            $codigo  = $_GET["codigoFuncionario"]; ///recebe os valores passados a  codigo do funcionario
    			  $funcao  = $_GET["funcao"]; ///recebe os valores passados a  funcao
    		    $sexo    = $_GET["sexo"]; ///recebe os valores passados a sexo 
            $nasc    = $_GET["nasc"]; ///recebe os valores passados a  nasc 
            $adm     = $_GET["adm"]; ///recebe os valores passados a  adm 
     ///recebe valores atravez do metodo get do arquivo inserirFuncionarios da pasta visão end
    	
    ///executera a QUERY start
               $execQuery = "
                              INSERT INTO funcionario 
                              		(
                              		 nome_funcionario,
                                   codigo_funcionario,
                              		 funcao, 
                              		 sexo,
                                   data_nascimento,
                                   data_admisao
                              		 ) VALUES(
                              		      '".$nome."',
                                        '".$codigo."',
                              		      '".$funcao."',
                              		      '".$sexo."',
                                        '".$nasc."',
                                        '".$adm."'
                              		       ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              echo true;
    	 ///executera a QUERY end	
    			?>

