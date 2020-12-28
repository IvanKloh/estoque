<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php
         
            include('../modelo/conexao.php');///inclusao do arquivo que faz a conexão com o banco de dados

   ///recebe valores atravez do metodo get do arquivo alterarUsuario da pasta visão start
    			  $nome_usuario   = $_GET["nome_usuario"]; ///recebe os valores passados a nome_usuario 
            $senha_usuario  = $_GET["senha_usuario"];///recebe os valores passados a  senha_usuario
            $id_funcionario = $_GET["id_funcionario"]; ///recebe os valores passados a id_funcionario
    			  $lid            = $_GET["lid"]; ///recebe os valores passados a  lid
   ///recebe valores atravez do metodo get do arquivo alterarUsuario da pasta visão  end
    			// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery = "  
                           UPDATE usuario SET
                                  nome_usuario='".$nome_usuario."',
                                  senha_usuario= '".$senha_usuario."',
                                  id_funcionario ='".$id_funcionario."'
                              		
                              		WHERE 
                              	  id_usuario =  '".$lid."'" ;  

                        		     
               $result = mysqli_query($okdb,$execQuery)or 
               die(false);

                  echo true;
    	///executera a QUERY end	
    			?>
