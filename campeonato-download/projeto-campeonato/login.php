<!DOCTYPE html>
<html>
<head>
	<title>Login do Técnico</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="menu">
		<ul>
        	<li><a href="Inicial.php">Página Inicial</a></li>
        	<li><a href="login.php">Técnico</a></li>
    	</ul>
	</div>
	<div class="form">
		<img src="perfil.jpg" class="avatar">
		<h1>Login</h1>

		<form method="post" action="verify.php">
			<p>Email do Técnico</p>
			<input type="email" name="email" required="required" placeholder="Email do Técnico">
			<p>Senha do Time</p>
			<input type="password" name="senhatime" required="required" placeholder="Senha do Time">
			<input type="submit" name="enviar" value="Logar">
		</form>
	</div>

</body>
</html>