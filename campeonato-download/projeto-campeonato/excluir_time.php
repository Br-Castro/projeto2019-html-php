<!DOCTYPE html>
<html>
<head>
	<title>Excluindo</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function manda(){
			setTimeout("window.location='organizaçao.php'",2000);
		}
	</script>
</head>
<body>

<?php
include_once ('conexao.php');

$id=$_POST["id"];
$di=$_POST["id"];
$dii=$_POST["id"];

if (isset($_POST["excluir"])) {
	 $sql="DELETE FROM tb_time WHERE senha_time=='$id'";
	 $lqs="DELETE FROM tb_reserva WHERE id=='$di'";
	 $qls="DELETE FROM tb_titular WHERE id=='$dii'";

	 if (conexao()->query($sql) && conexao()->query($lqs) && conexao()->query($qls)) {
	 	echo "<h2>Time Desclacificado Com Sucesso</h2>";
	 	echo "<script>manda()</script>";
	 }else{
	 	echo "ERROR: ".$sql."<br/>".conexao()->error;
	 }
}
?>
</body>
</html>