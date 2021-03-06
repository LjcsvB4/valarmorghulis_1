<?php require('config/config.php'); 
$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();
//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

	<div id="wrapper">
<a href="logout.php">Logout</a>
		<h1>Blog</h1>
		<hr />
		<p><a href="./memberpage.php">Blog Index</a></p>


		<?php	
			echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
	

echo '<h2>Commentaires</h2>';



// Récupération des commentaires
$req = $db->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaire WHERE id_billet = ? ORDER BY id DESC LIMIT 3');
$req->execute(array($_GET['id']));

while ($donnees = $req->fetch())
{
?>
<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
<?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>
	</div>


<form action="commentaire_post.php" method="post">
<p>
<label for="commentaire">Commentaire</label> : <input type="text" name="commentaire" id="commentaire" /><br />
<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>">
<input type="submit" value="Envoyer" />
</p>
</form>




</body>
</html>
















