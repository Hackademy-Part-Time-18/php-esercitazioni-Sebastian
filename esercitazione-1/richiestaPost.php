<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>I tuoi dati</title>
</head>
<body>
	<nav><a href="prova.php">home</a></nav>
	<h1>il tuo username è: <?php echo $_POST["username"]?> </h1>
	<h2>la tua password è: <?php echo $_POST["password"]?></h2>
	<h3>la tua password criptata è : <?php echo password_hash($_POST["password"], PASSWORD_BCRYPT) ?></h3>
</body>
</html>




