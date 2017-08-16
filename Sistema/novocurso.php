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
				  <li><a href="#"><span class="glyphicon glyphicon glyphicon-education"></span> Tornar-se Instrutor</a></li>
				  <li><a href="cadAluno.html"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login de Instrutor</a></li>
				  <li><a href="loginEad.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                  <li><a href="sairInst.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			  </div>		  
			 </nav>
         <!-- Bloco de código nav  -->  
        		 
         
         <!-- Bloco de código do Jumbotron  -->	
             <div class="container">
				  <div class="jumbotron">
					<h1><img src="imagens/logo.png" width="30%" /></h1> 
					<p>A mais nova plataforma EAD da Web! Realize já a sua matrícula!</p> 
					<p>Olá, <? echo $_SESSION['usuario2_usu']; ?>!</p>
					<!-- Bloco de código do Painel  -->
					
					<div class="container">
					     <div class="row">
						     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							     <div class="list-group">
									  <a href="#" class="list-group-item disabled">Painel de Controle</a>
									  <a href="dashboard2.php" class="list-group-item">Início</a>
									  <a href="dashboardperfil2.php" class="list-group-item">Perfil</a>
									  <a href="dashcursos2.php" class="list-group-item">Meus Cursos</a>
									  <a href="#" class="list-group-item">Cadastrar Novo Curso</a>
									  <a href="dashcertificados2.php" class="list-group-item">Meus Certificados</a>
									  <a href="catalogo.html" class="list-group-item">Catálogo de Cursos</a>
                                                                          <a href="encerrar2.php" class="list-group-item">Encerrar Conta</a>
                                                                          <a href="sairInst.html" class="list-group-item">Sair</a>
								 </div>
							 </div>
							 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							     <div class="container">
								     <div class="panel panel-default">
										 <div class="panel-heading"><h5>Novo Curso</h5></div>
										 <div class="panel-body">										     
										     
											 <!-- Tabela -->			
													<table class="table">
													     <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
														     <form class="formulario" method="post" action="cadNovoCurso.php">
														
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
															                                                                                                                              
                                                                                                                             <div class="form-group">                                                                                                                  
                                                                                                                                <select class="form-control" id="campoCategoria" name="nu_categoria_cur">
                                                                                                                                    <option value="0"> --- </option> 
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
                                                                                                                                        <option value="<?php echo $row['id_categoria_ctg']; ?>">
                                                                                                                                            <?php echo $row['st_categoria_ctg']; ?>
                                                                                                                                        </option>
                                                                                                                                      
                                                                                                                                     <?php
                                                                                                                                        
                                                                                                                                             }
                                                                                                                                        
                                                                                                                                        ?>  
                                                                                                                                                                                                                                                                                
                                                                                                                                </select>
                                                                                                                              </div>
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
														
														<tr>
															 <th>Título do Curso</th><th>Descrição do Curso</th>
															
														</tr>
														<!-- Linha 1.3 -->
														
														<!-- Linha 1.4 -->				
														<tr>
														
															 <td>
														         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>					 
																	 <input class="form-control" type="text" name="st_titulo_cur" id="campoTitulo">
																 </div>
															 </td>
															 <td>					 
															 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>					 
																	 <input class="form-control" type="text" name="st_descricao_cur" id="campoDescricao">
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
																	 <input class="form-control" type="text" name="st_publico_cur" id="campoPublico">
																 </div>
															 </td>
															 <td>
                                                                                                                              <div class="form-group">                                                                                                                  
                                                                                                                                <select class="form-control" id="valor1" name="nu_valor_cur">
                                                                                                                                    <option value="1"> --- </option>    
                                                                                                                                        <option value="0">Gratuito</option>
                                                                                                                                        <option value="25">R$ 25.00</option>
                                                                                                                                        <option value="30">R$ 30.00</option>
                                                                                                                                        <option value="35">R$ 35.00</option>
                                                                                                                                        <option value="40">R$ 40.00</option>
                                                                                                                                        <option value="45">R$ 45.00</option>
                                                                                                                                        <option value="50">R$ 50.00</option>
                                                                                                                                        <option value="55">R$ 55.00</option>
                                                                                                                                        <option value="60">R$ 60.00</option>
                                                                                                                                        <option value="65">R$ 65.00</option>
                                                                                                                                        <option value="70">R$ 70.00</option>
                                                                                                                                        <option value="75">R$ 75.00</option>
                                                                                                                                        <option value="80">R$ 80.00</option>
                                                                                                                                        <option value="85">R$ 85.00</option>
                                                                                                                                        <option value="90">R$ 90.00</option>
                                                                                                                                        <option value="95">R$ 95.00</option>
                                                                                                                                        <option value="100">R$ 100.00</option>
                                                                                                                                        <option value="105">R$ 105.00</option>
                                                                                                                                        <option value="110">R$ 110.00</option>
                                                                                                                                </select>
                                                                                                                              </div>                                                                                                                          
															     	 
															 </td>
															 
														</tr>				
														<!-- Linha 1.6 -->
                                                                                                                
                                                                                                                													
														<!-- Linha 1.7 -->
															                                                         			
														<tr>
															 <td>
                                                                                                                             <button type="submit" class="btn btn-danger">Cadastrar Curso</button>
                                                                                                                         </td>	
                                                                                                                         <td>
                                                                                                                             <input type="reset" class="btn btn-primary btn-block btn-danger" value="Limpar campos">
                                                                                                                         </td>														                                                                                                                        
                                                                                                                </tr>
														<!-- Linha 1.7 -->
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

