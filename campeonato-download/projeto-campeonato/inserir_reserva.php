<!DOCTYPE html>
<html>
<head>
	<title>Alterando...</title>
	<script type="text/javascript">
		function manda(){
		setTimeout("window.location='pagtecnico.php'",2000);
		}
	</script>
</head>
<body>
<?php
include_once ('conexao.php');
$connect=conexao();
$reserva1=$_POST["res1"];
$reserva2=$_POST["res2"];
$reserva3=$_POST["res3"];
$reserva4=$_POST["res4"];
$reserva5=$_POST["res5"];
$reserva6=$_POST["res6"];
$reserva7=$_POST["res7"];
$reserva8=$_POST["res8"];
$reserva9=$_POST["res9"];
$senha=$_POST["senha"];
if (isset($_POST["inserir_r"])) {
	$sql="INSERT INTO tb_reserva(reserva1,reserva2,reserva3,reserva4,reserva5,reserva6,reserva7,reserva8,reserva9,id) VALUES ('$reserva1','$reserva2','$reserva3','$reserva4','$reserva5','$reserva6','$reserva7','$reserva8','$reserva9','$senha')";
	if($connect->query($sql)) {
		echo "<h2>Reservas escalados com sucesso!</h2>";
		echo "<script>manda()<script>";
	}else{
		echo "ESSE TIME JÁ FOI ESCALADO!<br>Por favor Click no butao MUDAR!";
	}

} 
if(isset($_POST["atualizar"])){
	$sql="UPDATE tb_reserva SET reserva1='$reserva1',reserva2='$reserva2',reserva3='$reserva3',reserva4='$reserva4',reserva5='$reserva5',reserva6='$reserva6',reserva7='$reserva7',reserva8='$reserva8',reserva9='$reserva9' WHERE senha_time='$senha'";
	if ($connect->query($sql)) {
		echo "Escalaçao alterada com sucesso!!!";
		echo "<script>manda()</script>";
	}else{
		echo "ERROR: ".$sql."<br>".$connect->error;
	}
}
?>
</body>
</html>