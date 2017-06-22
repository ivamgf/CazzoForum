<!-- Programa: Painel de Controle do TexKronos 1.0-->
<!-- Descrição: Painel de Controle com Menus e links do Aplicativos -->
<!-- Versão: 1.0 -->
<!-- Autor: Ivam Galvão Filho -->
<!-- Data: 31/01/2017 -->
<!-- Data de atualização: -->
<!doctype html>
<html lang="pt-br">
    <head>
	     <!-- Bloco de Título -->
		 <title>Painel de Controle</title>
		 <!-- Bloco de Título -->
		 
		 <!-- Bloco de Meta -->
		 <meta charset="utf">
	     <meta name="viewport" content="width=device-width, user-scalable=no, 
		 intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	     </meta>
		 <!-- Bloco de Meta -->
		 
		 <!-- Bloco de Link -->
		 <!-- Favicon --><link rel="shortcut icon" href="/Imagens/favicon.ico" /><!-- Favicon -->
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="/css/style.css">
		 <!-- Bloco de Link -->
		 
		 <!-- Bloco de Script -->
		 <script src="angular/angular.min.js"></script>
		 <script src="angular/angular-locale_pt-br.js"></script>         
         <script src="bootstrap/js/jquery.min.js"></script>
         <script src="bootstrap/js/bootstrap.min.js"></script>
	     <!-- Bloco de Script -->
		 
	</head>
    <body>
    
    <?php
//Bloco de código de conexão
         $host="localhost";
         $user="texkrono_tks";
	 $pass="tks987456";
	 $dbname="texkrono_texkronos_tks";
         $conexao = mysql_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysql_select_db($dbname)or die("Não foi possível realizar a conexão!");
         
//Bloco de código de conexão
//Bloco de código de sessão
        session_start();
      
          if (!isset($_SESSION["usuario_usu"]) || !isset($_SESSION["password_usu"])){
               header("Location: index.html");
               exit;
         }
