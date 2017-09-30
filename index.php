<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/jkstyle.css">
	<meta charset="utf-8">
	<meta name= "author" content="Kelvis Jaen">
	<meta name= "description" content="Form with OOP method">
</head>
<body>
<header>
	<div class="logo">
		<img src="img/logo.png" width="100" alt="K">
		<h2>Kelvis Jaen</h2>
	</div>
	<nav>
		<ul>
			<li><a href="#">Test</a></li>
			<li><a href="#">Test</a></li>
			<li><a href="#">Test</a></li>
			<li><a href="#">Test</a></li>
		</ul>
	</nav>
</header>

<section class="main">
	<form method="POST" action="sign_in.php" accept-charset="utf-8">
		<label for= "name">Nombre</label>
			<input type="text" name="nombre" id="name" maxlength="20">
		<label for="lastname">Apellido</label>
			<input type="text" name="apellido" id="lastname" maxlength="20">
		<label for="mail">Correo</label>
			<input type="text" name="correo" id="mail" maxlength="20">
		<label for="phone">Telefono</label>
			<input type="text" name="telefono" id="phone" maxlength="20">
		<input type="submit" value="Registrar">
	</form>
</section>

<footer>
	<strong>Made in Candelero by Kelvis Jaen</strong>
</footer>

</body>
</html>