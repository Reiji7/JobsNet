<? php
$_SESSION['page'] = 'Connexion_Ent';
?>

<!doctype html>

<head>
	<meta charset = "utf-8">
	<link rel = "stylesheet" href = "style.css">
	<title> Connexion </title>
</head>

<body>
	<form method = "post" action = "traitementConnexion_Ent.php">

		 <ul>
			 <li><h1> Connexion </h1></li>
			 <li>
				 <input type="number" name="siret" id="siret" placeholder="numéro SIRET" required/>
			</li>
			<li>
				<input type="password" name="pass" id="pass" placeholder="Mot de passe" required/>
    		</li>

		<input type = "submit" value = "OK" />

		</ul>
	</form>

	</body>
</html>