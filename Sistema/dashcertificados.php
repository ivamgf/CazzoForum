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
	     <title>Painel do Aluno</title>
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
		 .panel-body{
                     height: 730px;
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
				  <a class="navbar-brand" href="index.html">CazzoForum</a>
				</div>
				<ul class="nav navbar-nav">
				  <li class="active"><a href="index.html">Página Principal</a></li>
				  				  
				  <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="#">Administração</a></li>
					  <li><a href="#">Desenvolvimento</a></li>
					  <li><a href="#">Educação</a></li>
					  <li><a href="#">Informática</a></li>
					  <li><a href="#">Música</a></li>
					  <li><a href="#">Negócios</a></li>
					  <li><a href="#">Religião</a></li>
					  <li><a href="#">Saúde e Fitness</a></li>
					  <li><a href="#">Outros</a></li>
					</ul>
				  </li>
				  
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
                                  <li><a href="sair.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			  </div>		  
			 </nav>
         <!-- Bloco de código nav  -->  
        		 
         
         <!-- Bloco de código do Jumbotron  -->	
             <div class="container">
				  <div class="jumbotron">
					<h1><img src="imagens/logo.png" width="30%" /></h1> 
					<p>A mais nova plataforma EAD da Web! Realize já a sua matrícula!</p> 
					<p>Olá, <? echo $_SESSION['usuario_usu']; ?>!</p>
					<!-- Bloco de código do Painel  -->
					
					<div class="container">
					     <div class="row">
						     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							     <div class="list-group">
									  <a href="#" class="list-group-item disabled">Painel de Controle</a>
									  <a href="dashboard1.php" class="list-group-item">Início</a>
									  <a href="dashboardperfil.php" class="list-group-item">Perfil</a>
									  <a href="dashcursos.php" class="list-group-item">Meus Cursos</a>
									  <a href="dashcertificados.php" class="list-group-item">Meus Certificados</a>
									  <a href="catalogo.html" class="list-group-item">Catálogo de Cursos</a>
                                                                          <a href="encerrar.php" class="list-group-item">Encerrar Conta</a>
									  <a href="sair.html" class="list-group-item">Sair</a>
								 </div>
							 </div>
							 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							     <div class="container">
								     <div class="panel panel-default">
										 <div class="panel-heading"><h5>Meus Certificados</h5></div>
										 <div class="panel-body">										     
										     <!-- Tabela -->
											 <table class="table table-striped">
												 <!-- Linha 1.1 -->
												 <tr>
												 <th>ID</th><th>Certificado</th>
												 </tr>
												 <!-- Linha 1.1 -->
												 
												 <!-- Linha 1.2 -->
												 <tr>
												 <td></td><td></td>
												 </tr>
												 <!-- Linha 1.2 -->
												 
											 </table>
											 <!-- Tabela -->
										 </div>
									 </div>
								 </div>
							 </div>
						 </div>
					</div>
					
					<!-- Bloco de código do Painel  -->
					 
				  </div>
			 </div>
         <!-- Bloco de código do Jumbotron  -->		 
		
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
		 
		 <!-- jQuery -->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">x3C/script>')</script>

			<!-- FlexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
			
			<script>
			 // Can also be used with $(document).ready()
			 $(window).load(function() {
				  $('.flexslider').flexslider({
					animation: "slide"
				  });
				});
			</script>
			
			<!-- FlexSlider -->
			<!-- jQuery -->
		 		 
	 <!-- Bloco de código -->  	
 
	</body>
</html>
