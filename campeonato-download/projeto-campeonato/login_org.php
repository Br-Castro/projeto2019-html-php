<!DOCTYPE html>
<html>
<head>
	<title>Login dos Organizadores</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="menu">
		<ul>
        	<li><a href="Inicial.php">Página Inicial</a></li>
        	<li><a href="login_org.php">Organização</a></li>
    	</ul>
	</div>
    <div class="form">
    	<img src="perfil.jpg" class="avatar">
		<h1>Faça seu Login</h1>
		<form method="post" action="verific.php">
			<p>Seu nome:</p><input type="text" name="nome" required="required">
			<p>Sua senha:</p><input type="password" name="senha" required="required">
			<input type="submit" name="enviar" value="Logar">
	</div>
</form>
</body>
</html>