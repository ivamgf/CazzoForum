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
        <title>Atualização de Perfil de Aluno</title>
        <script type="text/javascript">
         //Script em JavaScript para usuário cadastrado com sucesso
         function cadsucessfully(){
                 setTimeout("window.location='atualSuc.html' ", 1000);
         };
         //Script em JavaScript para usuário atualizado com sucesso
         </script>
    </head>
    <body>
    <?php
        
     //Bloco de código include
     include 'conexao.php';
     //Bloco de código include     
         
//Bloco de código de atualização de pessoa Física
     $st_nome_cpf = $_POST['st_nome_cpf'];      
     $st_email_cpf = $_POST['st_email_cpf'];     
     $st_usuario_cpf = $_POST['st_usuario_cpf'];
     $st_senha_cpf = $_POST['st_senha_cpf'];     
     $nu_rg_cpf = $_POST['nu_rg_cpf'];      
     $nu_cpf_cpf = $_POST['nu_cpf_cpf'];     
     $st_endereco_cpf = $_POST['st_endereco_cpf'];
     $nu_cidade_cpf = $_POST['nu_cidade_cpf'];     
     $dt_nascimento_cpf = $_POST['dt_nascimento_cpf'];      
     $st_sexo_cpf = $_POST['st_sexo_cpf'];
     $nu_telefone_cpf = $_POST['nu_telefone_cpf'];
     $nu_celular_cpf = $_POST['nu_celular_cpf'];     
     $st_nomeSocial_cpf = $_POST['st_nomeSocial_cpf'];      
     $st_obs_cpf = $_POST['st_obs_cpf'];     
     

     $usuario_usu=$_SESSION['usuario_usu'];     
     $sql = mysqli_query($link, "UPDATE cadPessoaFs_cpf SET st_nome_cpf = '$st_nome_cpf', 
            st_email_cpf = '$st_email_cpf', 
            st_usuario_cpf = '$st_usuario_cpf', 
            st_senha_cpf = '$st_senha_cpf', 
            nu_rg_cpf = '$nu_rg_cpf', 
            nu_cpf_cpf = '$nu_cpf_cpf', 
            st_endereco_cpf = '$st_endereco_cpf',
            nu_cidade_cpf = '$nu_cidade_cpf', 
            dt_nascimento_cpf = '$dt_nascimento_cpf', 
            st_sexo_cpf = '$st_sexo_cpf', 
            nu_telefone_cpf = '$nu_telefone_cpf', 
            nu_celular_cpf = '$nu_celular_cpf',
            st_nomeSocial_cpf = '$st_nomeSocial_cpf', 
            st_obs_cpf = '$st_obs_cpf'
	    WHERE st_usuario_cpf = '$usuario_usu' ");	
     
//Bloco de código de atualização de pessoa Física	
    ?>
        
        <?php
        echo "<script>cadsucessfully()</script>";
        ?>
    </body>
</html>

