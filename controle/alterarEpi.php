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
    			  $produto          = $_GET["produto"]; ///recebe os valores passados a  produto 
    			  $codigo           = $_GET["codigoProduto"];///recebe os valores passados a codigoProduto
            $fabricante       = $_GET["fabricante"];///recebe os valores passados a fabricante
            $quantidadeBaixa  = $_GET["quantidadeBaixa"];///recebe os valores passados a  quantidadeBaixa
            $quantidadeAlerta = $_GET["quantidadeAlerta"];///recebe os valores passados a  quantidadeAlerta
            $quantidadeBoa    = $_GET["quantidadeBoa"];///recebe os valores passados a  quantidadeBoa
    			  $lid              = $_GET["lid"];///recebe o id que ta armazenado na variavel
   ///recebe valores atravez do metodo get do arquivo alterarAlunos da pasta visão  end
    			// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery =             
                      "  UPDATE produto SET
                      		
                          		 descricao_produto= '".$produto."',
                           		 codigo_produto ='".$codigo."',
                               fabricante ='".$fabricante."',
                               quantidadeBaixa ='".$quantidadeBaixa."',
                          		 quantidadeAlerta ='".$quantidadeAlerta."',
                               quantidadeBoa ='".$quantidadeBoa."' 
                          		 WHERE 
                          		 id_produto =  '".$lid."'" ;  

                        		     
               $result = mysqli_query($okdb,$execQuery)or 
               die(false);

                  echo true;
    	///executera a QUERY end	
    			?>
