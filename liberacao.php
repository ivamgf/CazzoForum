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
                 setTimeout("window.location='atualSuc4.html' ", 1000);
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
     $id_compras_cdc = $_POST['id_compras_cdc'];
     $st_usuario_cdc = $_POST['st_usuario_cdc'];      
     $st_titulo_cdc = $_POST['st_titulo_cdc'];     
     $st_autor_cdc = $_POST['st_autor_cdc'];
     $nu_valor_cdc = $_POST['nu_valor_cdc'];   
     $fl_liberado_cdc = 'S';
       
     $usuario_usu=$_SESSION['usuario3_usu'];
     $id_compras_cdc=$_SESSION['id_compras_cdc'];     
     $sql = mysqli_query($link, "UPDATE cadCompras_cdc SET fl_liberado_cdc = '$fl_liberado_cdc'
	    WHERE id_compras_cdc = '$id_compras_cdc' ");	
     
//Bloco de código de atualização de instrutor	
    ?>
        
        <?php
        echo "<script>atualsucessfully()</script>";
        ?>
    </body>
</html>
