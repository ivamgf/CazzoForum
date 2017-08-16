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
                 setTimeout("window.location='atualCursoSuc.html' ", 1000);
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
     $id_cursos_cur = $row['id_cursos_cur'];
     $st_titulo_cur = $row['st_titulo_cur'];
     $st_descricao_cur = $row['st_descricao_cur'];
     $st_publico_cur = $row['st_publico_cur'];
     $nu_valor_cur = $row['nu_valor_cur'];     
     

     $usuario_usu=$_SESSION['usuario_usu'];     
     $sql = mysqli_query($link, "UPDATE cadCursos_cur SET id_cursos_cur = '$id_cursos_cur', 
            st_titulo_cur = '$st_titulo_cur', 
            st_descricao_cur = '$st_descricao_cur', 
            st_publico_cur = '$st_publico_cur', 
            nu_valor_cur = '$nu_valor_cur', 
             ");	
     
//Bloco de código de atualização de curso	
    ?>
        
        <?php
        echo "<script>atualsucessfully()</script>";
        ?>
    </body>
</html>