//Bloco de código de sessão
   ?>
    
	<!-- Bloco de Cabeçalho DropDown Menu -->
	
	     <nav class="navbar navbar-default">
		     <!-- Bloco de Container com Link de HomePage -->
             <div class="container-fluid"><br>
             <div class="navbar-header">
                 <a class="navbar-brand" href="painel.php">TexKronos 1.0</a>
			 </div>
			 <!-- Bloco de Container com Link de HomePage -->
			
			 <!-- Bloco de Menu -->
             <ul class="nav navbar-nav">
            
			 <!-- Bloco de Menu com Glyphicon-->
			
			  
			     <div class="dropdown">
				 <li class="active">
				
			
			<button  class="btn btn-group" role="menu" type="button"  data-toggle="dropdown">
				    <span class="glyphicon glyphicon-menu-hamburger"></span>
                 </button>
               
                
			 <!-- Bloco de Menu com Glyphicon-->	

			 <!-- Bloco de Menu com Subníveis-->
                     <ul class="dropdown-menu">
                         
			 <!-- Bloco de códigos de Subnível -->             
		 
                         <li class="dropdown-submenu">
			 <!-- Bloco de códigos do Arquivo -->			 
			 <!-- Bloco de códigos de Nível 2 do menu -->			 
                             <a class="test" tabindex="-1" href="#">Arquivo 
							     <span class="caret"></span>
							 </a>							 		
                                 <ul class="dropdown-menu">
             <!-- Bloco de códigos de Nível 3 do menu -->	                                     			 
									 <li class="dropdown-submenu">
                                         <a class="test" href="#">Configurações
										 <span class="caret"></span></a>
                                             <ul class="dropdown-menu">
											     <li><a href="#">Balanceamento</a></li>
                                                 <li><a href="cadParSist.html" target="panelFrame">Parâmetros do Sistema</a></li>
                                                 
												 
												     <li class="dropdown-submenu">
                                                         <a class="test" href="#">Programação de Produção
										                     <span class="caret"></span>
													     </a>
                                                         <ul class="dropdown-menu">
                                                             
                                                             <li><a href="cadNecMaq.html" target="panelFrame">Necessidades de Máquinas</a></li>
												             
                                                         </ul>
                                                     </li>
									 
                                             </ul>
                                     </li>
			 <!-- Bloco de códigos de Nível 3 do menu -->
                                     
									 <li class="divider"></li>
									 
             <!-- Bloco de códigos de Nível 2 do menu -->
			 
			 						 
									 
                                 </ul>
                         </li>
			 <!-- Bloco de códigos do Arquivo -->	

			 
			 <!-- Bloco de códigos de Subnível -->
			 			 <!-- Bloco de códigos de Cadastro -->
						 <li class="dropdown-submenu">
                             <a class="test" href="#">Cadastros
								 <span class="caret"></span>
							 </a>
                                 <ul class="dropdown-menu">
                                     <li class="dropdown-submenu">
                                         <a class="test" href="#">Pessoas
								             <span class="caret"></span>
						            	 </a>
                                         <ul class="dropdown-menu">
                                             <li><a href="cadPesFis.html" target="panelFrame">Pessoas Físicas</a></li>
                                             <li><a href="cadPesJur.html" target="panelFrame">Pessoas Jurídicas</a></li>
							                 <li><a href="cadUsers.html" target="panelFrame">Usuários</a></li>
							                 <li><a href="consOper.php" target="panelFrame">Operadores</a></li>
                                         </ul>
                                     </li>
                                     
							         <li class="dropdown-submenu">
                                         <a href="cadMaq.html" target="panelFrame">Máquinas</a>
                                         </li>								 
										 
					                	 <li><a href="cadMov.html" target="panelFrame">Movimentos</a></li>
						                 
					                	 
						 						
						                 
						 <!-- Bloco de códigos de Cadastro -->
						 
                         
                                     </li>
                                 </ul>
						 <li class="divider"></li>
                         
						 <li><a tabindex="-1" href="cadOper.html" target="panelFrame">Operações</a></li>
                         <li><a tabindex="-1" href="#">Produtos</a></li>
						 
                         
						 <li class="divider"></li>
						 <li><a tabindex="-1" href="http://texkronos.com/dolibarr/index.php" target="_blank">ERP</a></li>
						 <li class="divider"></li>
						 
						 
                         
						 <li class="dropdown-submenu">
                             <a class="test" href="#">Ajuda
								 <span class="caret"></span>
						     </a>
                             <ul class="dropdown-menu">
                                 <li><a href="sobreSist.html" target="panelFrame">Sobre o Aplicativo</a></li>
                                 <li><a href="#">Documentação</a></li>
							     <li><a href="https://texkronos.com/maian/" target="_blank">Ajuda on-line</a></li>                                 
					         </ul>
                         </li>
										 
                     </ul>
                         </li>
						 
		  	 <!-- Bloco de Menu com Subníveis-->		 
					 
                 </li>		
                 </div>				 
			     
             </ul>
			 <!-- Bloco de Menu -->
			
			 <!-- Bloco de Formulário com Ferramenta de Busca -->
			 <form class="navbar-form navbar-right close" method="post" action="close.php">
                 <div class="input-group">
                     <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-log-out"></i></span>
			  <input type="submit" class="btn btn-default" value="Logout">
	             </div>                 
			             </div>
		         </div> 	 
             </form>
			 <!-- Bloco de Formulário com Ferramenta de Busca -->
			
             </div>
            
         </nav>
     <!-- Bloco de Cabeçalho DropDown Menu -->
     
	
	 <!-- Bloco de código de iframe -->
	 <div class="col-md-3"></div>
	     <div class="container col-xs-4 col-sm-4 col-md-5 col-lg-5">
	            <iframe name="panelFrame" src="iframe.html" height="1000" width="800" style="border:none" scroll="no"></iframe>
	     </div>
	 <!-- Bloco de código de iframe -->
  
  

	     
	 

     <!-- Bloco de Script Jquery -->	 
	 <script>
         $(document).ready(function(){
         $('.dropdown-submenu a.test').on("click", function(e){
             $(this).next('ul').toggle();
             e.stopPropagation();
             e.preventDefault();
             });
         });
     </script>
   <!-- Bloco de Script Jquery -->
	</body>
	
</html>	