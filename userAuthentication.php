<html>
<head>
<title>Autenticando o usuário</title>


<script type="text/javascript">
function loginsucessfully(){
	 setTimeout("window.location='painel.php' ", 1000);
};
//Script em JavaScript para usuário autenticado com sucesso
//Script em JavaScript para usuário não autenticado
function loginfailed(){
	 setTimeout("window.location='index.html' ", 1000);
};
</script>


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
//Bloco de código de conexão validação de usuário
	 $usuario_usu=$_POST['usuario_usu'];
	 $password_usu=$_POST['password_usu'];
         $sql= mysql_query("select * from usuario_usu where usuario_usu = '$usuario_usu' and password_usu = '$password_usu' ") or die("Não existe o usuario!");
         $row=mysql_num_rows($sql);
//Bloco de código de desvio de fluxo que verifica número de linhas de registro de usuário	
	  if($row>0){
		 session_start();
		$_SESSION['usuario_usu']=$_POST['usuario_usu'];
		 $_SESSION['password_usu']=$_POST['password_usu'];
		 echo "Você foi autenticado com sucesso!";
		 echo "<script>loginsucessfully()</script>"; 
	 }
     else {
		 echo "usuário não existe, favor entrar em contato com o administrador do sistema!";
		 echo "<script>loginfailed()</script>";
	 }
//Bloco de código de desvio de fluxo que verifica número de linhas de registro de usuário
//Bloco de código de conexão validação de usuário
	 
?>


</body>
</html>	 