<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php
       date_default_timezone_set('America/Sao_Paulo');
       include('../modelo/conexao.php');
       $server = $_SERVER['HTTP_HOST'];
   // @include('../controle/controleSession.php');///inclusao do arquivo de controleSession
       
      

        ///  include ('../visao/entrada.php');///inclusão do arquivo onde são digitados os valores  

            
      ///recebe valores atravez do metodo get do arquivo inserirAlunos da pasta visão start
    			  $usuario     = @$_GET["usuario"]; ///recebe os valores passados a  usuario
            $motivo      = @$_GET["motivo"]; ///recebe os valores passados a  motivo 
    			  $codigo      = @$_GET["codigo"]; ///recebe os valores passados a  codigo 
    		    $status      = @$_GET["status"]; ///recebe os valores passados a  status 
            $quantidade  = @$_GET["quantidade"]; ///recebe os valores passados a quantidade 
            $command     = @$_GET['command']; ///recebe os valores passados a command 
            $funcionario = @$_GET["funcionario"]; ///recebe os valores passados a  funcionario
                   
     ///recebe valores atravez do metodo get do arquivo inserirAlunos da pasta visão end<?php

?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Imprimir</title><link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/font-awesome-4.7.0/css/font-awesome.min.css"?>"> <! -- acessa o arquivo de css para a parte dos icónes da pagina-->
  </head>


<body>
   <link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/stilo.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->
  <script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes-->
   
  <div class="container">
      <div id="imprimirQuadro"><br><br><br>


        <label for="usuario">Usuario:</label><! -- caixa de texto para inserir o nome do usuario --> 
           <input type="text" id="usuario" name="usuario" value="<?php echo $usuario  ;?>"><br><br><! -- campo de textoc prenchido já com os valores-->
        
        <label for="funcionario">Funcionário:</label><! -- caixa de texto para inserir o funcioanario--> 
           <input type="text" id="funcionario" name="funcionario" value="<?php echo $funcionario  ;?>"><br><br> 

        <label for="produto">Produto:</label><! -- caixa de texto para inserir o codigo do produto--> 
            <input type="text" id="produto" name="produto" value="<?php echo $codigo  ;?>"> <br><br> 
        
        <label>
            <span>Status</span><! -- caixa de texto para a saida-> 
            <input type="text" name="status" id = "status" value="<?php echo $status  ;?>">
        </label> <br><br>   
        
        <label>
          <span>Motivo</span><! -- caixa de texto para inserir o motivo da saida--> 
            <input type="text" name="motivo" id = "motivo" value="<?php echo $motivo  ;?>">

        </label> <br><br>   
        
        <label for="quantidade">Quantidade:</label><! -- caixa de texto para inserir a quantidade--> 
          <input type="text" id="quantidade" value="<?php echo $quantidade  ;?>">
     
       <button class="voltarLista" onclick='history.go(-1)'>
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
              VOLTAR
        </button> <! -- botão de  voltar-->

        <button type="button" id="imprimir">
            OK
        </button><br><br>
        </div>
    </div>
   </body>
</html>