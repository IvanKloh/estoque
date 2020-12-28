<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php 
  session_start();
    include('../modelo/conexao.php');///faz o include do arquivo de conexao com o banco

      $nome = $_POST["nome"];///recebe os valore digitados no loginEstoque da pasta visao
      $senha = $_POST["senha"]; ///recebe os valore digitados no loginEstoque da pasta visao
//echo $nome;/
//echo $senha;
       $sql = "SELECT COUNT(*)
                AS
                quantidade,
                id_usuario AS id_usuario 
              FROM usuario
               WHERE 
               nome_usuario=
               '".$nome."' 
               and senha_usuario=
               '".$senha."'";
       
        //    echo $email.'<->'.$senha;
      //exit();
      $result = mysqli_query($okdb,$sql);
           
           $rows = $result->fetch_assoc();
           $quantidade = $rows['quantidade'];
           $idUsuario = $rows['id_usuario'];


       if($quantidade == 1){
          $_SESSION['login_ok']=true;//pode acessar
          $_SESSION['controleLogin'] = true;//esta logado
          $_SESSION['id_usuario']= $idUsuario;
          		header('location:../index.php ');
        }
        else{
          $_SESSION['login_ok']=false;//nao pode acessar
          unset($_SESSION['controleLogin']);//
            header('location:../visao/loginEstoque.php?a2843ebd03a7d7dd62b503956566a1cc=e11185b6e35c1b767174dc988aa0f179');
        }

 ?>

 

               