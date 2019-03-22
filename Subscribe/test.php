 <?php
    include("../Page/conf.php");
    $table = "profesional";

    echo "123";
    $message='';

    echo "456";

    if (empty($_POST['mail']) || empty($_POST['pass']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs</p>
        <p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
    }

    else //On check le mot de passe
    {

        /*PROBLEME AU NIVEAU DE LA REQUETE*/
        $query=$db->prepare('SELECT mail, pass FROM $table WHERE $_POST['mail'] = mail');
        $query->bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();

        if ($data['pass'] == hash_password($_POST['pass'])) // Acces OK !
        {

            $_SESSION['mail'] = $data['mail'];

            $message = '<p>Bienvenue '.$data['mail'].',vous êtes maintenant connecté!</p>
            <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d accueil</p>';  
        }

        else // Acces pas OK !
        {
            $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo entré n\'est pas correcte.</p><p>Cliquez <a href="./connexionPro.php">ici</a> pour revenir à la page précédente <br /><br />Cliquez <a href="./index.php">ici</a> pour revenir à la page d accueil</p>';
        }

        $query->CloseCursor();
    }

    echo $message.'</div></body></html>';

?>