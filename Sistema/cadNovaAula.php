<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">       
        <title>Cadastro de Nova Aula</title>
        <script type="text/javascript">
         //Script em JavaScript para aula cadastrada com sucesso
         function cadsucessfully(){
                 setTimeout("window.location='cadNovAula.html' ", 1000);
         };
         //Script em JavaScript para aula cadastrada com sucesso
         </script>
    </head>
    <body>
    <?php
        
     //Bloco de código include
     include 'conexao.php';
     //Bloco de código include     
         
//Bloco de código de inserção de curso
     $st_titulo_cda = $_POST['st_titulo_cda'];
     $st_descricao_cda = $_POST['st_descricao_cda'];
     $nu_numAula_cda = $_POST['nu_numAula_cda'];      
     $st_link_cda = $_POST['st_link_cda'];
     $st_curso_cda = $_POST['st_titulo_cur'];
                    
     $sql = mysqli_query($link, "INSERT INTO cadAulas_cda(st_titulo_cda, st_descricao_cda, 
                                 nu_numAula_cda, st_link_cda, st_curso_cda ) 
	 VALUES ('$st_titulo_cda','$st_descricao_cda', '$nu_numAula_cda', '$st_link_cda', '$st_curso_cda' )");	
     
//Bloco de código de inserção de curso
    ?>               
        <?php
        echo "<script>cadsucessfully()</script>";
        ?>
    </body>
</html>

