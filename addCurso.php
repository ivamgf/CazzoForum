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
	     <title>Comprar Curso</title>
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
        
        <?php
        
        //Código de conexão
        include "conexao.php";
        //Código de conexão
        
        $id_cursos_cur = $_GET['id_cursos_cur']; 
        
        $_SESSION['id_cursos_cur']=$_GET['id_cursos_cur'];              
        ?>
        
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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="container3">
            <div class="panel panel-default">
            <div class="panel-heading"><h5>Efetuar Pagamento</h5></div>
            <div class="panel-heading"><h5><a href="dashboard1.php">Painel de Controle</a></h5></div>            
            <div class="panel-body">
            <br>										     

                         <!--Bloco de código de consulta-->
                         <?php

                           //Código de conexão
                           include "conexao.php";
                           //Código de conexão                                        

                           //Código de consulta
                           $usuario_usu=$_SESSION['usuario_usu'];
                           $id_cursos_cur=$_SESSION['id_cursos_cur'];
                           $sql_consultar = mysqli_query($link, 
                                   "SELECT id_cursos_cur, st_titulo_cur, st_descricao_cur,"
                                   . "st_publico_cur, nu_valor_cur, st_usuario_cur "
                                   . "FROM cadCursos_cur WHERE id_cursos_cur = '$id_cursos_cur' ");
                                   while($row = mysqli_fetch_array($sql_consultar)){
                                                   $id_cursos_cur = $row['id_cursos_cur'];
                                                   $st_titulo_cur = $row['st_titulo_cur'];
                                                   $st_descricao_cur = $row['st_descricao_cur'];
                                                   $st_publico_cur = $row['st_publico_cur'];
                                                   $nu_valor_cur = $row['nu_valor_cur'];
                                                   $st_usuario_cur = $row['st_usuario_cur'];

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
                                             <img src="imagens/player.png" class="media-object" style="width:90px">
                                         </div>
                                         <div class="media-body">
                                           <h4 class="media-heading"><?php echo $st_titulo_cur ?></h4>
                                           <p><?php echo $st_descricao_cur ?></p>
                                           <p>Autor: <?php echo $st_usuario_cur ?></p>
                                           <p><h3>R$ <?php echo $nu_valor_cur ?></h3></p>
                                           <p><h3>Efetuar Pagamento!</h3></p>
                                         <p><?php
                                         
                                             if($nu_valor_cur == 5){
                                                echo ' <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                    <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                    <input type="hidden" name="code" value="F1E381DB7C7C38800423AF82B31C4C8A" />
                                                    <input type="hidden" name="iot" value="button" />
                                                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                    </form>
                                                    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                             }
                                             
                                               if($nu_valor_cur == 10){
                                                   echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                        <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                        <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                        <input type="hidden" name="code" value="05337688949470EEE4F58FA512374D41" />
                                                        <input type="hidden" name="iot" value="button" />
                                                        <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                        </form>
                                                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                               }
                                                if($nu_valor_cur == 15){
                                                   echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                        <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                        <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                        <input type="hidden" name="code" value="AC1F7F840A0AC3DBB45A9FB1A96AB213" />
                                                        <input type="hidden" name="iot" value="button" />
                                                        <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                        </form>
                                                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                               }
                                                if($nu_valor_cur == 20){
                                                   echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                        <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                        <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                        <input type="hidden" name="code" value="A57E34814646C0C444BCAFBF8CD696F5" />
                                                        <input type="hidden" name="iot" value="button" />
                                                        <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                        </form>
                                                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                               }
                                             
                                                if ($nu_valor_cur == 25){
                                                echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                    <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                    <input type="hidden" name="code" value="D6E44CE1C5C5480224835FB1A38262CA" />
                                                    <input type="hidden" name="iot" value="button" />
                                                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                    </form>
                                                    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                                }
                                                  if($nu_valor_cur == 30){
                                                      echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                        <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                        <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                        <input type="hidden" name="code" value="582C285BB2B25800044EFF9CA44C9AF8" />
                                                        <input type="hidden" name="iot" value="button" />
                                                        <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                        </form>
                                                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                                  }
                                                    if($nu_valor_cur == 35){
                                                                echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                                    <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                                    <input type="hidden" name="code" value="A325C955464615DCC4619FA32663E790" />
                                                                    <input type="hidden" name="iot" value="button" />
                                                                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                                    </form>
                                                                    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                                    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                                        }
                                                        
                                                        if($nu_valor_cur == 40){
                                                          echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                                <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                                <input type="hidden" name="code" value="E27BC189F3F3BD6CC4D7DF832CD2AF47" />
                                                                <input type="hidden" name="iot" value="button" />
                                                                <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                                </form>
                                                                <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';  
                                                        }
                                                            if($nu_valor_cur == 45){
                                                                echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                                <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                                <input type="hidden" name="code" value="92C7259997979FF6640F5F92C7E41A9B" />
                                                                <input type="hidden" name="iot" value="button" />
                                                                <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                                </form>
                                                                <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                                            }
                                                               if($nu_valor_cur == 50){
                                                                   echo '<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                                        <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                                                        <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                                        <input type="hidden" name="code" value="C9C6FD7F13130785540A4FB9527030ED" />
                                                                        <input type="hidden" name="iot" value="button" />
                                                                        <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                                        </form>
                                                                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->';
                                                               }
                                                                
                                                        ?>
                                          </p>
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

