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
$titular1=$_POST["tit1"];
$titular2=$_POST["tit2"];
$titular3=$_POST["tit3"];
$titular4=$_POST["tit4"];
$titular5=$_POST["tit5"];
$titular6=$_POST["tit6"];
$titular7=$_POST["tit7"];
$titular8=$_POST["tit8"];
$titular9=$_POST["tit9"];
$titular10=$_POST["tit10"];
$titular11=$_POST["tit11"];
$senha = $_POST["senha"];

if(isset($_POST["inserir"])){
	$sql="INSERT INTO tb_titular(titular1,titular2,titular3,titular4,titular5,titular6,titular7,titular8,titular9,titular10,titular11,id) VALUES ('$titular1','$titular2','$titular3','$titular4','$titular5','$titular6','$titular7','$titular8','$titular9','$titular10','$titular11','$senha')";
	if($connect->query($sql)) {
		echo "<h2>Time escalado com sucesso!</h2>";
		echo "<script>manda()</script>";
	}else{
		echo "<h2>ESSE TIME JÁ FOI ESCALADO!<br>Por favor Click no butao MUDAR!</h2>";
	}
}
if(isset($_POST["atualizar"])){
	$sql="UPDATE tb_titular SET titular1='$titular1',titular2='$titular2',titular3='$titular3',titular4='$titular4',titular5='$titular5',titular6='$titular6',titular7='$titular7',titular8='$titular8',titular9='$titular9',titular10='$titular10',titular11='$titular11' WHERE senha_time='$senha'";
	if (conexao()->query($sql)) {
		echo "<h2>Escalaçao alterada com sucesso!!!</h2>";
		echo "<script>manda()</script>";
	}else{
		echo "Error:".$sql."<br>".$connect->error;
	}
}
?>
</body>
</html>