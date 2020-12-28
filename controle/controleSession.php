<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php
$server = $_SERVER['HTTP_HOST'];


///controle de session do ususario start
session_start();
	if($_SESSION['controleLogin'] == false){ ///controle login retornar falso sera redirecionado para a  pagina de login com a alert
		header('location:../visao/loginEstoque.php?cb5e100e5a9a3e7f6d1fd97512215282=03c7c0ace395d80182db07ae2c30f034');
	}
///controle de session do ususario end

?>