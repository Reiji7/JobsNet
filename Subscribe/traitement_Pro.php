<?php
   	include("../Page/conf.php");
    $table = "profesional";


		if($_POST["pass"] === $_POST["pass2"]){
			/* Recuperation des saisis utilisateurs */
      $name = $pdo -> quote($_POST["name"]);
      $surname = $pdo -> quote($_POST["surname"]);
      $tel = $pdo -> quote($_POST["tel"]);
      $mail = $pdo -> quote($_POST["mail"]);
      $pass = $pdo -> quote(hash_password($_POST["pass"]));

			/* Verifie la disponibilité du login */
			$sql = "SELECT mail FROM $table WHERE mail = $mail";
			echo $sql;
			$row = $pdo -> query($sql);
			$row = $row -> rowCount();

			if($row == 0){
				/* Inscription dans la base de donne */
				$sql = "INSERT INTO $table (name, surname, tel, mail, pass)
          VALUES ($name , $surname, $tel, $mail, $pass)";

	 			$pdo -> query($sql);
    			header("location: ../index.php");
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
			//header("location: index.php");
		}

?>
