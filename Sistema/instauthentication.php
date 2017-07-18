<html>
<head>
<title>Autenticando o usuário</title>


<script type="text/javascript">
//Script em JavaScript para usuário autenticado com sucesso
function loginsucessfully(){
	 setTimeout("window.location='dashboard2.html' ", 1000);
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
//Bloco de código include
include 'conexao.php';
//Bloco de código include

//Bloco de código de conexão validação de usuário
	 $usuario_usu=$_POST['usuario2_usu'];
	 $password_usu=$_POST['password2_usu'];
         $query="select * from cadInstrutor_cdi where st_usuario_cdi = '$usuario_usu' and st_senha_cdi = '$password_usu' ";
         $sql= mysqli_query($link,$query) or die("Não existe o usuario!");
         $row=mysqli_num_rows($sql);
//Bloco de código de desvio de fluxo que verifica número de linhas de registro de usuário	
	  if($row>0){
		 session_start();
		 $_SESSION['usuario2_usu']=$_POST['usuario2_usu'];
		 $_SESSION['password2_usu']=$_POST['password2_usu'];
		 echo "Você foi autenticado com sucesso!";
		 echo "<script>loginsucessfully()</script>"; 
	 }
     else {
		 echo "usuário não existe, favor entrar em contato com o administrador do sistema2!";
		 echo "<script>loginfailed()</script>";
	 }
//Bloco de código de desvio de fluxo que verifica número de linhas de registro de usuário
//Bloco de código de conexão validação de usuário
	 
?>


</body>
</html>

