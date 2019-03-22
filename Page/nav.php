<?php

session_start();

if(empty($_SESSION['siret'] and isset($_SESSION['mail']) ) {
	/*
	$_SESSION['mail'] = '';
	$_SESSION['pass'] = '';
	*/
	
	echo "<nav>
	    <ul>
	        <li><a href="index.html">Accueil</a></li>
	        <li><a href="comptePro.html"> Mon compte|| Se déconnecter</a></li>
	    </ul>
	</nav>";
}

elseif (isset($_SESSION['siret'])) {
	/*
	$_SESSION['siret'] = '';
	$_SESSION['pass'] = '';
	*/

	echo "<nav>
	    <ul>
	        <li><a href="index.html">Accueil</a></li>
	        <li><a href="compteEntreprise.html"> Mon compte|| Se déconnecter</a></li>
	    </ul>
	</nav>";
}

else (empty($_SESSION))
	echo "<nav>
	    <ul>
	        <li><a href="index.html">Accueil</a></li>
	        <li><a href="Inscription.html">Se Connecter || S'inscrire</a></li>
	    </ul>
	</nav>"
?>


