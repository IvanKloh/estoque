
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/10/2020 até 30/12/2020
*/
	///funçao inserirEpi start
			function inserirEpi(produto,codigoProduto,fabricante,quantidadeBaixa,quantidadeAlerta,quantidadeBoa){

				if(produto=="" || codigoProduto=="" || fabricante==""|| quantidadeBaixa ==""|| quantidadeAlerta==""|| quantidadeBoa==""){
				  document.getElementById("txtHint").innerHTML= alert('Produto Não Cadastrado');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){

					  var meuJson = JSON.parse(xmlhttp.responseText);
					 alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      //console.log(xmlhttp.responseText);
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

 					// alert(st);
				  
				if(st=="error" ){///condição para o alert
					//alert (vl);
					if(vl=='7'){

					alert('Código do Produto Já Cadastrado. Por favor Cadastre Outro!');
					location.href='../visao/inserirEpi.php';
					}
					
					
				}
				//alert(vl) ;

				if(vl == '1'){///condição para o alert
								//alert(vl) ;
					alert('Produto Cadastrado');
			   		location.href='../visao/listarEpi.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/inserirEpi.php?produto="+produto+"&codigoProduto="+codigoProduto+"&fabricante="+fabricante+"&quantidadeBaixa="+quantidadeBaixa+"&quantidadeAlerta="+quantidadeAlerta+"&quantidadeBoa="+quantidadeBoa,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					

			}
///funçao inserirEpi end

///função buscarEpi start
			function buscarEpi(produto){
				if(produto=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarEpi.php?produto="+produto,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
///função buscarEpi End			

///funçao de alterarEpi start
			function alterarEpi(produto,codigoProduto,fabricante,quantidadeBaixa,quantidadeAlerta,quantidadeBoa,lid){
				if(produto=="" || codigoProduto=="" || fabricante==""|| quantidadeBaixa ==""|| quantidadeAlerta==""|| quantidadeBoa=="" || lid==""){
					alert('Falha ao Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Produto Alterado');
			   		location.href='../visao/listarEpi.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarEpi.php?produto="+produto+"&codigoProduto="+codigoProduto+"&fabricante="+fabricante+"&quantidadeBaixa="+quantidadeBaixa+"&quantidadeAlerta="+quantidadeAlerta+"&quantidadeBoa="+quantidadeBoa+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
///função alterarEPi End

///funçao de limpar start
			function limpar(){
				document.getElementById('produto').value='';
				document.getElementById('codigoProduto').value='';
				document.getElementById('fabricante').value='';
				document.getElementById('quantidadeBaixa').value='';
				document.getElementById('quantidadeAlerta').value='';
				document.getElementById('quantidadeBoa').value='';
			}
///função limpar End

///funçao inserirFuncionario start
			function inserirFuncionario(nome,codigoFuncionario,funcao,sexo,nasc,adm){
				if(nome=="" || codigoFuncionario=="" || funcao=="" || sexo=="" || nasc=="" || adm=="" ){
				  document.getElementById("txtHint").innerHTML= alert('Funcionário Não Cadastrado');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Funcionário Cadastrado');
			   		location.href='../visao/listarFuncionario.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/inserirFuncionario.php?nome="+nome+"&codigoFuncionario="+codigoFuncionario+"&funcao="+funcao+"&sexo="+sexo+"&nasc="+nasc+"&adm="+adm,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}
///funçao inserirFuncionario  End	

///funçao buscarFuncionario start

			function buscarFuncionario(nome){
				if(nome=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarFuncionario.php?nome="+nome,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
///funçao buscarFuncionario End	

///funçao de alterarFuncionario start
			function alterarFuncionario(nome,codigoFuncionario,funcao,sexo,nasc,adm,lid){
				if(nome=="" || codigoFuncionario =="" || funcao=="" || sexo==""|| nasc==""|| adm==""|| lid==""){
					alert('Falha ao Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Funcionário Alterado');
			   		location.href='../visao/listarFuncionario.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarFuncionario.php?nome="+nome+"&codigoFuncionario="+codigoFuncionario+"&funcao="+funcao+"&sexo="+sexo+"&nasc="+nasc+"&adm="+adm+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
///função alterarFuncionario End

///funcao limparUsuario start
		function limparFuncionario(){
				document.getElementById('nome').value='';
				document.getElementById('codigoFuncionario').value='';
				document.getElementById('funcao').value='';
				document.getElementById('sexo').value='';
				document.getElementById('nasc').value='';
				document.getElementById('adm').value='';
				
			}
///funcao limparUsuario End

///funçao de sair start
			function sair(host){
				var r = confirm("Deseja Realmente Sair??");
				if (r==true){
					window.location.href = "http://"+host+"/estoque/controle/sair.php"
				}
			}
///função sair End

///funçao de inatividade start
			var tempo = 0;
			var mexer=0;
			var clicar=0;
			var tecla=0;



			setInterval(function(){
				tempo++;
			///movimento do cursor start
	

				document.onmousemove =function(){///função onde mexe o mause
					mexer = 1;
				}
				document.onmousedown =function(){///função onde clicar os botões do mause
					clicar = 1;	
				}
				document.onkeypress =function(){///função quando aperta uma tecla do teclado
					tecla = 1;	
				}
				
				/*var data = new Date();
				var hora = data.getHours();
				var min = data.getMinutes();
				var seg = data.getSeconds();
				console.log(hora+":"+min+":"+seg);*/
				//console.log(mexer);
				if(mexer == 1){///quando mexer o mause retorna 1 e começa a contagem de novo
					 mexer = 0;
					 tempo = 0;
					// console.log('Mexeu');
				}
				if (clicar ==1) {//quando clicar o botão do mause retorna 1 e começa a contagem de novo
					 clicar = 0;
					 tempo = 0;
					// console.log('clicar');
				}
				if (tecla == 1) {//quando aperta uma tecla retorna 1 e começa a contagem de novo
					 tecla = 0;
					 tempo = 0;
					 //console.log('tecla');

				}
					
				if(tempo>=1200){//quando ficar mais de 15 segundos de inatividade da o alerte e sai do sistema
				tempo = 0;
					alert('Tempo de Sessão Expirado');
					window.location.href=(window.location.protocol + "//" +window.location.host + "/" +"estoque/controle/sair.php"); 
					
				}

			}, 1000);

///funçao de inatividade end
		
///função insereUsuario start
			function insereUsuario(nome_usuario,senha_usuario,id_funcionario,){
				if(nome_usuario== ""|| senha_usuario==""|| id_funcionario ==""){
				  document.getElementById("txtHint").innerHTML= alert('Usuário Não Cadastrado');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Usuário Cadastrado');
			   		location.href='../visao/listarUsuario.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/insereUsuario.php?nome_usuario="+nome_usuario+"&senha_usuario="+senha_usuario+"&id_funcionario="+id_funcionario,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}
///função insereUsuario end

///função buscarUsuario start
			function buscarUsuario(nome_usuario){
				if(nome_usuario=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarUsuario.php?nome_usuario="+nome_usuario,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
///função buscarUsuario end

///função alterarUsuario start
			function alterarUsuario(nome_usuario,senha_usuario,id_funcionario,lid){
				if(nome_usuario== ""|| senha_usuario==""|| id_funcionario ==""|| lid==""){
					alert('Falha ao Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Usuário Alterado');
			   		location.href='../visao/listarUsuario.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarUsuario.php?nome_usuario="+nome_usuario+"&senha_usuario="+senha_usuario+"&id_funcionario="+id_funcionario+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
///função alterarUsuario end

///função limparUsuario start
			function limparUsuario(){
				document.getElementById('nome_usuario').value='';
				document.getElementById('senha_usuario').value='';
				document.getElementById('id_funcionario').value='';
				
			}
///função limparUsuario end

///funcao de entrada start
			function entrada(usuario,codigo,status,quantidade){
				
				if(usuario=="" || codigo=="" || status=="" || quantidade==""){
				  document.getElementById("txtHint").innerHTML= alert('Movimento Não Cadastrado');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){

					  var meuJson = JSON.parse(xmlhttp.responseText);
					 //alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      //console.log(xmlhttp.responseText);
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

 					// alert(st);
				  
				if(st=="error" ){///condição para o alert
					//alert (vl);
					if(vl=='3'){
					alert('Produto Nao Cadastrado. Por favor Cadastre!');
			   		location.href='../visao/entrada.php';
					}
				}
				//alert(vl) ;

				if(vl == 1){///condição para o alert
					//alert(vl) ;
					alert('Entrega Cadastrada');
			   		location.href='../visao/listarMov.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/mov.inc.php?command=entrada&usuario="+usuario+"&codigo="+codigo+"&status="+status+"&quantidade="+quantidade,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}
///função eentrada End	

///funcao de limparEntrada start
			function limparEntrada(){
				document.getElementById('usuario').value='';
				document.getElementById('codigo').value='';
				document.getElementById('status').value='';
				document.getElementById('quantidade').value='';
			}
///funcao de limparEntrada End

///funcao de saida start

			function saida(usuario,funcionario,codigo,status,motivo,quantidade,codigoFuncionario){
					
				if(usuario==""|| funcionario==""  ||  codigo=="" || status=="" || motivo=="" || quantidade==""|| codigoFuncionario==""){
				  document.getElementById("txtHint").innerHTML= alert(' Entrega Não Cadastrada');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){

					  var meuJson = JSON.parse(xmlhttp.responseText);
					// alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

 					 // alert(st);
				  
				if(st=="error"){///condição para o alert
					//alert (vl);
					if(vl==3){
					alert('Produto Não Cadastrado. Por favor Cadastre!');
			   		location.href='../visao/saida.php';
					}
					
					if(vl==4){///condição para o alert
					alert('Funcionário Não Cadastrado. Por favor Cadastre!');
			   		location.href='../visao/saida.php';
				
					}
					if(vl==5){///condição para o alert
					alert('Produto e Funcionário Não Cadastrado. Por favor Cadastre!');
			   		location.href='../visao/saida.php';
				
					}
					if(vl==6){///condição para o alert
					alert('Estoque Vazio ou Quantidade Insuficiente');
			   		location.href='../visao/saida.php';
				
					}
				}

				if(vl == 1){///condição para o alert
					//alert(vl) ;
					alert('Entrega Cadastrada');
			   		location.href='../visao/listarMov.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/mov.inc.php?command=saida&usuario="+usuario+"&funcionario="+funcionario+"&codigo="+codigo+"&status="+status+"&motivo="+motivo+"&quantidade="+quantidade+"&codigoFuncionario="+codigoFuncionario,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}
///função saida End	

///funcao de limparSaida start
			function limparSaida(){
				document.getElementById('usuario').value='';
				document.getElementById('funcionario').value='';
				document.getElementById('codigoFuncionario').value='';
				document.getElementById('quantidade').value='';
				document.getElementById('produto').value='';
				document.getElementById('motivo').value='';
				document.getElementById('status').value='';
			}
///funcao de limparSaida End

///função buscaHistorico start

			function buscaHistorico(nome){
				if(nome=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscaHistorico.php?nome="+nome,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
///função buscaHistorico End

///função imprimir Start
			function imprimir(usuario,funcionario,codigo,status,motivo,quantidade){
				if(usuario==""|| funcionario=="" || codigo=="" || status=="" || motivo=="" || quantidade==""){
				  document.getElementById("txtHint").innerHTML= alert(' Falha na Impressão');//Nao teve
				  return;
				  } 
		
					alert('Deseja Imprimir?');
			   		location.href="../visao/rel_saida.php?command=saida&usuario="+usuario+"&funcionario="+funcionario+"&codigo="+codigo+"&status="+status+"&motivo="+motivo+"&quantidade="+quantidade;
				
				
			}

///função imprimir End

			
///funcao inicio Start
			function inicio(host){
				
					window.location.href = "http://"+host+"/estoque/visao/index.php"
				
			}
///função inicio End



/// funcao de filtros e relatorios do data tables Start
			 $(document).ready(function() {

			    // Setup - add a text input to each footer cell
			    $('#myTable thead tr').clone(true).appendTo( '#myTable thead' );
			    $('#myTable thead tr:eq(1) th').each( function (i) {
			        var title = $(this).text();
			        $(this).html( '<input type="text" placeholder="Procurar '+title+'" />' );
			 
			        $( 'input', this ).on( 'keyup change', function () {
			            if ( table.column(i).search() !== this.value ) {
			                table
			                    .column(i)
			                    .search( this.value )
			                    .draw();
			            }
			        } );
			    } );
			 
			 

			    var table = $('#myTable').DataTable( {
			         /*dom: 'Bfrtip',
			        buttons: [
			            'copy', 'csv', 'excel', 'pdf', 'print'
			        ],*/
			        orderCellsTop: true,
			        fixedHeader: true,

			          "bJQueryUI": true,
			                "oLanguage": {
			                    "sProcessing":   "Processando...",
			                    "sLengthMenu":   "Exibir _MENU_ Resultados",
			                    "sZeroRecords":  "Nenhum Resultado Encontrado.",
			                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ Resultados",
			                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
			                    "sInfoFiltered": "",
			                    "sInfoPostFix":  "",
			                    "sSearch":       "Procurar:",
			                    "sUrl":          "",
			                    "oPaginate": {
			                        "sFirst":    "Primeiro",
			                        "sPrevious": "Anterior",
			                        "sNext":     "Próximo",
			                        "sLast":     "Último"
			                    }
			                },
			                dom: 'Bfrtip',
			        buttons: [
			          { extend: 'copy', text: 'Copiar' }, 'csv', 'excel', 'pdf', 
			            
			             { extend: 'print', text: 'Imprimir' }
			        ]
			             

			    } );
			   
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			});


			} );



/// funcao de filtros e relatorios do data tables End

/// funcao para mostrar ou ocultar o quadro da previsao do tempo Start

			  function showElement() {
			        document.getElementById("mostraUsuario").style.display = "none";
			        document.getElementById("mostrar").style.display = "block";
			    }
			    function hideElement() {
			    	document.getElementById("mostraUsuario").style.display = "block";
			        document.getElementById("mostrar").style.display = "none";
			    }
			   
/// funcao para mostrar ou ocultar o quadro da previsao do tempo End







	
