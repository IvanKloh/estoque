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
<title>Menu Movimentações</title>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"><! -- acessa o  link da parte estetica da biblioteca dataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css"><! -- acessa o  link da parte estetica da biblioteca dataTables-->
    <link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/font-awesome-4.7.0/css/font-awesome.min.css"?>"> <! -- acessa o arquivo de css para a parte dos icónes da pagina-->
	<link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/stilo.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->

	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script><! -- acessa o  link da biblioteca do ajax -->
	<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script><! -- acessa o  link do jquery-->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script><! -- acessa o  link do jquery com a biblioteca dataTables-->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script><! -- acessa o  link do jquery com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script><! -- acessa o  link dos botoes  com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script><! -- acessa o  link do jszip com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script><! -- acessa o  link para exportar para pdf com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script><! -- acessa o  link para exportar para pdf com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script><! -- acessa o  link dos botoes  com a biblioteca dataTables-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script><! -- acessa o  link do botoes com a biblioteca dataTables-->
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="jz9IUkGX"></script><! -- script para o comentario do facebook --> 
	<script language="JavaScript" src="<?php echo "http://".$server."/estoque/js/"?>funcoes.js"></script> <! -- percorre o arquivo das funçoes-->
	
	<div class="menu">
			<div id="banner"title="Meu Baner" onclick="inicio('<?php echo $server?>');">
		</div>
	

		 	<div class="menuEpi">
		 	
		 	  <a href="<?php echo "http://".$server."/estoque/visao/"?>relatoriosMenu.php">
		 	  <i class="fa fa-list-ul" aria-hidden="true"></i>
		 	   RELATÓRIO</a>
			</div>
			<div class="menuFuncionario">
			  <a href="<?php echo "http://".$server."/estoque/visao/"?>entrada.php"> 
			  <i class="fa fa-briefcase" aria-hidden="true"></i>
				ENTRADA</a>
			</div>
			<div class="menuMovimentacao">
			  <a href="<?php echo "http://".$server."/estoque/visao/"?>buscaHistorico.php">
			<i class="fa fa-search" aria-hidden="true"></i>
			HISTÓRICO</a>
			</div>
			<div class="menuUsuario">
			  <a href="<?php echo "http://".$server."/estoque/visao/"?>saida.php">
			  <i class="fa fa-list-alt" aria-hidden="true"></i>
			ENTREGA </a>
			</div>
			<div class="menuSair">
			  <a id ="sair" onclick="sair('<?php echo $server?>');">
			  	<i class="fa fa-sign-out" aria-hidden="true"></i>
			  		SAIR</a><br><br>
			</div>
				<div id="mostrar">
			<img onclick="hideElement();" src="<?php echo 'http://'.$server.'/estoque/css/imagem/'?>interrogacao.png"style="width: 90px; height: 90px;    margin-left: 877px; bottom: 395px; position: relative; background-color: #5c6d6c; border-radius: 11px; padding: 4px;">
	

		</div> 
			 <div id="mostraUsuario" onclick="showElement();" style="display: none;width: 150px;height: 174px; margin-left: 868px; position: relative; font-family: arial; font-size: 16; background-color: #5c6d6c; border-radius: 11px; text-align: center; padding: 1px 0px; color: yellow; bottom: 447px;"  >
			<?php
			if($_SERVER['REQUEST_URI']=='/estoque/index.php'){
				include('api/apiTempo.php');

				}else{
						
			include('../api/apiTempo.php');
		}
			?>
		</div>	
		</div>
		
		

			