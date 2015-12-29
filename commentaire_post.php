<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=site_web', 'root', 'benjamin');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 
$req = $bdd->prepare('INSERT INTO commentaire (id_billet,auteur, commentaire, date_commentaire) VALUES(?,?, ?, NOW())');
$req->execute(array($_POST['id'],$_POST['auteur'],$_POST['commentaire'] $_POST['date_commentaire']));
 
header('Location: viewpost.php');
exit;
?>
