<?php
include_once ('conexao.php');
$sql="SELECT ingresso FROM tb_ingresso";
$result=conexao()->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
	<title>Torcida</title>
	<style type="text/css">
		#tab{
			font-family: "trebuchet MS",Arial, Helvetico, sanserif;
			border-collapse: collapse;
			width: 20%;
		}
		#tab td, #tab th{
			border: 1px solid #ddd;
			padding: 8px;
		}
		#tab tr:nth-child(even){
			background-color: #f2f2f2;
			}
			#tab tr: hover{
				background-color: #ddd;
			}
			#tab th{
				padding-top: 12px;
				padding-bottom: 12px;
				background-color: #4CAF50;
				color: white; 
			}
	</style>
</head>

<body>
<body>
	<div class="menu">
		<ul>
			<li><a href="inicial.php">Voltar ao Início</a></li>
		</ul>
	</div>
<h2 align="center">Preço do Ingresso</h2>
<!-- Aqui vai o código Para exibir os dados inseridos no banco em uma tabela -->
<div align="left">
	<table border="1px" id="tab">
		<thead>
			<tr>
				<th>Ingresso:</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if ($result->num_rows>0) {
				while ($row=$result->fetch_assoc()) {
					echo '<tr><td>'.utf8_encode($row["ingresso"]).' Reais</td></tr>';
				}

			}
			?>
		</tbody>
	</table>
</div>
</body>
</html>