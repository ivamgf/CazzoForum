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
        <title>Atualização de Perfil de Instrutor</title>
        <script type="text/javascript">
         //Script em JavaScript para usuário cadastrado com sucesso
         function atualsucessfully(){
                 setTimeout("window.location='atualSuc3.html' ", 1000);
         };
         //Script em JavaScript para usuário atualizado com sucesso
         </script>
    </head>
    <body>
    <?php
        
     //Bloco de código include
     include 'conexao.php';
     //Bloco de código include     
         
//Bloco de código de atualização de instrutor
     $st_usuario_cad = $_POST['st_usuario_cad'];      
     $st_password_cad = $_POST['st_password_cad'];     
     $st_email_cad = $_POST['st_email_cad'];
     $st_nome_cad = $_POST['st_nome_cad'];   
       
     $usuario_usu=$_SESSION['usuario3_usu'];     
     $sql = mysqli_query($link, "UPDATE cadAdm_cad SET st_usuario_cad = '$st_usuario_cad', 
            st_password_cad = '$st_password_cad', 
            st_email_cad = '$st_email_cad', 
            st_nome_cad = '$st_nome_cad'
	    WHERE st_usuario_cad = '$usuario_usu' ");	
     
//Bloco de código de atualização de instrutor	
    ?>
        
        <?php
        echo "<script>atualsucessfully()</script>";
        ?>
    </body>
</html>
