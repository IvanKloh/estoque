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
          //include ('../visao/inserirEpi.php');///inclusão do arquivo onde são digitados os valores  

      
      ///recebe valores atravez do metodo get do arquivo inserirEpi da pasta visão start
    		$produto          = $_GET["produto"]; ///recebe os valores passados a  produto
    		$codigo           = $_GET["codigoProduto"]; ///recebe os valores passados a  codigoProduto 
            $fabricante       = $_GET["fabricante"];///recebe os valores passados a  fabricante
    		$quantidadeBaixa  = $_GET["quantidadeBaixa"];///recebe os valores passados a  quantidadeBaixa
            $quantidadeAlerta = $_GET["quantidadeAlerta"];///recebe os valores passados a  quantidadeAlerta
            $quantidadeBoa    = $_GET["quantidadeBoa"];///recebe os valores passados a  quantidadeBoa
     ///recebe valores atravez do metodo get do arquivo inserirAlunos da pasta visão end
    	
    	/// Tratamento - Start 
    @$data = date('Y-m-d h:i:s',strtotime($data) );
    // Tratamento - End  
    
   ///onsulta na tabela produto pra ver se ja tem algum cadastrado com o codigo  start          
        
            $sql= "SELECT * FROM produto WHERE codigo_produto = '".$codigo."'";
           
           // echo $sql;
        
       		$resultProdutoEntrada = mysqli_query($okdb,$sql);

    		$rowsProdutoEntrada = $resultProdutoEntrada->fetch_assoc();
            $quantidadeProdutoEntrada = $rowsProdutoEntrada['codigo_produto'];
           
           if($quantidadeProdutoEntrada == true){ ///caso a consulta seje retorne 1 sera executado o error e caso seje falso sera feito o insert

                $strJsonEntrada = '{"status":"error","data":7}';
           		 echo $strJsonEntrada;

          
 ///onsulta na tabela produto pra ver se ja tem algum cadastrado com o codigo  start          
        
          }else{ 
///executera a QUERY start
          		  $execQuery = "
                              INSERT INTO produto 
                              		(
                              		 descricao_produto, 
                              		 codigo_produto, 
                                  	 fabricante,
                                     quantidadeBaixa,
                                   	 quantidadeAlerta,
                                   	 quantidadeBoa,
                              		 data
                              		 ) VALUES(
                              		    '".$produto."',
                              		    '".$codigo."',
                                        '".$fabricante."',
                                        '".$quantidadeBaixa."',
                                        '".$quantidadeAlerta."',
                                        '".$quantidadeBoa."',
                              		    '".date("Y-m-d H:i:s") ."'
                              		      ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              $strJsonOk = '{"status":"ok","data":1}';
            echo $strJsonOk;
          }
    	 ///executera a QUERY end	
    			?>

