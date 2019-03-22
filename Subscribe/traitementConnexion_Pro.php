 <?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);

    include("../Page/conf.php");
    $table = "profesional";

    $message='';

    if (empty($_POST['mail']) || empty($_POST['pass']) ) //Si oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs</p>
        <p>Cliquez <a href="./connexionPro.php">ici</a> pour revenir</p>';
    }

    else //On check le mot de passe
    {
    	$mdpRecup = $_POST['pass'];
    	
		$mail = $pdo -> quote($_POST['mail']);

        $sql =  "SELECT mail, pass FROM $table WHERE mail = $mail";
        
		$answer = $pdo->query($sql);
		$data = $answer->fetch();

		$validPassword = password_verify($mdpRecup, $data['pass']);
		

        if ($validPassword == true)
        {
        	//echo "testA";

            session_start();
            $_SESSION['mail'] = $data['mail'];
            $_SESSION['pass'] = $data['pass'];

            $message = '<p>Bienvenue '.$data['mail'].',vous êtes maintenant connecté!</p> <p>Cliquez <a href="../index.php">ici</a> pour revenir à la page d accueil</p>';

            echo "$message"; 

            header('location:../index.php');
        }

        else
        {
        	//echo "testB";
            $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo entré n\'est pas correcte.</p><p>Cliquez <a href="./connexionPro.php">ici</a> pour revenir à la page précédente <br /><br />Cliquez <a href="../index.php">ici</a> pour revenir à la page d accueil</p>';
            echo "$message";
        }

        //$sql -> CloseCursor();
        //echo "test1";
    }

    echo '</div></body></html>';
    //echo "test2";

?>