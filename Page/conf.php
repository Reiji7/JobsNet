<?php

session_start();

/* Variables de connexion */
$serveur = "localhost:8888";
$log = "root";
$password = "";
$base = "Projet Info";
$table = "enterprise";
$_SESSION['id'] = 0;

/* Connexion au serveur */
try {
    $pdo = new PDO("mysql: host=$serveur; dbname=$base", $log, $password);
    $pdo->exec("SET NAMES 'utf8'");
}
catch(Exception $e) {
    print '<p>Une erreur est survenue </p>';
    die();
}

/* Vérification des password */
function check_password($password, $dbhash) {
    /* creation d'un chaine aleatoire  */
    $salt = substr($dbhash, 0, 64);
    /* get the SHA256 hash */
    $valid_hash = substr($dbhash, 64, 64);
    /* hashage du password */
    for ($i = 0;$i < 10000;$i++) $test_hash = hash("sha256", $password . $salt);
    return $test_hash === $valid_hash;
}

/* Chiffrement des password */
function hash_password($password) {
    /* prepend salt then hash */
    $hash = password_hash($password, PASSWORD_BCRYPT);
    /* return salt and hash in the same string */
    return $hash;
}

$vide = $pdo->quote("");

?>
