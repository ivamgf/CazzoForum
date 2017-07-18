<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">       
        <title>Cadastro de Pessoas Físicas</title>
        <script type="text/javascript">
         //Script em JavaScript para usuário cadastrado com sucesso
         function cadsucessfully(){
                 setTimeout("window.location='cadSuc.html' ", 1000);
         };
         //Script em JavaScript para usuário cadastrado com sucesso
         </script>
    </head>
    <body>
    <?php
        
     //Bloco de código include
     include 'conexao.php';
     //Bloco de código include     
         
//Bloco de código de inserção de pessoa Física
     $st_nome_cpf = $_POST['st_nome_cpf'];      
     $st_email_cpf = $_POST['st_email_cpf'];     
     $st_usuario_cpf = $_POST['st_usuario_cpf'];
     $st_senha_cpf = $_POST['st_senha_cpf'];
     
     $sql = mysqli_query($link, "INSERT INTO cadPessoaFs_cpf(st_nome_cpf, st_email_cpf, st_usuario_cpf, st_senha_cpf) 
	 VALUES ('$st_nome_cpf', '$st_email_cpf', '$st_usuario_cpf','$st_senha_cpf')");	
     
//Bloco de código de inserção de pessoa Física	
    ?>
        
        <?php
        echo "<script>cadsucessfully()</script>";
        ?>
    </body>
</html>
