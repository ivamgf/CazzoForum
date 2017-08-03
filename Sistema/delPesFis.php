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
       
        <title>Exclusão de Conta</title>
        
    </head>
    <body>
        <?php
        
     //Código de conexão
     include "conexao.php";
     //Código de conexão
													
     //Bloco de código de exclusão de máquinas
	 //Variáveis
	 $usuario_usu=$_SESSION['usuario_usu'];
	 $id_aluno_cpf = $_POST['id_aluno_cpf'];
	 $st_usuario_cpf = $_POST['st_usuario_cpf'];
     //Variáveis
     //Código de exclusão
     
	 $excluir = mysqli_query($link, "DELETE from cadPessoaFs_cpf WHERE st_usuario_cpf = '$usuario_usu' ") 
	            or die("Não foi possível realizar a exclusão!");
	 
	 
    //Código de exclusão
//Bloco de código de exclusão de máquinas	
        ?>
        <?php
        header("Location: index.html");
?>
    </body>
</html>

