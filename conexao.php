<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Exclusão de usuários</title>
        
    </head>
    <body>
        <?php
        
//Bloco de código de conexão
         $host="localhost";
         $user="cazzo918_ead";
     	 $pass="cf987456";
     	 $dbname="cazzo918_system";
         $link = mysqli_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysqli_select_db($link, $dbname) or die("Não foi possível realizar a conexão2!");
//Bloco de código de conexão
?>
</body>
</html>