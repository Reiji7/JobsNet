 <?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);

    include("../Page/conf.php");
    $table = "enterprise";

    $message='';

    if (empty($_POST['siret']) || empty($_POST['pass']) ) //Si oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs</p>
        <p>Cliquez <a href="./connexionPro.php">ici</a> pour revenir</p>';
    }

    else //On check le mot de passe
    {
    	$mdpRecup = $_POST['pass'];
    	
		$siret = $pdo -> quote($_POST['siret']);

        $sql =  "SELECT siret, password FROM $table WHERE siret = $siret";
        
		$answer = $pdo->query($sql);
		$data = $answer->fetch();

		$validPassword = password_verify($mdpRecup, $data['password']);
		

        if ($validPassword == true)
        {
        	//echo "testA";

            session_start();
            $_SESSION['siret'] = $data['siret'];
            $_SESSION['pass'] = $data['password'];

            $message = '<p>Bienvenue '.$data['siret'].',vous êtes maintenant connecté!</p> <p>Cliquez <a href="../index.php">ici</a> pour revenir à la page d accueil</p>';

            echo "$message"; 

            header('location:../index.php');
        }

        else
        {
        	//echo "testB";
            $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo entré n\'est pas correcte.</p><p>Cliquez <a href="./connexionEnt.php">ici</a> pour revenir à la page précédente <br /><br />Cliquez <a href="../index.php">ici</a> pour revenir à la page d accueil</p>';
            echo "$message";
        }

        //$sql -> CloseCursor();
        //echo "test1";
    }

    echo '</div></body></html>';
    //echo "test2";

?>