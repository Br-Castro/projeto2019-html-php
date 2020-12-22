<?php 
include_once 'conexao.php';
//conexão de banco de dados
?>
<!DOCTYPE html>
<html>
<head>
	<title>Autenticando usuario:</title>
	<script type="text/javascript">
		function loginnsuccessfully() {
		setTimeout("window.location='pagtecnico.php'",3000);
		}
		function loginfalido(){
			setTimeout("window.location='login.php'",3000);
		}
	</script>
  
</head>
<body>

 <?php
  $email=$_POST["email"];
  $senha=$_POST["senhatime"];
  $sql="SELECT email,senha_time FROM tb_time WHERE email='$email' and senha_time='$senha'";//USUARIO É O NOME DA TABELA//
  $result = conexao()->query($sql);
  if ($result->num_rows> 0) {
	 session_start();
      $_SESSION['email']=$_POST['email'];
		  $_SESSION["senhatime"]=$_POST["senhatime"];
        echo "<div><span>Carregando...</span></div>";
        echo "<script>loginnsuccessfully()</script>"; 
  } else{
  	echo "<center>E-mail ou senha de usuario invalida! Aguarde um instante para que possa tentar novamente</center>";
  	echo "<script>loginfalido()</script>";
  }

 ?>

</body>
</html>