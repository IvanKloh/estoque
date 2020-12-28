<?php
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
?>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://apiadvisor.climatempo.com.br/api/v1/forecast/locale/5136/days/15?token=27a5c9eef5a500baf063c5e8b6019192",///api com o token de autenticação
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cookie: __cfduid=d0111a3e1515c8003021ffefa3e2e5d3c1605052168"
  ),
));

$response = curl_exec($curl);
$response = json_decode($response,true);


curl_close($curl);
  echo '<pre>';
	  $manha =$response['data'][0]['text_icon']['text']['phrase']['morning'];///consulta da api q retorna a condição climatica no periodo da manha
	  $tarde = $response['data'][0]['text_icon']['text']['phrase']['afternoon'];///consulta da api q retorna a condição climatica no periodo da tarde
	  $noite = $response['data'][0]['text_icon']['text']['phrase']['night'];///consulta da api q retorna a condição climatica no periodo da noite
	  $dia = $response['data'][0]['date_br'];///consulta da api q retorna o dia
	  $temMin =$response['data'][0][ 'temperature']['min'];///consulta da api q retorna a temperatura minima	
	  $temMax =$response['data'][0][ 'temperature']['max'];///consulta da api q retorna a temperatura maxima

		  //var_dump($response['data']);
		  
	  //var_dump($response['data'][0]['text_icon']['text']['phrase']['morning']);
	   //echo $dia."<br>";
	   //echo $temMin."<br>"; 
  	     //echo $temMax."<br>";
	   //echo $manha."<br>";
	  //echo $tarde."<br>";
  	   //echo $noite."<br>";
  	    
  	      
	 
  echo '</pre>';
		$diaNuvem = "Sol com algumas nuvens";
		$diaLimpo = "Sol";
		$diaRaio = "Sol, pancadas de chuva e trovoadas";
		$diaRaio1 = "Sol, pancadas de chuva e trovoadas.";
		$diaChuva="Sol com muitas nuvens e chuva";
		$diaChuva1="Sol e chuva";
		$diaMuitasNuvens ="Sol com muitas nuvens";
		$nubladoChuva = "Nublado com chuva";
		//$Chuva = 
		$noiteLimpo = "Tempo aberto";
		$noiteNuvem ="Algumas nuvens";
		$noiteChuva="Muitas nuvens e chuva";
		$noiteChuva1= "Noite com chuva";
		$noiteRaio = "Muitas nuvens, chuva e raios";
		$noiteRaios = "Noite com pancadas de chuva e trovoadas";
		$noiteMuitasNuvens = "Noite com muitas nuvens";
		$chuva = "Chuvoso";
		$chuvaTempestade="Chuvoso com tempestades";

			if($_SERVER['REQUEST_URI']=='/estoque/index.php'){
				include("modelo/conexao.php");///inclusao do arquivo que faz a conexão com o banco de dados
				

			}else{
						
			
				include("../modelo/conexao.php");///inclusao do arquivo que faz a conexão com o banco de dados
				
		}		
						//$acaoLista = 'user';
				  date_default_timezone_set('America/Bahia');
				   
			
						$result = mysqli_query($okdb, "SELECT * FROM usuario  WHERE id_usuario ='". $_SESSION['id_usuario']."'"); ///consulta que pega o id do usuario logado, busca no banco e mostra na tela
				 //echo "Numero de cadastros: ".mysqli_num_rows($result); ///mostra a quantidade de linhas

					   $conar = 0;
				      $array_usuario=array();
					   while($rows = $result->fetch_assoc()){
				       $conar ++;
				 
				        $array_usuario[$conar]['nome_usuario']   = $rows['nome_usuario']; ///recebe os valores e passa os valores para array_usuario
				        $array_usuario[$conar]['senha_usuario']  = $rows['senha_usuario']; ///recebe os valores e passa os valores para array_usuario
				        $array_usuario[$conar]['id_funcionario'] = $rows['id_funcionario']; ///recebe os valores e passa os valores para array_usuario
				       
				       }
					
					$data = date("H");
					//echo $data;
					
				
				 	foreach ($array_usuario as $value) {
								

					
					if ($data>= 0 and $data<=12){
						echo ucwords($value['nome_usuario']." Seja <br>Bem Vindo!")."<br>"; 
						echo "A Manhã Será "."<br>";

						if($manha==$diaNuvem){
						?> <img src="<?php echo "http://".$server."/estoque/css/imagem/solNuvens.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php


						}elseif($manha == $diaLimpo){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/sol.tiff"?>"style="width:30px; height:30px;"/><br>
						<?php
							
						}elseif($manha == $diaChuva or $manha == $diaChuva1){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuvaD.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							
						}elseif($manha == $diaRaio or $manha == $diaRaio1){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/solChuva.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
						}elseif($manha == $diaMuitasNuvens){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/solNu.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							 
						}elseif($manha == $chuva){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuva.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							
						}elseif($manha == $chuvaTempestade){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuvaTempestade.tiff"?>"style="width:30px; height:30px;"/><br>
						<?php
							
						}elseif($manha == $nubladoChuva){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/nublado.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							
							}
										
						echo "Min: ".$temMin."<br>";
						echo "Max: ".$temMax."<br>";
						echo "Data: ".$dia."<br>";
  						
						

					}elseif ($data>= 12 and $data<=18){
						echo ucwords($value['nome_usuario']." Seja <br>Bem Vindo!")."<br>"; 
						echo "A Tarde Será "."<br>";
						if($tarde==$diaNuvem){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/solNuvens.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							 
						}elseif($tarde == $diaLimpo){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/sol.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							 
						}elseif($tarde == $diaChuva or $tarde == $diaChuva1){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuvaD.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							
						}elseif($tarde == $diaRaio or $tarde == $diaRaio1){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/solChuva.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
					}elseif($tarde == $diaMuitasNuvens){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/solNu.tiff"?>"style="width:30px; height:30px;"/><br>
						<?php
							 
						}elseif($tarde == $chuva){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuva.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							
						}elseif($tarde == $chuvaTempestade){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuvaTempestade.tiff"?>"style="width:30px; height:30px;"/><br>
						<?php
							
						}elseif($tarde == $nubladoChuva){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/nublado.tiff"?>"style="width:30px; height:30px;"/><br>
						<?php
							
							}
						
						echo "Min: ".$temMin."<br>";
						echo "Max: ".$temMax."<br>";
						echo "Data: ".$dia."<br>";
  
						
					
					}elseif ($data>= 18 and $data<=23 ){
						echo ucwords($value['nome_usuario']." Seja <br> Bem Vindo!")."<br>"; 
						echo "A Noite Será "."<br>";

					

						if($noite==$noiteNuvem){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/noiteNuvens.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							
						}elseif($noite == $noiteLimpo){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/noite.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							 
						}elseif($noite == $noiteChuva or $noite == $noiteChuva1){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuvaN.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							 
						}elseif($noite == $noiteRaio or $noite == $noiteRaios){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/noiteChuva.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
						}elseif($noite == $noiteMuitasNuvens){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/noiteNu.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
						
						}elseif($noite == $chuva){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuva.tiff"?>"style="width:30px; height:30px;"/><br>
						<?php
							
						}elseif($noite == $chuvaTempestade){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/chuvaTempestade.tiff"?>"style="width:30px; height:30px;" /><br>
						<?php
							
						}elseif($noite == $nubladoChuva){
							?> <img src="<?php echo "http://".$server."/estoque/css/imagem/nublado.tiff"?>"style="width:30px; height:30px;"/><br>
						<?php
							
							}					
						echo "Min: ".$temMin."<br>";
						echo "Max: ".$temMax."<br>";
 						echo "Data: ".$dia."<br>";
						}
					}
			 echo '</pre>';
			 ?> 