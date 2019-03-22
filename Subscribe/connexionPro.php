<? php
$_SESSION['page'] = 'Connexion_Pro';
?>

<!doctype html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title> Connexion </title>
	</head>

	<body>
		<form method="post" action="traitementConnexion_Pro.php">
			<ul>
				<li>
					<li><h1> Connexion </h1></li>
				</li>
			<ul>
				<li>
					<input type="text" name="mail" id="mail" placeholder="Email" required/>
				</li>
				<li>
					<input type="password" name="pass" id="pass" placeholder="Mot de passe" required/>
				</li>

				<input type="submit" value="OK" />

			</ul>
		</form>
	</body>

</html>