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
				  <li><a href="#"><span class="glyphicon glyphicon glyphicon-education"></span> Tornar-se Instrutor</a></li>
				  <li><a href="cadAula.html"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login de Instrutor</a></li>
                                  <li><a href="loginEad.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				  <li><a href="sairInst.php><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			  </div>		  
			 </nav>
         <!-- Bloco de código nav  -->  
        		 
         <div class="container"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                 <p>Olá, <? echo $_SESSION['usuario2_usu']; ?>!</p>
                </div>
            </div>
        </div>
          
					
<!-- Bloco de código do Painel  -->

<div class="container">
     <div class="row">
             <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                     <div class="list-group">
                                  <a href="#" class="list-group-item disabled">Painel de Controle</a>
                                  <a href="dashboard2.php" class="list-group-item">Início</a>
                                  <a href="dashboardperfil2.php" class="list-group-item">Perfil</a>
                                  <a href="dashcursos2.php" class="list-group-item">Meus Cursos</a>
                                  <a href="novocurso.php" class="list-group-item">Cadastrar Novo Curso</a>
                                  <a href="novovideo.php" class="list-group-item">Cadastrar Novo Vídeo</a>
                                  <a href="dashcertificados2.php" class="list-group-item">Meus Certificados</a>
                                  <a href="catalogo2.php" class="list-group-item">Catálogo de Cursos</a>
                                  <a href="encerrar2.php" class="list-group-item">Encerrar Conta</a>
                                  <a href="#" class="list-group-item">Sair</a>
                         </div>
                 </div>
                 <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                     <div class="container2">
                             <div class="panel panel-default">
                                         <div class="panel-heading"><h5>Painel do Aluno</h5></div>
                                         <div class="panel-body">										     
                                             <div class="container">
                                                 <h3>Deseja Realmente Sair do CazzoForum?</h3>
                                             </div>
                                             <br>                                                                                     
                                             <div class="container">
                                                 <form class="formulario" name="formLogout" method="post" action="close.php">
                                                 <div class="row">
                                                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                         <button type="submit" class="btn btn-danger">
                                                             Sim
                                                         </button>
                                                     </div>
                                                 </div>
                                                 </form>
                                                 <br>
                                                 <div class="row">
                                                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                         <h5><a href="dashboard2.php">Voltar ao Painel de Controle</a></h5>
                                                     </div>
                                                 </div>                                                                                            
                                             </div>
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

