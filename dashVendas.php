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
	     <title>Painel do Instrutor</title>
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
               
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="container3">
                             <div class="panel panel-default">
                                <div class="panel-heading"><h5>Consulta de Vendas</h5></div>
                                <div class="panel-heading"><h5><a href="dashboard4.php">Painel de Controle</a></h5></div>
                                										     
                                    <!-- Tabela -->
                            <table class="table table-striped">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                   <form class="formulario" method="post" action="">
                                    <!-- Linha 1.1 -->
                                    <?php

                                     //Código de conexão
                                     include "conexao.php";
                                     //Código de conexão                                        

                                     //Código de consulta
                                     $usuario_usu=$_SESSION['usuario3_usu'];                                                    
                                     $sql_consultar = mysqli_query($link, "SELECT id_compras_cdc, st_usuario_cdc, st_titulo_cdc,"
                                             . "st_autor_cdc, nu_valor_cdc, fl_liberado_cdc "
                                             . "FROM cadCompras_cdc ORDER BY id_compras_cdc ");
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
                                    <th>Código de Venda</th><th>Usuário Cliente</th><th>Curso</th><th>Autor</th><th>Valor</th> <th>Situação</th> <th></th>
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
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="fl_liberado_cdc" id="campoLiberado" value="<?php echo $fl_liberado_cdc ?>" disabled>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <a href="liberarCurso.php?id_compras_cdc=<?php echo $id_compras_cdc ?>">Liberar Curso</a>
                                        </td>
                                        
                                         
                                    </tr>
                                    <!-- Linha 1.2 -->                                                                                      			
                                    
                                            <?php
                                                 }
                                            ?>

                                            
                                      </div>
                                                 </form>
                                                </div>
                                            </table>
                                            <!-- Tabela -->
                                            
                                            
                                            
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
