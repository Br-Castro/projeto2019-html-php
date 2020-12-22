<?php
include_once ('conexao.php');
$sql="SELECT nome_time,responsavel,tecnico,senha_time FROM tb_time";
$result=conexao()->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Organizadores</title>

<style type="text/css">
		#tab{
			color: #000;
			font-family: "Arial black",Arial, Helvetico, sanserif;
			border-collapse: collapse;
			width: 70%;
		}
		#tab td, #tab th{
			border: 0px solid;
			padding: 9px;
		}
		#tab tr:nth-child(even){
			background: none;
			}
			#tab tr: hover{
				background:none;
			}
			#tab th{
				padding-top: 12px;
				padding-bottom: 12px;
				background-color: #4CAF50;
				color: white; 
			}
	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
	<div class="menu">
		<ul>
			<li><a href="logout_org.php">Sair</a></li>
		</ul>
	</div>
<h2 align="center">Times Cadastrados</h2>
<div align="center">
	<table border="1px" id="tab">
		<thead>
			<tr>
				<th>Nome do Time</th>
				<th>Responsável pelo Time</th>
				<th>Técnico</th>
				<th>Código do Time</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if($result->num_rows>0){
			while ($row=$result->fetch_assoc()) {
				echo '<tr><td>'.utf8_encode($row["nome_time"]).
				'</td><td>'.utf8_encode($row["responsavel"]).
				'</td><td>'.utf8_encode($row["tecnico"]).
				'</td><td>'.utf8_encode($row["senha_time"]).'</td></tr>';
			}
		}
		?>
		</tbody>
	</table>
</div>
<h2 align="center">Desclassificar Times</h2>

<form method="post" action="excluir_time.php">
	Código do Time:<input type="text" name="id" placeholder="Código do Time Desclassificado">
	<input type="submit" name="excluir" value="Desclassificar">
</form>

<h3 align="center">Preço dos Ingresso</h3>

<form method="post" action="definir.php">
	Preço do Ingresso: <input type="number" name="ingresso">
	<input type="submit" name="atualizar" value="Definir">
</form>
</body>
</html>