<?php session_start(); ?>
<html>
<head>
<title>Autenticando o usuário</title>


<script type="text/javascript">
//Script em JavaScript para usuário autenticado com sucesso
function loginsucessfully(){
	 setTimeout("window.location='dashboard4.php' ", 1000);
};
//Script em JavaScript para usuário autenticado com sucesso

//Script em JavaScript para usuário não autenticado
function loginfailed(){
	 setTimeout("window.location='index.php' ", 1000);
};
//Script em JavaScript para usuário não autenticado
</script>


</head>
<body>

<?php
//Bloco de código include
include 'conexao.php';
//Bloco de código include
//
//Bloco de código de conexão validação de usuário
	 $usuario_usu=$_POST['usuario3_usu'];
	 $password_usu=$_POST['password3_usu'];
         $query="select * from cadAdm_cad where st_usuario_cad = '$usuario_usu' and st_password_cad = '$password_usu' ";
         $sql= mysqli_query($link,$query) or die("Não existe o usuario!");
         $row=mysqli_num_rows($sql);
//Bloco de código de desvio de fluxo que verifica número de linhas de registro de usuário	
	  if($row>0){		 
		 $_SESSION['usuario3_usu']=$_POST['usuario3_usu'];
		 $_SESSION['password3_usu']=$_POST['password3_usu'];
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
