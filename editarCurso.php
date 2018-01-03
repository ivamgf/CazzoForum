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
				  <li><a href="#"><span class="glyphicon glyphicon glyphicon-education"></span> Tornar-se Instrutor</a></li>
				  <li><a href="cadAluno.html"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login de Instrutor</a></li>
				  <li><a href="loginEad.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
             <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                     <div class="list-group">
                                  <a href="#" class="list-group-item disabled">Painel de Controle</a>
                                  <a href="dashboard2.php" class="list-group-item">Início</a>
                                  <a href="dashboardperfil2.php" class="list-group-item">Perfil</a>
                                  <a href="dashcursos2.php" class="list-group-item">Meus Cursos</a>
                                  <a href="novocurso.php" class="list-group-item">Cadastrar Novo Curso</a>
                                  <a href="dashcertificados2.php" class="list-group-item">Meus Certificados</a>
                                  <a href="catalogo.php" class="list-group-item">Catálogo de Cursos</a>
                                  <a href="encerrar2.php" class="list-group-item">Encerrar Conta</a>
                                  <a href="sairInst.php" class="list-group-item">Sair</a>
                         </div>
                 </div>
                 <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                     <div class="container2">
                             <div class="panel panel-default">
                                         <div class="panel-heading"><h5>Novo Curso</h5></div>
                                         										     

        <!-- Tabela -->			
                       <table class="table">
                            <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
                                <form class="formulario" method="post" action="atualCurso.php">

                               <!-- Linha 0 -->

                               <?php 
                               //Código de conexão
                               include "conexao.php";
                               //Código de conexão                                        

                               //Código de consulta
                               $usuario_usu=$_SESSION['usuario2_usu'];
                               ?>
                               <tr>
                                        <th>Usuário</th><th>Categoria do Curso</th>

                               </tr>
                               <!-- Linha 0 -->

                               <!-- Linha 1.0 -->				
                               <tr>

                                        <td>
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                        <input class="form-control" type="text" name="st_usuario_cur" id="campoUsuario" value="<?php echo $usuario_usu ?>">
                                                </div>
                                        </td>
                                        <td>	 
                                           
                                                   <!-- Código de consulta de categoria do curso -->
                                                   <?php 
                                                       //Código de conexão
                                                       include "conexao.php";
                                                       //Código de conexão                                        

                                                       //Código de consulta

                                                       $sql_consultar = mysqli_query($link, 
                                                               "SELECT id_categoria_ctg, st_categoria_ctg "
                                                               . "FROM cadCategorias_ctg");
                                                       while($row = mysqli_fetch_array($sql_consultar)){
                                                       $id_categoria_ctg = $row['id_categoria_ctg'];
                                                       $st_categoria_ctg = $row['st_categoria_ctg'];

                                                       //Código de consulta                                                                                                                                

                                                    ?>                                                                                                                
                                                   <!-- Código de consulta de categoria do curso -->
                                                   
                                                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                        <input class="form-control" type="text" name="st_categoria_ctg" id="campoCategoria" value="<?php echo $st_categoria_ctg ?>">
                                                </div>                                                   
                                                      
                                                    <?php

                                                            }

                                                       ?>  

                                               
                                        </td>

                               </tr>				
                               <!-- Linha 1.0 -->         


                               <!-- Linha 1.1 -->

                               <!-- Código de consulta de dados do instrutor -->
                               <?php 
                                   //Código de conexão
                                   include "conexao.php";
                                   //Código de conexão                                        

                                   //Código de consulta
                                   $usuario_usu=$_SESSION['usuario2_usu'];                                                    
                                   $sql_consultar = mysqli_query($link, 
                                           "SELECT id_instrutor_cdi, st_nome_cdi, st_usuario_cdi "
                                           . "FROM cadInstrutor_cdi where st_usuario_cdi = '$usuario_usu' ");
                                   while($row = mysqli_fetch_array($sql_consultar)){
                                   $id_instrutor_cdi = $row['id_instrutor_cdi'];
                                   $st_nome_cdi = $row['st_nome_cdi'];
                                   $st_usuario_cdi = $row['st_usuario_cdi'];                                                                                                                    
                                   //Código de consulta
                                ?>                                                                                                                
                               <!-- Código de consulta de dados do instrutor -->

                               <tr>
                                        <th>Id Curso</th><th></th>

                               </tr>
                               <!-- Linha 0 -->

                               <!-- Linha 1.0 -->				
                               <tr>

                                        <td>
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                                            <input class="form-control" type="number" name="id_cursos_cur" id="campoId" value="<?php echo $id_cursos_cur ?>" disabled>
                                                </div>
                                        </td>
                                        <td>					 
                                        
                                        </td>

                               </tr>				
                               <!-- Linha 1.0 -->
                               
                               <!-- Linha 1.1 -->
                               
                               <tr>
                                        <th>Código do Instrutor</th><th>Autor</th>

                               </tr>
                               <!-- Linha 1.1 -->

                               <!-- Linha 1.2 -->				
                               <tr>

                                        <td>
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                            <input class="form-control" type="number" name="id_instrutor_cdi" id="campoId" value="<?php echo $id_instrutor_cdi ?>">
                                                </div>
                                        </td>
                                        <td>					 
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>					 
                                                        <input class="form-control" type="text" name="st_nome_cdi" id="campoInstrutor" value="<?php echo $st_nome_cdi ?>">
                                        </div>	 
                                        </td>

                               </tr>				
                               <!-- Linha 1.2 -->

                               <!-- Linha 1.3 -->
                                 <?php

                                     //Código de conexão
                                     include "conexao.php";
                                     //Código de conexão                                     
                                                                         
                                     
                                     //Código de consulta
                                     $usuario_usu=$_SESSION['usuario2_usu'];                                                    
                                     $sql_consultar = mysqli_query($link, 
                                             "SELECT id_cursos_cur, st_titulo_cur, st_descricao_cur,"
                                             . "st_publico_cur, nu_valor_cur  "
                                             . "FROM cadCursos_cur WHERE st_usuario_cur = '$usuario_usu' and id_cursos_cur = '$id_cursos_cur' ");
                                             while($row = mysqli_fetch_array($sql_consultar)){
                                                             $st_titulo_cur = $row['st_titulo_cur'];
                                                             $st_descricao_cur = $row['st_descricao_cur'];
                                                             $st_publico_cur = $row['st_publico_cur'];
                                                             $nu_valor_cur = $row['nu_valor_cur'];
                                                                                                                         
                                     //Código de consulta                                                                                                                                

                                             ?>
                               <tr>
                                        <th>Título do Curso</th><th>Descrição do Curso</th>

                               </tr>
                               <!-- Linha 1.3 -->

                               <!-- Linha 1.4 -->				
                               <tr>

                                        <td>
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                        <input class="form-control" type="text" name="st_titulo_cur" id="campoTitulo" value="<?php echo $st_titulo_cur ?>">
                                                </div>
                                        </td>
                                        <td>					 
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>					 
                                                        <input class="form-control" type="text" name="st_descricao_cur" id="campoDescricao" value="<?php echo $st_descricao_cur ?>">
                                        </div>	 
                                        </td>

                               </tr>				
                               <!-- Linha 1.4 -->

                               <!-- Linha 1.5 -->

                               <tr>
                                        <th>Publico</th><th>Preço</th>

                               </tr>
                               <!-- Linha 1.5 -->

                               <!-- Linha 1.6 -->				
                               <tr>

                                        <td>
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>					 
                                                        <input class="form-control" type="text" name="st_publico_cur" id="campoPublico" value="<?php echo $st_publico_cur ?>">
                                                </div>
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>					 
                                                <input class="form-control" type="number" name="nu_valor_cur" id="campoValor" value="<?php echo $nu_valor_cur ?>">
                                                </div>                                                                                                                           

                                        </td>

                               </tr>				
                               <!-- Linha 1.6 -->


                               <!-- Linha 1.7 -->

                               <tr>
                                        <td>
                                            <button type="submit" class="btn btn-danger">Atualizar Curso</button>
                                        </td>	
                                        <td>
                                            <input type="reset" class="btn btn-primary btn-block btn-danger" value="Limpar campos">
                                        </td>														                                                                                                                        
                               </tr>
                               <!-- Linha 1.7 -->
                               
                                      <?php
                                    }
                               ?>
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
