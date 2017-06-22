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
         $user="texkrono_tks";
     	 $pass="tks987456";
     	 $dbname="texkrono_texkronos_tks";
         $conexao = mysql_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysql_select_db($dbname)or die("Não foi possível realizar a conexão!");
//Bloco de código de conexão
//Bloco de código de exclusão de usuário
$id = $_POST['id'];
$usuario_usu = $_POST['usuario_usu'];
$password_usu = $_POST['password_usu'];
$codTipoUsuario_usu = $_POST['codTipoUsuario_usu'];
$excluir = mysql_query("DELETE from usuario_usu WHERE id = '$id' ") or die("Não foi possível realizar a exclusão!");
//Bloco de código de exclusão de usuário
        ?>
        <?php
        header("Location: delUsers.html");
?>
    </body>
</html>