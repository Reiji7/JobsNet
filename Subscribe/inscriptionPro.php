<? php
$_SESSION['page'] = 'Subscribe_Pro';
?>

<!doctype html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title> Inscription </title>
	</head>

	<body>
		<form method="post" action="traitement_Pro.php">
			<ul>
				<li>
					<li><h1> Inscription </h1></li>
				</li>
				<li>
					<input type="text" name="name" id="name" placeholder="Nom" required/>
				</li>
				<li>
					<input type="text" name="surname" id="surname" placeholder="Prénom" required/>
				</li>
				<li>
					<input type="number" name="tel" id="tel" placeholder="Téléphone" required/>
				</li>
			</ul>

			<ul>
				<li>
					<input type="text" name="mail" id="mail" placeholder="Email" required/>
				</li>
				<li>
					<input type="password" name="pass" id="pass" placeholder="Mot de passe" required/>
				</li>
				<li>
					<input type="password" name="pass2" id="pass2" placeholder="Confirmer le mot de passe" required/>
				</li>

				<input type="submit" value="OK" />

			</ul>
		</form>
	</body>

</html>