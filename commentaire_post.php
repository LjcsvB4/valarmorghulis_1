<?php
require_once('config/config.php');
$id=$_POST['id'];
if(isset($_POST['commentaire']) && !empty($_POST['commentaire']))
{
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=site_web', 'root', 'benjamin');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 
$req = $bdd->prepare('INSERT INTO commentaire (id_billet,auteur, commentaire, date_commentaire) VALUES(?,?, ?, NOW())');
$req->execute(array($_POST['id'],$_SESSION['username'],$_POST['commentaire']));
 }
header('Location: viewpost.php?id='.$id);
exit;
?>
