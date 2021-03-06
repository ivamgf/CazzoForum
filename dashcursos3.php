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
                     width:750px;
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
                     <li><a href="sairInst.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                   </ul>
             </div>		  
            </nav>
         <!-- Bloco de código nav  -->  
        		 
         
         
          <!-- Bloco de código do Painel  -->

          <div class="container">
               <div class="row">
               
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="container">
                             <div class="panel panel-default">
                                <div class="panel-heading"><h5>Meus Cursos</h5></div>
                                										     
                                    <!-- Tabela -->
                            <table class="table table-striped">
                                <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
                                                   <form class="formulario" 
                                                   method="post" action="atualCurso.php">
                                    <!-- Linha 1.1 -->
                                    <?php

                                     //Código de conexão
                                     include "conexao.php";
                                     //Código de conexão                                        

                                     //Código de consulta
                                     $usuario_usu=$_SESSION['usuario2_usu'];                                                    
                                     $sql_consultar = mysqli_query($link, 
                                             "SELECT id_cursos_cur, st_titulo_cur, st_descricao_cur,"
                                             . "st_publico_cur, nu_valor_cur  "
                                             . "FROM cadCursos_cur WHERE st_usuario_cur = '$usuario_usu' ORDER BY id_cursos_cur ");
                                             while($row = mysqli_fetch_array($sql_consultar)){
                                                             $id_cursos_cur = $row['id_cursos_cur'];
                                                             $st_titulo_cur = $row['st_titulo_cur'];
                                                             $st_descricao_cur = $row['st_descricao_cur'];
                                                             $st_publico_cur = $row['st_publico_cur'];
                                                             $nu_valor_cur = $row['nu_valor_cur'];
                                                                                                                         
                                     //Código de consulta                                                                                                                                

                                             ?>

                                    <div>

                                    <tr>
                                    <th>Curso</th><th>Descrição</th><th>Público</th><th>Valor</th><th></th>
                                    </tr>
                                    <!-- Linha 1.1 -->

                                    <!-- Linha 1.2 -->
                                    <tr>
                                        
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="st_titulo_cur" id="campoTitulo" value="<?php echo $st_titulo_cur ?>">
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="st_descricao_cur" id="campoId" value="<?php echo $st_descricao_cur ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="st_publico_cur" id="campoTitulo" value="<?php echo $st_publico_cur ?>">
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
                                                                <input class="form-control" type="text" name="nu_valor_cur" id="campoId" value="<?php echo $nu_valor_cur ?>">
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <button type="submit" class="btn btn-danger">Editar Curso</button>
                                        </td>
                                        <td>
                                             
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
                                            <p><a href="dashcursos2.php">Ver Menos!</a></p>
                                            <p><a href="dashboard2.php">Voltar ao Painel de Controle</a></p>
                                            
                                    </div>
                            </div>
                    </div>
            </div>
   </div>
					
			<!-- Bloco de código do Painel  -->
                        	 
				 
				 	 
	
	 <!-- Bloco de código -->  	
 
	</body>
</html>
