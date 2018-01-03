<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">       
        <title>Cadastro de Novo Curso</title>
        <script type="text/javascript">
         //Script em JavaScript para usuário cadastrado com sucesso
         function cadsucessfully(){
                 setTimeout("window.location='cadNovCur.html' ", 1000);
         };
         //Script em JavaScript para usuário cadastrado com sucesso
         </script>
    </head>
    <body>
    <?php
        
     //Bloco de código include
     include 'conexao.php';
     //Bloco de código include     
         
//Bloco de código de inserção de curso
     $st_usuario_cur = $_POST['st_usuario_cur'];
     $id_instrutor_cur = $_POST['id_instrutor_cdi'];
     $st_nome_cur = $_POST['st_nome_cdi'];
     
     $st_titulo_cur = $_POST['st_titulo_cur'];      
     $st_descricao_cur = $_POST['st_descricao_cur'];     
     $st_publico_cur = $_POST['st_publico_cur'];
     $nu_valor_cur = $_POST['nu_valor_cur'];
     
     $nu_categoria_cur = $_POST['nu_categoria_cur'];
               
     $sql = mysqli_query($link, "INSERT INTO cadCursos_cur(st_usuario_cur, id_instrutor_cur, st_nome_cur, 
                                 st_titulo_cur, st_descricao_cur, 
                                 st_publico_cur, nu_valor_cur, nu_categoria_cur ) 
	 VALUES ('$st_usuario_cur', '$id_instrutor_cur','$st_nome_cur', '$st_titulo_cur', '$st_descricao_cur', "
                . "'$st_publico_cur','$nu_valor_cur', '$nu_categoria_cur' )");	
     
//Bloco de código de inserção de curso
    ?>   
        
        
        <?php
        echo "<script>cadsucessfully()</script>";
        ?>
    </body>
</html>
