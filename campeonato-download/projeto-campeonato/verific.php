<?php 
include_once ('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Autenticando usuario:</title>
	<script type="text/javascript">
		function loginnsuccessfully() {
		setTimeout("window.location='organizaçao.php'",3000);
		}
		function loginfalido(){
			setTimeout("window.location='login_org.php'",3000);
		}
	</script>
  
</head>
<body>

 <?php
  $nome=$_POST['nome'];
  $senha=$_POST['senha'];
  $sql="SELECT nome,senha FROM tb_organiza WHERE nome='$nome' and senha='$senha'";//tb É O NOME DA TABELA//
  $result=conexao()->query($sql);
  if ($result->num_rows> 0) {
	 session_start();
      $_SESSION['nome']=$_POST['nome'];
		  $_SESSION["senha"]=$_POST["senha"];
        echo "<h2>Carregando...</h2>";
        echo "<script>loginnsuccessfully()</script>"; 
  } else{
  	echo "<center>E-mail ou senha de usuario invalida! Aguarde um instante para que possa tentar novamente</center>";
  	echo "<script>loginfalido()</script>";
  }

 ?>

</body>
</html>