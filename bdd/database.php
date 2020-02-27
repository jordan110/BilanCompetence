<?php

define('DB_NAME', 'dbs264152');
define('DB_USER', 'dbu434026');
define('DB_PASSWORD', 'Jordan11&');
define('DB_HOST', 'db5000270616.hosting-data.io');
define('DB_TABLE', 'citation');



    try {
        global $db;
        //echo 'connect db';
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

	$req = $db->query("SELECT * FROM citation ORDER BY RAND() LIMIT 1");

	while ($donnees = $req->fetch()){
?>
    <p>
    <strong>Auteur</strong> : 
    <?php echo $donnees['auteur']; ?><br />
    <strong>Citation</strong> :
    <?php echo $donnees['texte']; ?>
   </p>
<?php
}

$req->closeCursor(); 

?>
