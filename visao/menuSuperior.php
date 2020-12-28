<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php
//header("location: visao/listarAlunos.php")


    //var_dump($array_aluno);
	//echo mysqli_num_rows($result); //Mostra a quantidade de linhas ou rows
	//mysqli_free_result($result);//Apaga os valores no array 



///executar Query end
///var_dump($_SERVER);

$server = $_SERVER['HTTP_HOST'];
@include('../controle/controleSession.php');///inclusao do arquivo de controleSession
?>
<html lang= "pt-br">
  <head>
    <meta charset= "utf-8">
         <title>Menu</title>
      
   </head>
  <body>
  	<link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/font-awesome-4.7.0/css/font-awesome.min.css"?>"> <! -- acessa o arquivo de css para a parte dos icónes da pagina-->
  	<link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/stilo.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->
	<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes-->

		<div id="banner"title="Meu Baner">
		</div>
		 	<div class="menuEpi">
		 
			  <a href="<?php echo "http://".$server."/estoque/visao/"?>menuEpi.php">
			  <i class="fa fa-briefcase" aria-hidden="true"></i>
			  EPI</a>
			</div>

			<div class="menuFuncionario">
			  <a href="<?php echo "http://".$server."/estoque/visao/"?>menuFuncionario.php">
			  <i class="fa fa-male" aria-hidden="true"></i>
			  FUNCIONÁRIO</a>
			</div>

			<div class="menuMovimentacao">
			  <a href="<?php echo "http://".$server."/estoque/visao/"?>menuMov.php">
			  <i class="fa fa-exchange" aria-hidden="true"></i>
			  FLUXOS</a>
			</div>

			<div class="menuUsuario">
			  	<a href="<?php echo "http://".$server."/estoque/visao/"?>menuUsuario.php">
			  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
			  	USUÁRIOS</a>
			 </div>

			 <div class="menuSair">
			  	<a id ="sair" onclick="sair('<?php echo $server?>');">
			  	<i class="fa fa-sign-out" aria-hidden="true"></i>
			  	SAIR</a><br><br>
			</div>

			<div id="mostraUsuario" onclick="showElement();" style="display: none;width: 150px;height: 174px; margin-left: 867px; position: relative; font-family: arial; font-size: 16; background-color: #5c6d6c; border-radius: 11px; text-align: center; padding: 1px 0px; color: yellow; bottom: 447px;"  >
			<?php
			/// condição para fazer o include da api start
				if($_SERVER['REQUEST_URI']=='/estoque/index.php'){
					include('api/apiTempo.php');

				}else{
						
					include('../api/apiTempo.php');
				}
			///condição para fazer o include da api end
			?>
		</div>	
			<div id="mostrar">
			<img onclick="hideElement();" src="<?php echo 'http://'.$server.'/estoque/css/imagem/'?>interrogacao.png"style="width: 90px; height: 90px;margin-left: 877px; bottom: 395px; position: relative; background-color: #5c6d6c; border-radius: 11px; padding: 4px;">
	

		</div>			
	</body>
</html>
	