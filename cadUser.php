<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Cadastro de usuários</title>
        
    </head>
    <body>
        <?php
        
//Bloco de código de conexão
         $host="localhost";
         $user="texkrono_tks";
     	 $pass="tks987456";
     	 $dbname="texkrono_texkronos_tks";
         $conexao = mysql_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysql_select_db($dbname)or die("Não foi possível realizar a conexão2!");
//Bloco de código de conexão
     //Bloco de código de inserção de usuário
     $usuario_usu = $_POST['usuario_usu'];
     $password_usu = $_POST['password_usu'];
     $codTipoUsuario_usu = $_POST['codTipoUsuario_usu'];
     $sql = mysql_query("INSERT INTO usuario_usu(usuario_usu, password_usu, codTipoUsuario_usu) 
	 VALUES ('$usuario_usu', '$password_usu', $codTipoUsuario_usu)");
     
//Bloco de código de inserção de usuário	
        ?>
        <?php
        header("Location: cadUsers.html");
?>
    </body>
</html>