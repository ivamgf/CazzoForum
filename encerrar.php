<?php session_start(); ?>
<!-- Programa: Homepage da plataforma EAD CazzoFórum-->
<!-- Descrição: Página inicial do sistema CazzoFórum -->
<!-- Versão: 1.0 -->
<!-- Autor: Ivam Galvão Filho -->
<!-- Data: 21/06/2017 -->
<!-- Data de atualização: -->

<!doctype html>
<html lang="pt-br">
    <head>
	     <!-- Bloco de Título -->
	     <title>Encerrar Conta</title>
		 <!-- Bloco de Título -->
		 
		 <!-- Bloco de Meta -->
	     <meta charset="utf-8"></meta>
		 <meta name="viewport" content="width=device-width, user-scalable=no, 
		 intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		 <!-- Bloco de Meta -->
		 
		 <!-- Bloco de Link -->
		 <!-- Favicon --><link rel="shortcut icon" href="imagens/favicon.png" /><!-- Favicon -->
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="css/style.css">
		 <!-- Link FlexSlider -->
		 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		 <!-- Link FlexSlider --->
		 <!-- Bloco de Link -->
		 
		 <!-- Bloco de Script -->
		 <script src="angular/angular.min.js"></script>         
                 <script src="bootstrap/js/jquery.min.js"></script>
                 <script src="bootstrap/js/bootstrap.min.js"></script>
		 <script src="jquery/jquery.min.js"></script>
		 <script src="flexslider/jquery.flexslider.js"></script>		 
		 <!-- Bloco de Script --> 
                 
                 <!-- Bloco de Style -->
                 <style>
		 .container2{
                     width:850px;
                 }            
               
                 </style>
                 <!-- Bloco de Style -->
		 
	</head>
	<body>
	 <!-- Bloco de código --> 
	 
	     <!-- Bloco de código nav  -->
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="index.php">CazzoForum</a>
				</div>
				<ul class="nav navbar-nav">
				  <li class="active"><a href="index.php">Página Principal</a></li>
				  				  
				  				  
				</ul>
				<form class="navbar-form navbar-left">
				  <div class="input-group">
					<input type="text" class="form-control" placeholder="Buscar Cursos">
					<div class="input-group-btn">
					  <button class="btn btn-default" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					  </button>
					</div>
				  </div>
				</form>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="cadInstrutor.html"><span class="glyphicon glyphicon glyphicon-education"></span> Tornar-se Instrutor</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
				  <li><a href="loginInstrutor.html"><span class="glyphicon glyphicon-log-in"></span> Login de Instrutor</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                  <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			  </div>		  
			 </nav>
         <!-- Bloco de código nav  -->  
        		 
         <div class="container"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                 <p>Olá, <? echo $_SESSION['usuario_usu']; ?>!</p>
                </div>
            </div>
        </div>
         			
	     <!-- Bloco de código do Painel  -->
					
	     <div class="container">
		 <div class="row">
		     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="list-group">
			     <a href="#" class="list-group-item disabled">Painel de Controle</a>
				 <a href="dashboard1.html" class="list-group-item">Início</a>
				 <a href="dashboardperfil.php" class="list-group-item">Perfil</a>
			         <a href="dashcursos.php" class="list-group-item">Meus Cursos</a>
				 <a href="dashcertificados.php" class="list-group-item">Meus Certificados</a>
				 <a href="catalogo.php" class="list-group-item">Catálogo de Cursos</a>
                                 <a href="#" class="list-group-item">Encerrar Conta</a>
				 <a href="sair.php" class="list-group-item">Sair</a>  						  
			</div>
		     </div>
			 <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			     <div class="container2">
				 <div class="panel panel-default">
				     <div class="panel-heading"><h5>Perfil do Aluno</h5></div>
					 <div class="panel-body">										     
				         <!-- Tabela -->			
				         <table class="table">
					     <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
						 <form class="formulario" method="post" action="delPesFis.php">
						 <!-- Linha 1.0 -->						
						 
						 <!-- Linha 1.0 -->
                                                 <?php 
                                                    //Código de conexão
                                                    include "conexao.php";
                                                    //Código de conexão                                        
                                                                                                        
                                                    //Código de consulta
                                                    $usuario_usu=$_SESSION['usuario_usu'];                                                    
                                                    $sql_consultar = mysqli_query($link, 
                                                            "SELECT id_aluno_cpf, st_nome_cpf "                                                            
                                                            . "FROM cadPessoaFs_cpf where st_usuario_cpf = '$usuario_usu' ");
                                                    while($row = mysqli_fetch_array($sql_consultar)){
                                                    $id_aluno_cpf = $row['id_aluno_cpf'];
                                                    $st_nome_cpf = $row['st_nome_cpf'];
                                                    
                                                    //Código de consulta
                                                 ?>
						 <!-- Linha 1.1 -->				
						 <tr>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-user"></i></span>					 
                                                                <input class="form-control" type="number" name="id_aluno_cpf" id="campoId" value="<?php echo $id_aluno_cpf ?>">
							</div>                                   
                                                                                                                
                                                    </td>
                                                    <td>					 
                                                        
                                                    </td>                                                 
						 </tr>	
                                                 
						 <!-- Linha 1.1 -->
                                                 
                                                 <!-- Linha 1.2 -->						
						 <tr>
                                                 <th>Nome</th><th></th>
						 </tr>
						 <!-- Linha 1.2 -->
						
                                                 <!-- Linha 1.21 -->				
						 <tr>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-user"></i></span>					 
                                                                <input class="form-control" type="text" name="st_nome_cpf" id="campoNome" value="<?php echo $st_nome_cpf ?>">
							</div>                            
                                                                                                          
                                                    </td>
                                                    <td>
                                                                                                                
                                                    </td>                                                 
						 </tr>	
                                                 
						 <!-- Linha 1.21 -->
                                                 
						 <!-- Linha 1.3 -->			
						 <tr>
                                                     <th><h5>Você deseja realmente encerrar sua conta?</h5></th><th></th><th></th>
															
						 </tr>				
						 <!-- Linha 1.3 -->
                                                 
                                                 <!-- Linha 1.4 -->			
						 <tr>
                                                     <th><h5>Se sim clique em encerrar conta!</h5></th><th></th><th></th>
															
						 </tr>				
						 <!-- Linha 1.4 -->
                                                 
                                                 <!-- Linha 1.5 -->			
						 <tr>
                                                     <td><button type="submit" class="btn btn-danger">Encerrar Conta</button></td><td></td>
															
						 </tr>				
						 <!-- Linha 1.5 -->
						  
							
                                                         <?php
                                                                }
                                                          ?>
							 <!-- Linha 1.15 -->													
							</form>  												
						             </div>
						     </table>			   
						     <!-- Tabela --> 
							 </div>
						     </div>
						 </div>
					     </div>
					 </div>
					</div>
					
					<!-- Bloco de código do Painel  -->
				
		 <!-- Bloco de código do Rodapé  -->	
		                
			<div class="rodape">
			     <div class="container-fluid"> 
					 <ul class="nav navbar-nav">
						<li><a href="quemSomos.html">Quem Somos</a></li>
						<li><a href="contatos.html">Contatos</a></li>
						<li><a href="#">Suporte</a></li>
						<li><a href="#">Termos de Uso</a></li>
						<li><a href="#">Política de Privacidade</a></li>
					 </ul>
					 <p class="navbar-text navbar-right"><i>Powered By PHP, MySql, HTML5, Bootstrap.</i></p>
			     </div>
			</div>
		 <!-- Bloco de código do Rodapé  -->
		 		 		 
	 <!-- Bloco de código -->  	
 
	</body>
</html>


