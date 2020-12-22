<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css1.css">
	<title>Página do técnico</title>
    <style type="text/css">
        body{
            color: #000000;
        }
        body h2{
            color: #fff;
        }
        .form_reserva{
            width: 400px;
            border: 2px solid #fb2525;
            margin-left: 50%;
            height: 550px;
        }
        .form_titular{
            width: 400px;
            border: 2px solid #4CAF50;
            margin-left: 0%;
            transform: translate(50%,-100%);
            height: 600px;
        }
        form{
            padding-left: 20px;
            overflow: hidden;
        }
        form input{
            display: block;
            padding-bottom: 1px;
        }
    </style>
</head>

<body>
    <h2 align="center">Página do Técnico</h2>
<div class="menu">
	<ul>
        <li><a href="inicial.php">Página Inicial</a></li>
        <li><a href="logout.php">SAIR</a></li>
    </ul>
</div>
<h2 align="center">Escalação</h2>
<div class="form_reserva">
    <form action="inserir_reserva.php" method="post">
        <h3>Reservas</h3>
        <input type="text" name="res1" required="required" placeholder="Reserva 1"><br>
        <input type="text" name="res2" required="required" placeholder="Reserva 2"><br>
        <input type="text" name="res3" required="required" placeholder="Reserva 3"><br>
        <input type="text" name="res4" required="required" placeholder="Reserva 4"><br>
        <input type="text" name="res5" required="required" placeholder="Reserva 5"><br>
        <input type="text" name="res6" required="required" placeholder="Reserva 6"><br>
        <input type="text" name="res7" required="required" placeholder="Reserva 7"><br>
        <input type="text" name="res8" required="required" placeholder="Reserva 8"><br>
        <input type="text" name="res9" required="required" placeholder="Reserva 9"><br>
        <input type="submit" name="inserir_r" value="Escalar">
        <input type="submit" name="atualizar" value="Mudar Reservas"><br>
        Sua senha:<input type="password" name="senha" required="required" placeholder="Senha do time">
    </form>
</div>
<div class="form_titular">
    <form method="post" action="inserir_titular.php">

    	<h3>Titulares</h3>
    	<input type="text" name="tit1" required="required" placeholder="Titular 1"><br>
    	<input type="text" name="tit2" required="required" placeholder="Titular 2"><br>
    	<input type="text" name="tit3" required="required" placeholder="Titular 3"><br>
    	<input type="text" name="tit4" required="required" placeholder="Titular 4"><br>
    	<input type="text" name="tit5" required="required" placeholder="Titular 5"><br>
    	<input type="text" name="tit6" required="required" placeholder="Titular 6"><br>
    	<input type="text" name="tit7" required="required" placeholder="Titular 7"><br>
    	<input type="text" name="tit8" required="required" placeholder="Titular 8"><br>
    	<input type="text" name="tit9" required="required" placeholder="Titular 9"><br>
    	<input type="text" name="tit10" required="required" placeholder="Titular 10"><br>
    	<input type="text" name="tit11" required="required" placeholder="Titular 11"><br>
        <input type="submit" name="inserir" value="Escalar">
        <input type="submit" name="atualizar" value="Mudar Titulares"><br>
        Sua senha:<input type="password" name="senha" required="required" placeholder="Senha do time">
    </form>
</div> 
</body>
</html>