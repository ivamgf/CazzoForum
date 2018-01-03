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
	     <title>Catálogo de Cursos</title>
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
		 .container3{
                     width:1140px;
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
                                  <li><a href="sairInst.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                             <div class="container3">
                                     <div class="panel panel-default">
                                                 <div class="panel-heading"><h5>Catálogo de Cursos</h5></div>
                                                 <div class="panel-heading"><h5><a href="dashboard2.php">Painel de Controle</a></h5></div>
                                                 <br>										     
                                                  
                                                  <!--Bloco de código de consulta-->
                                                  <?php

                                                    //Código de conexão
                                                    include "conexao.php";
                                                    //Código de conexão                                        

                                                    //Código de consulta
                                                    $usuario_usu=$_SESSION['usuario2_usu'];                                                    
                                                    $sql_consultar = mysqli_query($link, 
                                                            "SELECT id_cursos_cur, st_titulo_cur, st_descricao_cur,"
                                                            . "st_publico_cur, nu_valor_cur  "
                                                            . "FROM cadCursos_cur ORDER BY id_cursos_cur ");
                                                            while($row = mysqli_fetch_array($sql_consultar)){
                                                                            $id_cursos_cur = $row['id_cursos_cur'];
                                                                            $st_titulo_cur = $row['st_titulo_cur'];
                                                                            $st_descricao_cur = $row['st_descricao_cur'];
                                                                            $st_publico_cur = $row['st_publico_cur'];
                                                                            $nu_valor_cur = $row['nu_valor_cur'];

                                                    //Código de consulta                                                                                                                                

                                                            ?>  
                                                    
                                                   <!--Bloco de código de consulta--> 
                                                     
                                                  <!-- Bloco de código da tabela  --> 
                                                  <table>
                                                      <tr>
                                                          <td>
                                                              <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                              <!-- Media top -->
                                                                <div class="media">
                                                                  <div class="media-left media-top">
                                                                      <img src="imagens/player.png" class="media-object" style="width:60px">
                                                                  </div>
                                                                  <div class="media-body">
                                                                    <h4 class="media-heading"><?php echo $st_titulo_cur ?></h4>
                                                                    <p><?php echo $st_descricao_cur ?></p>
                                                                    <p><h3>R$ <?php echo $nu_valor_cur ?></h3></p>
                                                                  </div>
                                                                    <div class="media-right media-top">
                                                                        <a href="msgCurso.php">Comprar</a>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <!-- Media top -->
                                                          </td>                                                          
                                                      </tr>
                                                      <?php
                                                 }
                                            ?>
                                                  </table>
                                                  <!-- Bloco de código do tabela  -->
                                                     
                                                 
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
