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
	     <title>Painel do Administrador</title>
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
        
        <?php
        
        //Código de conexão
        include "conexao.php";
        //Código de conexão
        
        $id_compras_cdc = $_GET['id_compras_cdc']; 
        
        $_SESSION['id_compras_cdc']=$_GET['id_compras_cdc'];              
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
				  <li><a href="cadAluno.html"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
                                  <li><a href="loginInstrutor.html"><span class="glyphicon glyphicon-log-in"></span> Login de Instrutor</a></li>
				  <li><a href="loginEad.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                  <li><a href="sairAdm.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			  </div>		  
			 </nav>
         <!-- Bloco de código nav  -->  
        		 
         
         <div class="container"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                 <p>Olá, <? echo $_SESSION['usuario3_usu']; ?>!</p>
                </div>
            </div>
        </div>
        <!-- Bloco de código do Painel  -->

        <div class="container">
             <div class="row">
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                             <div class="list-group">
                                          <a href="#" class="list-group-item disabled">Painel de Controle</a>
                                          <a href="dashboard4.php" class="list-group-item">Início</a>
                                          <a href="dashboardperfil3.php" class="list-group-item">Perfil</a>
                                          <a href="dashVendas.php" class="list-group-item">Consultar Vendas</a>
                                          <a href="sairAdm.php" class="list-group-item">Sair</a>
                                 </div>
                         </div>
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    <div class="container2">
            <div class="panel panel-default">
                        <div class="panel-heading"><h5>Liberar Curso</h5></div>
                        <div class="panel-body">
               <!-- Tabela -->			
               <table class="table">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <form class="formulario" method="post" action="liberacao.php">

                       <!-- Linha 1.1 -->

                       <?php

                                     //Código de conexão
                                     include "conexao.php";
                                     //Código de conexão                                        

                                     //Código de consulta
                                     $usuario_usu=$_SESSION['usuario3_usu'];                                                    
                                     $sql_consultar = mysqli_query($link, "SELECT id_compras_cdc, st_usuario_cdc, st_titulo_cdc,"
                                             . "st_autor_cdc, nu_valor_cdc, fl_liberado_cdc "
                                             . "FROM cadCompras_cdc WHERE id_compras_cdc = '$id_compras_cdc' ");
                                             while($row = mysqli_fetch_array($sql_consultar)){
                                                             $id_compras_cdc = $row['id_compras_cdc'];
                                                             $st_usuario_cdc = $row['st_usuario_cdc'];
                                                             $st_titulo_cdc = $row['st_titulo_cdc'];
                                                             $st_autor_cdc = $row['st_autor_cdc'];
                                                             $nu_valor_cdc = $row['nu_valor_cdc'];
                                                             $fl_liberado_cdc = $row['fl_liberado_cdc'];
                                                                                                                         
                                     //Código de consulta                                                                                                                                

                                             ?>

                                    <div>

                                    <tr>
                                    <th>Código de Venda</th><th>Usuário Cliente</th><th>Curso</th><th>Autor</th><th>Valor</th> <th></th> 
                                    </tr>
                                    <!-- Linha 1.1 -->

                                    <!-- Linha 1.2 -->
                                    <tr>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                <input class="form-control" type="number" name="id_compras_cdc" id="campoId" value="<?php echo $id_compras_cdc ?>" disabled>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="st_usuario_cdc" id="campoUsuario" value="<?php echo $st_usuario_cdc ?>" disabled>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="st_titulo_cdc" id="campoTitulo" value="<?php echo $st_titulo_cdc ?>" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="st_autor_cdc" id="campoAutor" value="<?php echo $st_autor_cdc ?>" disabled>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="nu_valor_cdc" id="campoValor" value="<?php echo $nu_valor_cdc ?>" disabled>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="input-group">					 
                                                <input class="form-control" type="hidden" name="fl_liberado_cdc" id="campoLiberado" value="S" disabled>
                                            </div>
                                        </td>                                                                            
                                         
                                    </tr>
                                    <tr>
                                        <td><button type="submit" class="btn btn-danger">Liberar Curso</button></td><td></td><td></td><td></td><td></td>															
                                    </tr>
                                    <!-- Linha 1.2 -->                                                                                      			
                                    
                                            <?php
                                                 }
                                            ?>
                                          
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
