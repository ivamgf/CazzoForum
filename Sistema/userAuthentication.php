<html>
<head>
<title>Autenticando o usuário</title>


<script type="text/javascript">
//Script em JavaScript para usuário autenticado com sucesso
function loginsucessfully(){
	 setTimeout("window.location='dashboard1.html' ", 1000);
};
//Script em JavaScript para usuário autenticado com sucesso

//Script em JavaScript para usuário não autenticado
function loginfailed(){
	 setTimeout("window.location='index.html' ", 1000);
};
//Script em JavaScript para usuário não autenticado
</script>


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
//Bloco de código de conexão validação de usuário
	 $usuario_usu=$_POST['usuario_usu'];
	 $password_usu=$_POST['password_usu'];
         $query="select * from cadPessoaFs_cpf where st_usuario_cpf = '$usuario_usu' and st_senha_cpf = '$password_usu' ";
         $sql= mysqli_query($link,$query) or die("Não existe o usuario!");
         $row=mysqli_num_rows($sql);
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