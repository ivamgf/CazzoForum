<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8"> 
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
        <title>Efetuar Pagamento</title>        
    </head>
    
    <body> 
        
        <?php
        
     //Bloco de código include
     include 'conexao.php';
     //Bloco de código include 
     
     $id_cursos_cur = $_SESSION['id_cursos_cur'];
     $usuario_usu=$_SESSION['usuario_usu'];
         
//Bloco de código de inserção de curso
     $st_usuario_cdc = $_POST['usuario_usu'];          
     $st_titulo_cdc = $_POST['st_titulo_cdc'];      
     $nu_valor_cdc = $_POST['nu_valor_cdc'];
     $fl_liberado_cdc = 'N';
     $id_cursos_cdc = $_POST['id_cursos_cur'];
                    
     $sql = mysqli_query($link, "INSERT INTO cadCompras_cdc(st_usuario_cdc, st_titulo_cdc, nu_valor_cdc, fl_liberado_cdc, id_cursos_cdc ) 
	 VALUES ('$usuario_usu', '$st_titulo_cdc', '$nu_valor_cdc', '$fl_liberado_cdc', '$id_cursos_cur')");	
     
//Bloco de código de inserção de curso
    ?> 
     
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
                                    <li><a href="cadInstrutor.php"><span class="glyphicon glyphicon glyphicon-education"></span> Tornar-se Instrutor</a></li>
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
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="container2">
                             <div class="panel panel-default">
                                         <div class="panel-heading"><h5>Efetuar Pagamento</h5></div>
        <div class="panel-body">
        
        <br>
        <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">       
        <div class="alert alert-danger">
            <strong><p><h2>Parabéns por adquirir um curso conosco!</h2></p></strong>            
        </div>
            <p><h3>Para concluir a sua compra, Clique no link abaixo e efetue o pagamento.</h3></p>
            <p><h3>Após confirmação do pagamento, seu curso será liberado!</h3></p>      
        
        
        <div class="media-right media-top">
            <h2><a href="addCurso.php?id_cursos_cur=<?php echo $id_cursos_cur ?>">Efetuar Pagamento</a></h2>
        </div>
        </div>
        
        </div>
         </div>
          </div>
           </div>
            </div>
             </div>
               </div>
        
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
        
    </body>
</html>
