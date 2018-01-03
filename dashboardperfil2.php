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
                                          <a href="#" class="list-group-item">Perfil</a>
                                          <a href="dashcursos2.php" class="list-group-item">Meus Cursos</a>
                                          <a href="novocurso.php" class="list-group-item">Cadastrar Novo Curso</a>
                                          <a href="novovideo.php" class="list-group-item">Cadastrar Novo Vídeo</a>
                                          <a href="dashcertificados2.php" class="list-group-item">Meus Certificados</a>
                                          <a href="catalogo2.php" class="list-group-item">Catálogo de Cursos</a>
                                          <a href="encerrar2.php" class="list-group-item">Encerrar Conta</a>
                                          <a href="sairInst.php" class="list-group-item">Sair</a>
                                 </div>
                         </div>
                         <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                             <div class="container2">
                                     <div class="panel panel-default">
                                                 <div class="panel-heading"><h5>Perfil do Instrutor</h5></div>
                                                 										     
                                        <!-- Tabela -->			
                                        <table class="table">
                                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <form class="formulario" 
                                                method="post" action="atualInst.php">

                                                <!-- Linha 1.1 -->

                                                <?php 
                                                    //Código de conexão
                                                    include "conexao.php";
                                                    //Código de conexão                                        

                                                    //Código de consulta
                                                    $usuario_usu=$_SESSION['usuario2_usu'];                                                    
                                                    $sql_consultar = mysqli_query($link, 
                                                            "SELECT id_instrutor_cdi, st_nome_cdi, st_email_cdi, st_usuario_cdi, st_senha_cdi, "
                                                            . "nu_rg_cdi, nu_cpf_cdi, st_endereco_cdi, st_cidade_cdi, dt_nascimento_cdi, "
                                                            . "st_sexo_cdi, nu_telefone_cdi, nu_celular_cdi, st_obs_cdi "
                                                            . "FROM cadInstrutor_cdi WHERE st_usuario_cdi = '$usuario_usu' ");
                                                    while($row = mysqli_fetch_array($sql_consultar)){
                                                    $id_instrutor_cdi = $row['id_instrutor_cdi'];
                                                    $st_nome_cdi = $row['st_nome_cdi'];
                                                    $st_email_cdi = $row['st_email_cdi'];
                                                    $st_usuario_cdi = $row['st_usuario_cdi'];
                                                    $st_senha_cdi = $row['st_senha_cdi'];                                                    
                                                    $nu_rg_cdi = $row['nu_rg_cdi'];
                                                    $nu_cpf_cdi = $row['nu_cpf_cdi'];
                                                    $st_endereco_cdi = $row['st_endereco_cdi'];
                                                    $st_cidade_cdi = $row['nu_cidade_cdi'];
                                                    $dt_nascimento_cdi = $row['dt_nascimento_cdi'];                                                    
                                                    $st_sexo_cdi = $row['st_sexo_cdi'];
                                                    $nu_telefone_cdi = $row['nu_telefone_cdi'];
                                                    $nu_celular_cdi = $row['nu_celular_cdi'];                                                                                                                    
                                                    $st_obs_cdi = $row['st_obs_cdi'];
                                                    //Código de consulta
                                                 ?>

                                                <tr>
                                                         <th>Nome</th><th>E-mail</th>

                                                </tr>
                                                <!-- Linha 1.1 -->

                                                <!-- Linha 1.2 -->				
                                                <tr>

                                                         <td>
                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                                                             <input class="form-control" type="text" name="st_nome_cdi" id="campoNome" value="<?php echo $st_nome_cdi ?>">
                                                                 </div>
                                                         </td>
                                                         <td>					 
                                                                 <div class="input-group">
                                                                         <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                                         <input class="form-control" type="text" name="st_email_cdi" id="campoEmail" value="<?php echo $st_email_cdi ?>">
                                                                 </div>
                                                         </td>

                                                </tr>				
                                                <!-- Linha 1.2 -->	

                                                <!-- Linha 1.3 -->			
                                                <tr>
                                                         <th>Usuário</th><th>Senha</th>

                                                </tr>				
                                                <!-- Linha 1.3 -->

                                                <!-- Linha 1.4 -->				
                                                <tr>

                                                         <td>
                                                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                                                                         <input class="form-control" type="text" name="st_usuario_cdi" id="campoUsuario" value="<?php echo $st_usuario_cdi ?>">
                                                                 </div>
                                                         </td>
                                                         <td>
                                                         <div class="input-group">
                                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                                 <input class="form-control" type="password" name="st_senha_cdi" id="campoSenha" value="<?php echo $st_senha_cdi ?>">
                                                         </div>
                                                         </td>

                                                </tr>				
                                                <!-- Linha 1.4-->

                                                <!-- Linha 1.5 -->	                                                         			
                                                <tr>
                                                         <th>RG</th><th>CPF</th>

                                                </tr>				
                                                <!-- Linha 1.5 -->

                                                <!-- Linha 1.6 -->
                                                <tr>

                                                         <td>
                                                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>					 
                                                                         <input class="form-control" type="number" name="nu_rg_cdi" id="campoRG" value="<?php echo $nu_rg_cdi ?>">
                                                                 </div>
                                                         </td>
                                                         <td>
                                                         <div class="input-group">
                                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                                                                 <input class="form-control" type="number" name="nu_cpf_cdi" id="campoCpf" value="<?php echo $nu_cpf_cdi ?>">
                                                         </div>
                                                         </td>

                                                </tr>				
                                                <!-- Linha 1.6-->

                                                <!-- Linha 1.7 -->	                                                         			
                                                <tr>
                                                         <th>Endereço</th><th>Cidade</th>

                                                </tr>				
                                                <!-- Linha 1.7 -->

                                                <!-- Linha 1.8 -->
                                                <tr>

                                                         <td>
                                                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>					 
                                                                         <input class="form-control" type="text" name="st_endereco_cdi" id="campoEnd" value="<?php echo $st_endereco_cdi ?>">
                                                                 </div>
                                                         </td>
                                                         <td>
                                                         <div class="input-group">
                                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                                 <input class="form-control" type="text" name="st_cidade_cdi" id="campoCidade" value="<?php echo $st_cidade_cdi ?>">
                                                         </div>
                                                         </td>

                                                </tr>				
                                                <!-- Linha 1.8-->

                                                <!-- Linha 1.9 -->	                                                         			
                                                <tr>
                                                         <th>Data de Nascimento</th><th>Sexo</th>

                                                </tr>				
                                                <!-- Linha 1.9 -->

                                                <!-- Linha 1.10 -->
                                                <tr>

                                                         <td>
                                                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>					 
                                                                         <input class="form-control" type="date" name="dt_Nascimento_cdi" id="campodtNasc" value="<?php echo $dt_Nascimento_cdi ?>">
                                                                 </div>
                                                         </td>
                                                         <td>
                                                         <div class="input-group">
                                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                 <input class="form-control" type="text" name="st_sexo_cdi" id="campoSexo" value="<?php echo $st_sexo_cdi ?>">
                                                         </div>
                                                         </td>

                                                </tr>				
                                                <!-- Linha 1.10-->

                                                <!-- Linha 1.11 -->	                                                         			
                                                <tr>
                                                         <th>Telefone</th><th>Celular</th>															
                                                </tr>				
                                                <!-- Linha 1.11 -->

                                                <!-- Linha 1.12 -->
                                                <tr>

                                                         <td>
                                                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>					 
                                                                         <input class="form-control" type="tel" name="nu_telefone_cdi" id="campoTel" value="<?php echo $nu_telefone_cdi ?>">
                                                                 </div>
                                                         </td>
                                                         <td>
                                                         <div class="input-group">
                                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                                                 <input class="form-control" type="tel" name="nu_celular_cdi" id="campoCel" value="<?php echo $nu_celular_cdi ?>">
                                                         </div>
                                                         </td>

                                                </tr>				
                                                <!-- Linha 1.12-->

                                                <!-- Linha 1.13 -->	                                                         			
                                                <tr>
                                                         <th>Obs:</th><th></th>															
                                                </tr>				
                                                <!-- Linha 1.13 -->

                                                <!-- Linha 1.14 -->
                                                <tr>

                                                         <td>
                                                                 <div class="input-group">
                                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                                 <input class="form-control" type="text" name="st_obs_cdi" id="campoObs" value="<?php echo $st_obs_cdi ?>">
                                                         </div>
                                                         </td>
                                                         <td>

                                                         </td>

                                                </tr>				
                                                <!-- Linha 1.14-->

                                                <!-- Linha 1.15 -->	                                                         			
                                                <tr>
                                                         <th><button type="submit" class="btn btn-danger">Atualizar Perfil</button></th><th></th>															
                                                </tr>

                                                <?php
                                                     }
                                                ?>

                                                <!-- Linha 1.15 -->

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
