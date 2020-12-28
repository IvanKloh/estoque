<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php
  $server = $_SERVER['HTTP_HOST'];

  if (@$_GET[md5("erro")] ==  md5("fail")){
     echo" <script> alert('Usuário Não Cadastrado')</script>";///caso o usuario ou a senha esteja incorreta ira aparecer o alert
  }elseif (@$_GET['cb5e100e5a9a3e7f6d1fd97512215282'] == md5("s")) {
    echo "<script> alert('Você Deve Logar')</script>";///caso tente logar sem inserir os dados ou copiando a url da pagina e colando no browser ira aparecer o alert 
  }elseif(count($_GET)>0){
   header('location:../index.php ');
    exit();
    //var_dump($_GET);
   
  }
?>

<html lang= "pt-br">
  <head>
    <meta charset= "utf-8">
      <title>Login de acesso ao Estoque</title>
       <link rel="stylesheet" href="<?php echo "http://".$server."/estoque/css/login.css"?>"> <! -- acessa o arquivo de css para a parte estetica da pagina-->
   
  </head>
  <body>
    <div class="container"> 
    <center><div id="login" >
        <form method="post" action="<?php echo "http://".$server."/estoque/controle/"?>loginEstoque.php"> <! -- passa os dados desta pagina para fazer a validaçao no loginEstoque na pasta controle-->
   
          <h1><center>LOGIN DO ESTOQUE</center></h1>
      
            <label for="nome"> USUÁRIO </label><! -- caixa de texto para inserir o usuario--> 
            <input type= "text" name= "nome"id= "nome"><br><br>
     
            <label for="senha"> SENHA </label><! -- caixa de texto para inserir a senha-> 
            <input type= "password" name= "senha"name= "senha"> <br><br>
        
            <center><input type= "submit" value= "Enviar">&nbsp;&nbsp;
         
            <input type= "reset"  value= "Limpar"></center>
          </form>
        </div></center>  
      </div>
  </body>
</html>