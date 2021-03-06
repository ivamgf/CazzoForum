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
	     <title>CazzoForum</title>
		 <!-- Bloco de Título -->
		 
		 <!-- Bloco de Meta -->
	     <meta charset="utf-8" />
		 <meta name="viewport" content="width=device-width, user-scalable=no, 
                 intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		 <!-- Bloco de Meta -->
		 
		 <!-- Bloco de Link -->
		 <!-- Favicon -->
                 <link rel="shortcut icon" href="imagens/favicon.png" /><!-- Favicon -->
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
				  <li><a href="cadAluno.html"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
				  <li><a href="loginInstrutor.html"><span class="glyphicon glyphicon-log-in"></span> Login de Instrutor</a></li>
				  <li><a href="loginEad.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			  </div>		  
			 </nav>
         <!-- Bloco de código nav  -->  
        		 
         
         <!-- Bloco de código do Jumbotron  -->	
             <div class="container">
				  <div class="jumbotron">
					<h1><img src="imagens/logo.png" width="30%" /></h1> 
					<p>A mais nova plataforma EAD da Web! Realize já a sua matrícula!</p> 
					
					<!-- Bloco de Banner -->
					<div class="flexslider">
					  <ul class="slides">
						<li>
						  <img src="imagens/banner1.jpg" />
						  <p class="flex-caption">Alavanque sua empresa com cursos de administração e Negócios!</p>
						</li>
						<li>
						  <img src="imagens/banner2.jpg" />
						  <p class="flex-caption">Estude quando e onde quiser!</p>
						</li>
						<li>
						  <img src="imagens/banner3.jpg" />
						  <p class="flex-caption">Estude em casa através de seu PC, Tablet ou Smartphone!</p>
						</li>
						<li>
						  <img src="imagens/banner4.jpg" />
						  <p class="flex-caption">Faça um curso na CazzoFórum e amplie seus horizontes!</p>
						</li>
					  </ul>
					</div>
					<!-- Bloco de Banner -->
					 <div class="container">
					     <div class="well"><h3>Cursos em Destaque</h3></div>
					 </div>
					 
					 <div class="container">
					     <div class="well">
						     <h3>Site em Construção! Aguarde em breve!</h3>
						     <p><br><br><br><br><br><br><br></p>
						 </div>
					 </div>
					 
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
