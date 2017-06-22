<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>Consulta de usuário</title>
        
        <!-- Bloco de Meta -->
	     <meta charset="utf-8"></meta>
		 <meta name="viewport" content="width=device-width, user-scalable=no, 
		 intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		 <!-- Bloco de Meta -->
		 
		 <!-- Bloco de Link -->
		 
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="/css/styleCadUsers.css">
		 <!-- Bloco de Link -->
		 
		 <!-- Bloco de Script -->
		 <script src="angular/angular.min.js"></script>
		 <script src="angular/angular-locale_pt-br.js"></script>         
                 <script src="bootstrap/js/jquery.min.js"></script>
                 <script src="bootstrap/js/bootstrap.min.js"></script>
                 
        
    </head>
    <body>
	     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="cadUsers.html">NOVO</a></li>
      <li><a href="atualUsers.html">EDITAR</a></li>
      <li class="active"><a href="consUsers.php">CONSULTAS</a></li>
      <li><a href="delUsers.html">EXCLUIR</a></li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="jumbotron">
			<div class="text-center"><p><h3>CADASTRO DE USUÁRIO</h3></p></div>
			 <!-- Tabela -->
			
			<table class="table">
			   <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
                <form class="formulario" 
                method="post" action="consUsers.php">
				
				 <!-- Linha 1 -->
				
				<tr>
				     <th>ID</th><th>Usuário</th><th>Senha</th><th>Tipo de usuário</th>
					
				</tr>
				
				<!-- Linha 1 -->
				
				<!-- Linha 2 -->
				
                <tr>
				
                <td>
                  <div class="input-group"><span class="input-group-addon">
				  <i class="glyphicon glyphicon-filter"></i></span>				
                  <input class="form-control" type="number" name="id" disabled>
				  
				  </div>
				     </td>
					 
                      <td>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                  <input class="form-control" type="text" name="usuario_usu">
				     	     
				     </td></div>
					 
					 <td>
					 <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                         <input class="form-control" type="password" name="password_usu">
				    
				     </td>
					 </div>
					 <td>
					 <div class="input-group"><span class="input-group-addon">
				  <i class="glyphicon glyphicon-object-align-vertical"></i></span>
				         <select class="form-control" name="codTipoUsuario_usu">
				             <option value="0">---</option>
                             <option value="1">Administrador</option>
                             <option value="2">Colaborador</option>
                             <option value="3">Visitante</option>
                         </select>
						
						 </div>
				     </td>
					 
				</tr>
				
				<!-- Linha 2 -->
				
				<!-- Linha 3 -->
				
                <tr>
                     <td>				
                         <input type="submit" class="form-control btn btn-success btn-block" 
                        value="Consultar"> 
				  
				    </td>
				    <td>
				         <input type="reset" class="btn btn-primary btn-block btn-danger"
			             value="Limpar campos"> 
				     </td>
					 <td>
				        
					 </td>
					 <td> 
				    	 
				     </td>
					</tr>
                    <tr>					
					 
					 <td>
					   
					 </td>
					 <td></td><td></td>
				</tr>
                
                <!-- Linha 3 -->
				
				<!-- Linha 4 -->
				     <table class="table table-striped">
					     <!-- Linha 4.1 -->
					     <tr>
						 <th>ID</th><th>Usuário</th> <th>Senha</th> <th>Tipo de Usuário</th>
						 </tr>
						 
						 <?php
				include "conexao.php";
				
				
        
//Bloco de código de conexão
         $host="localhost";
         $user="texkrono_tks";
     	 $pass="tks987456";
     	 $dbname="texkrono_texkronos_tks";
         $conexao = mysql_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysql_select_db($dbname)or die("Não foi possível realizar a conexão2!");
//Bloco de código de conexão
				
				$sql_consultar = mysql_query("SELECT id, usuario_usu, password_usu, codTipoUsuario_usu FROM usuario_usu ORDER BY usuario_usu");
				while($row = mysql_fetch_array($sql_consultar)){
				$id = $row['id'];
				$usuario = $row['usuario_usu'];
				$password = $row['password_usu'];
				$codTipoUsuario = $row['codTipoUsuario_usu'];
				
				?>
						 
						 <!-- Linha 4.1 -->
						 <!-- Linha 4.2 -->
						 <tr>
						     <td>
						     <?php
				                          echo $id
				                     ?>
						     </td>
						     <td>
						     <?php
				                          echo $usuario
				                     ?>
						     </td> 
						     <td>
						     <?php
				                          echo $password
				                     ?>
						     </td> 
						     <td>
						     <?php
				                          echo $codTipoUsuario
				                     ?>
						     </td>
						 </tr>
						 <?php
				                       }
				                 ?>
						 <!-- Linha 4.2 -->
				<!-- Linha 4 -->
				
            </form>
            
            
			     </div>
			   </table>
			   
			    <!-- Tabela -->
			   
            </div>               
        </div>
        
    
    </body>
</html>