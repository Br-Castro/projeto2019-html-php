<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro do Time</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body>
	<div class="menu">
		<ul>
        	<li><a href="Inicial.php">Página Inicial</a></li>
        	<li><a href="#">Inscrição do Time</a></li>
    	</ul>
	</div>
	<div class="form">
		<img src="perfil.jpg" class="avatar">
		<form method="POST" action="inserir_time.php">
			<p>Nome do Time:</p><input type="text" name="nometime" placeholder="Informe o nome do time" required= "required">

			<p>Senha:</p><input type="password" name="senhatime" placeholder="Senha do time - numerica" required="required">

			<p>Responsável:</p><input type="text" name="responsaveltime" placeholder="Responsável pelo time" required= "required">

			<p>Cpf:</p><input type="number" name="cpfresptime" placeholder="Cpf do responsável" required="required">

			<p>e-mail</p><input type="email" name="email" placeholder="E-mail do Técnico">

			<p>Técnico:</p><input type="text" name="nometec" placeholder="Técnico do time" required ="required">

			<input type="submit" name="inserir" value="Cadastrar">

		</form>
	</div>
</body>
</html>