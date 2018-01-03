<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">       
        <title>Cadastro de Instrutor</title>
        <script type="text/javascript">
         //Script em JavaScript para usuário cadastrado com sucesso
         function cadsucessfully(){
                 setTimeout("window.location='cadSuc2.html' ", 1000);
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
     $st_nome_cdi = $_POST['st_nome_cdi'];      
     $st_email_cdi = $_POST['st_email_cdi'];     
     $st_usuario_cdi = $_POST['st_usuario_cdi'];
     $st_senha_cdi = $_POST['st_senha_cdi'];
     
     $sql = mysqli_query($link, "INSERT INTO cadInstrutor_cdi(st_nome_cdi, st_email_cdi, st_usuario_cdi, st_senha_cdi) 
	 VALUES ('$st_nome_cdi', '$st_email_cdi', '$st_usuario_cdi','$st_senha_cdi')");	
     
//Bloco de código de inserção de pessoa Física	
    ?>
        
        <?php
        echo "<script>cadsucessfully()</script>";
        ?>
    </body>
</html>

