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
         function atualsucessfully(){
                 setTimeout("window.location='atualCurso.html' ", 1000);
         };
         //Script em JavaScript para usuário atualizado com sucesso
         </script>
    </head>
    <body>
    <?php
        
     //Bloco de código include
     include 'conexao.php';
     //Bloco de código include        
     
         
//Bloco de código de atualização de curso
     $id_cursos_cur = $_SESSION['id_cursos_cur'];
     
         
     $st_titulo_cur = $_POST['st_titulo_cur'];
     $st_descricao_cur = $_POST['st_descricao_cur'];
     $st_publico_cur = $_POST['st_publico_cur'];
     $nu_valor_cur = $_POST['nu_valor_cur'];     
     

     $usuario_usu=$_SESSION['usuario2_usu'];     
     $sql = mysqli_query($link, "UPDATE cadCursos_cur SET st_titulo_cur = '$st_titulo_cur', 
            st_descricao_cur = '$st_descricao_cur', 
            st_publico_cur = '$st_publico_cur', 
            nu_valor_cur = '$nu_valor_cur' WHERE id_cursos_cur = '$id_cursos_cur' ");
            	
     
//Bloco de código de atualização de curso	
    ?>
        
        <?php
        echo "<script>atualsucessfully()</script>";
        ?>
    </body>
</html>
