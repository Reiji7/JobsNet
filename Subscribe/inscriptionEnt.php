<? php
$_SESSION['page'] = 'Subscribe_Ent';
?>

<!doctype html>

<head>
	<meta charset = "utf-8">
	<link rel = "stylesheet" href = "style.css">
	<title> S'inscrire </title>
</head>

<body>
	<form method = "post" action = "traitement_Ent.php">

		 <ul>
			 <li><h1> Inscription </h1></li>
			 <li>
				 <input type="text" name="name" id="name" placeholder="Nom de l'entreprise" required/>
			 </li>

			 <li>
				 <input type="number" name="siret" id="siret" placeholder="numéro SIRET" required/>
			</li>

			<li>
				<input type="text" name="mail" id="mail" placeholder="Email" required/>
			</li>
		<li>
			<input type="password" name="pass" id="pass" placeholder="Mot de passe" required/>
    </li>

		<li>
			<input type="password" name="pass2" id="pass2" placeholder="Confirmer le mot de passe" required/>
    </li>

		<input type = "submit" value = "OK" />

		</ul>
	</form>

	</body>
</html>

<!-- (pour prochaine version avec plusieurs champ pour le siret)
<label
for = "siret1"> Le numéro SIRET de votre entreprise: <
/label><input type="number" name="siret1" id="siret1" placeholder="Ex : 362" required/>
<label
for = "siret2"> <
/label>- <input type="number" name="siret2" id="siret2" placeholder="Ex : 521" required/>
<label
for = "siret3"> <
/label>- <input type="number" name="siret3" id="siret3" placeholder="Ex : 879" required/>
<label
for = "siret4"> <
/label>- <input type="number" name="siret4" id="siret4" placeholder="Ex : 00034" required/>
-->
