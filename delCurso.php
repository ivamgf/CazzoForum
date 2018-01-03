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
       
        <title>Exclusão de Curso</title>
        <script type="text/javascript">
         //Script em JavaScript para usuário cadastrado com sucesso
         function delsucessfully(){
                 setTimeout("window.location='delCurso.html' ", 1000);
         };
         //Script em JavaScript para usuário atualizado com sucesso
         </script>
         
    </head>
    <body>
        <?php
        
     //Código de conexão
     include "conexao.php";
     //Código de conexão
													
     //Bloco de código de exclusão de máquinas
	 //Variáveis
	 $usuario_usu=$_SESSION['usuario2_usu'];
         $id_cursos_cur = $_SESSION['id_cursos_cur'];
	 
     //Variáveis
     //Código de exclusão
     
	 $excluir = mysqli_query($link, "DELETE from cadCursos_cur WHERE id_cursos_cur = '$id_cursos_cur' ") 
	            or die("Não foi possível realizar a exclusão!");
	 
	 
    //Código de exclusão
//Bloco de código de exclusão de máquinas	
        ?>
        
        <?php
        echo "<script>delsucessfully()</script>";
        ?>
        
    </body>
</html>