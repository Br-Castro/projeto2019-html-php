<!DOCTYPE html>
<html>
<head>
	<title>difinindo...</title>
		<script type="text/javascript">
		function manda() {
		setTimeout("window.location='organizaçao.php'",2000);
		}
	</script>
  
</head>
<body>

<?php
include_once ('conexao.php');
$ingresso=$_POST["ingresso"];
if(isset($_POST["atualizar"])){
	$sql="UPDATE tb_ingresso SET ingresso='$ingresso' WHERE id='0'";
	if (conexao()->query($sql)) {
		echo "<h2>Ingressos definidos com sucesso!!!</h2>";
		echo "<script>manda()</script>";
	}else{
		echo "Error:".$sql."<br>".conexao()->error;
	}
}
?>
</body>
</html>