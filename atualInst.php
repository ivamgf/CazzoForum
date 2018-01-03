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
                 setTimeout("window.location='atualSuc2.html' ", 1000);
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
     $st_nome_cdi = $_POST['st_nome_cdi'];      
     $st_email_cdi = $_POST['st_email_cdi'];     
     $st_usuario_cdi = $_POST['st_usuario_cdi'];
     $st_senha_cdi = $_POST['st_senha_cdi'];     
     $nu_rg_cdi = $_POST['nu_rg_cdi'];      
     $nu_cpf_cdi = $_POST['nu_cpf_cdi'];     
     $st_endereco_cdi = $_POST['st_endereco_cdi'];
     $st_cidade_cdi = $_POST['st_cidade_cdi'];     
     $dt_nascimento_cdi = $_POST['dt_nascimento_cdi'];      
     $st_sexo_cdi = $_POST['st_sexo_cdi'];
     $nu_telefone_cdi = $_POST['nu_telefone_cdi'];
     $nu_celular_cdi = $_POST['nu_celular_cdi'];       
     $st_obs_cdi = $_POST['st_obs_cdi'];     
     

     $usuario_usu=$_SESSION['usuario2_usu'];     
     $sql = mysqli_query($link, "UPDATE cadInstrutor_cdi SET st_nome_cdi = '$st_nome_cdi', 
            st_email_cdi = '$st_email_cdi', 
            st_usuario_cdi = '$st_usuario_cdi', 
            st_senha_cdi = '$st_senha_cdi', 
            nu_rg_cdi = '$nu_rg_cdi', 
            nu_cpf_cdi = '$nu_cpf_cdi', 
            st_endereco_cdi = '$st_endereco_cdi',
            st_cidade_cdi = '$st_cidade_cdi', 
            dt_nascimento_cdi = '$dt_nascimento_cdi', 
            st_sexo_cdi = '$st_sexo_cdi', 
            nu_telefone_cdi = '$nu_telefone_cdi', 
            nu_celular_cdi = '$nu_celular_cdi',             
            st_obs_cdi = '$st_obs_cdi'
	    WHERE st_usuario_cdi = '$usuario_usu' ");	
     
//Bloco de código de atualização de instrutor	
    ?>
        
        <?php
        echo "<script>atualsucessfully()</script>";
        ?>
    </body>
</html>

