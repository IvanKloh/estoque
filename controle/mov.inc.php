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
        //include ('../index.php');

        ///  include ('../visao/entrada.php');///inclusão do arquivo onde são digitados os valores  

            
      ///recebe valores atravez do metodo get do arquivo inserirAlunos da pasta visão start
    			  $usuario     = @$_GET["usuario"]; ///recebe os valores passados a  usuario 
            $motivo      = @$_GET["motivo"]; ///recebe os valores passados a  motivo 
    			  $codigo      = @$_GET["codigo"]; ///recebe os valores passados a  codigo 
    		    $status      = @$_GET["status"]; ///recebe os valores passados a  status 
            $quantidade  = @$_GET["quantidade"]; ///recebe os valores passados a quantidade 
            $command     = @$_GET['command']; ///recebe os valores passados a command 
            $funcionario = @$_GET["funcionario"]; ///recebe os valores passados a  funcionario
            $codigoFuncionario= @$_GET["codigoFuncionario"];///recebe os valores passados ao  codigo do funcionario
     ///recebe valores atravez do metodo get do arquivo inserirAlunos da pasta visão end
 


    ////insert  de entrada start
             if($command == 'entrada'){
    ///select para consultar no banco e retornar a quantidade start
              $sql = "SELECT COUNT(*)
                AS
                quantidade
              FROM produto
               WHERE 
               codigo_produto=
               '".$codigo."'";

  
     $resultProdutoEntrada = mysqli_query($okdb,$sql);

     $rowsProdutoEntrada = $resultProdutoEntrada->fetch_assoc();
           $quantidadeProdutoEntrada = $rowsProdutoEntrada['quantidade'];
    ///select para consultar no banco e retornar a quantidade end      
           if($quantidadeProdutoEntrada ==0){ ///caso retorne  0 ira dar o error caso contrario ira fazer o insert

                $strJsonEntrada = '{"status":"error","data":3}';
            echo $strJsonEntrada;

        
         }else{ 
    ///insert da entrada start
              $execQuery = "
                            INSERT INTO mov_estoque
                            		(
                            		 id_usuario,
                            		 cod_produto, 
                            		 status,
                                 motivo,
                                 quantidade,
                                 data
                            		 ) VALUES(
                            		      '".$usuario."',
                                      '".$codigo."',
                            		      '".$status."',
                                        'entrada',
                                      '".$quantidade."',
                                      '".date("Y-m-d H:i:s") ."'
                            		      ); ";


                             // echo $execQuery; 
           $result = mysqli_query($okdb,$execQuery)or 
           die(false);

    ///insert da entrada end
    
    $idEntrada = mysqli_insert_id($okdb);
        ///select qua faz o calculo do saldo start, IFNULL transforma valor nulo em 0
           $sqlEntrada="SELECT
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada') AS Entrada, 
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Saida') AS Saida, 
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada')-(SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Saida') AS saldo FROM mov_estoque A 
                            WHERE A.cod_produto = '".$codigo."' GROUP BY A.cod_produto
                     ; ";
                     //echo $sqlEntrada;
        ///select qua faz o calculo do saldo end,
           $resultSaldoEntrada = mysqli_query($okdb,$sqlEntrada);
                     
                   //echo $sqlEntrada;
            $rows = $resultSaldoEntrada->fetch_assoc();

            $saldoEntrada=$rows['saldo'];


         
/// faz o update na tabela depois que tem o valor de saldo
           $updateEntrada="UPDATE 
                          `mov_estoque` SET `saldo` = '".$saldoEntrada."' WHERE `mov_estoque`.`id_mov` = '".$idEntrada."';";  

            //echo $updateEntrada;

          mysqli_query($okdb,$updateEntrada)or 
           die(false);

              
               $strJsonOk = '{"status":"ok","data":1}';
            echo $strJsonOk;
            }

  ////insert  de entrada end

  ////insert  de saida start            
            }elseif ($command == 'saida') {
                    
//contole de cadastro de funcionario- start
// Consulta que pega todos os produtos e o nome da categoria de cada um
///consulta pra ver se o Produto ta cadastrado start
 $sql = "SELECT COUNT(*)
                AS
                quantidade
              FROM produto
               WHERE 
               codigo_produto=
               '".$codigo."'";


  
   
     $resultProdutoSaida = mysqli_query($okdb,$sql);

     $rowsProdutoSaida = $resultProdutoSaida->fetch_assoc();

           $quantidadeProdutoSaida = $rowsProdutoSaida['quantidade'];
///consulta pra ver se o Produto ta cadastrado end
///consulta pra ver se o funcionario ta cadastrado start           

           $sqlCodigo = "SELECT COUNT(*)
                AS
                quantidade
              FROM funcionario
               WHERE 
               codigo_funcionario=
               '".$codigoFuncionario."'";

//echo $sqlCodigo;
  
   
     $resultCodigo = mysqli_query($okdb,$sqlCodigo);

     $rowsCodigo = $resultCodigo->fetch_assoc();
          $codigoFuncionario = $rowsCodigo['quantidade'];


/// consulta para validar o estoque sempre fique positivo start
           $sqlValida="SELECT
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada') AS Entrada, 
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Saida') AS Saida, 
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada')-('".$quantidade."') AS saldo FROM mov_estoque A 
                            WHERE A.cod_produto = '".$codigo."' GROUP BY A.cod_produto
                     ; ";
                     //echo $sqlValida;
        ///select qua faz o calculo do saldo end,
           $resultValida = mysqli_query($okdb,$sqlValida);
                     
                   //echo $sqlEntrada;
            $rowsValida = $resultValida->fetch_assoc();

            $saldoValida=$rowsValida['saldo'];

           // echo $saldoValida;
     ///////////////
             $sqlValidaZero="SELECT
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada') AS Entrada, 
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Saida') AS Saida, 
                         (SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada')-(SELECT IFNULL(SUM(quantidade),0)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Saida') AS saldo FROM mov_estoque A 
                            WHERE A.cod_produto = '".$codigo."' GROUP BY A.cod_produto
                     ; ";
                     //echo $sqlEntrada;
        ///select qua faz o calculo do saldo end

  /// consulta para validar o estoque sempre fique positivo end 
            $resultValidaZero = mysqli_query($okdb,$sqlValidaZero);
                     
                   //echo $sqlEntrada;
            $rowsValidaZero = $resultValidaZero->fetch_assoc();

            $saldoValidaZero=$rowsValidaZero['saldo'];

           // echo $saldoValida1;
///consulta pra ver se o funcionario ta cadastrado end

           //echo $quantidadeProdutoSaida."<br>";
          //echo $codigoFuncionario;
         if($quantidadeProdutoSaida == 0 or $codigoFuncionario == 0 or $saldoValida < 0 or $saldoValidaZero <= 0 ){

        if ($quantidadeProdutoSaida == 0 and $codigoFuncionario == 0) {
           $strJsonErro = '{"status":"error","data":5}';
            echo $strJsonErro;

         } elseif($quantidadeProdutoSaida == 0){

           $strJsonSaida = '{"status":"error","data":3}';
            echo $strJsonSaida;


            }elseif ($codigoFuncionario == 0 )  {
              $strJsonFuncionario = '{"status":"error","data":4}';
            echo $strJsonFuncionario;
           
          }elseif($saldoValida < 0){

           $strJsonSaida = '{"status":"error","data":6}';
            echo $strJsonSaida;
          }elseif($saldoValidaZero <= 0){

           $strJsonSaida = '{"status":"error","data":6}';
            echo $strJsonSaida;


            }
        

            }else{ 

 
//contole de cadastro de funcionario- end

/// insert da saida start

                     $saida = "
                              INSERT INTO mov_estoque
                                  (
                                   id_usuario,
                                   id_funcionario, 
                                   codigo_funcionario,
                                   cod_produto, 
                                   status,
                                   motivo,
                                   quantidade,
                                   data
                                   ) VALUES(
                                        '".$usuario."',
                                        '".$funcionario."',
                                        '".$codigoFuncionario."',
                                        '".$codigo."',
                                        '".$status."',
                                        '".$motivo."',
                                        '".$quantidade."',
                                        '".date("Y-m-d H:i:s") ."'
                                        ); "; 
              $resultSaida = mysqli_query($okdb,$saida)or 
              die(false);

             $idSaida = mysqli_insert_id($okdb);
  /// insert do banco end
 ///select qua faz o calculo do saldo start
             $sqlSaida="SELECT
                            (SELECT SUM(quantidade)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada') AS Entrada, 
                            (SELECT SUM(quantidade)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Saida') AS Saida, 
                            (SELECT SUM(quantidade)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Entrada')-(SELECT SUM(quantidade)AS total FROM mov_estoque WHERE cod_produto=A.cod_produto AND status='Saida') AS saldo 
                            FROM mov_estoque A 
                            WHERE A.cod_produto = '".$codigo."' GROUP BY A.cod_produto
                     ; ";
 ///select qua faz o calculo do saldo end             
            $resultSaldoSaida = mysqli_query($okdb,$sqlSaida);
                     
                   // echo $sql;
            $rows = $resultSaldoSaida->fetch_assoc();

            $saldoSaida=$rows['saldo'];

           


         


/// faz o update na tabela depois que tem o valor de saldo
           $updateSaida="UPDATE 
                        `mov_estoque` SET `saldo` = '".$saldoSaida."' WHERE `mov_estoque`.`id_mov` = '".$idSaida."';";  

            //echo $update;

  mysqli_query($okdb,$updateSaida)or 
           die(false);
              
              
             $strJsonOk = '{"status":"ok","data":1}';
            echo $strJsonOk;
         // echo '1';
            }
          }
              
  ////insert  de saida End
 ///executera a QUERY end	
           


        
 ?>