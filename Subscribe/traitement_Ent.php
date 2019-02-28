<?php
   	include("../Page/conf.php");
    $table = "enterprise";

		if($_POST["pass"] === $_POST["pass2"]){

			/* Recuperation des saisis utilisateurs */
      $name = $pdo -> quote($_POST["name"]);
      $siret = $pdo -> quote($_POST["siret"]);
      $mail = $pdo -> quote($_POST["mail"]);
      $pass = $pdo -> quote(hash_password($_POST["pass"]));

			/* Verifie la disponibilité du login */
			$sql = "SELECT siret FROM $table WHERE siret = $siret";
			$row = $pdo -> query($sql);
			$row = $row -> rowCount();

			if($row == 0){
				/* Inscription dans la base de donne */
				$sql = "INSERT INTO $table (name, siret, mail, password)
          VALUES ($name , $siret, $mail, $pass)";

        $pdo -> query($sql);
        header("location: Contact.php");
			}

			/* login deja utiliser */
			else{
				$_SESSION['id']= 3;
				//header("location: index.php");
			}
		}

		/* L'utilisateur n'a pas saisi deux mot de passe identique */
		else{
			$_SESSION['id']= 6;
			header("location: index.php");
		}

?>
