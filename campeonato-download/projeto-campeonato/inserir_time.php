<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando</title>
	<meta charset="utf-8">
		<script type="text/javascript">
		function cad() {
		setTimeout("window.location='pagtecnico.php'",3000);
		}
		function nocad(){
			setTimeout("window.location='cadtime.php'",3000);
		}
	</script>
  
</head>
<body>

<?php
include_once ('conexao.php');
$connect=conexao();
$nome=$_POST["nometime"];
$senha=$_POST["senhatime"];
$responsavel=$_POST["responsaveltime"];
$cpf=$_POST["cpfresptime"];
$email=$_POST["email"];
$tecnico=$_POST["nometec"];

if(isset($_POST["inserir"])){
	$sql="INSERT INTO tb_time(nome_time, senha_time, responsavel, cpf_resp,email, tecnico) VALUES ('$nome','$senha','$responsavel','$cpf','$email','$tecnico')";
	if($connect->query($sql)) {
		echo "<h2>Cadastro feito com sucesso!</h2>";
		echo "<script>cad()</script>";
	}else{
		echo "<h2>Por favor, digite uma nova senha</h2>";
		echo "<script>nocad()/</script>";
	}
}
?>
</body>
</html>