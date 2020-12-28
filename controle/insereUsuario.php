<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
  		<?php
         include('../modelo/conexao.php');///conexao com o banco de dados
         ///include ('../visao/insereUsuario.php');///inclusão do arquivo onde são digitados os valores  

         
      ///recebe valores atravez do metodo get do arquivo inserirUsuario da pasta visão start
    			  $nome_usuario   = $_GET["nome_usuario"]; ///recebe os valores passados a nome_usuario
            $senha_usuario  = $_GET["senha_usuario"]; ///recebe os valores passados a senha_usuario
            $id_funcionario = $_GET["id_funcionario"]; ///recebe os valores passados a id_funcionario
    			 
     ///recebe valores atravez do metodo get do arquivo inserirUsuario da pasta visão end
    	/// Tratamento - Start 
    //$lnasc = date('Y-m-d',strtotime($lnasc) );
    // Tratamento - End  
    ///executera a QUERY start
               $execQuery = "
                              INSERT INTO usuario
                              		(
                              		 nome_usuario,
                                   senha_usuario,
                                   id_funcionario
                              	
                              		 ) VALUES(
                                      '".$nome_usuario."',
                              		    '".$senha_usuario."',
                                      '".$id_funcionario."'                      		     
                      		                ); ";
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

              echo $execQuery;
    	 ///executera a QUERY end	
    			?>

