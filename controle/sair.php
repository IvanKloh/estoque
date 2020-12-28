<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php


session_start();
	$_SESSION["login_ok"]=false;///login retornar falso ira destruir os valores armazenados em controleLogin e sera redirecionado o index 
	unset($_SESSION["controleLogin"]);
	header("Location:../index.php");

?>
