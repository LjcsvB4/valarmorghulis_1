<?php include_once('./FichierPHP.php'); ?>
<?php entete() ; ?>

<?php
	$nom="" ;
	if ( isset ($_POST[ 'nom' ] ) ){
		$nom = $_POST[ 'nom' ] ;
	}

	$telephone="" ;
	if ( isset ($_POST[ 'telephone' ] ) ){
		$telephone = $_POST[ 'telephone' ] ;
	}

	$email="" ;
	if ( isset ($_POST[ 'email' ] ) ){
		$email = $_POST[ 'email' ] ;
	}
	
	$demande="" ;
	$demande= $_POST[ 'demande' ] ;
	
	$visite="" ;
	if ( isset ($_POST[ 'visite' ] ) ){
		$visite = $_POST[ 'visite' ] ;
	}
	
	$message="" ;
	if ( isset ($_POST[ 'message' ] ) ){
		$message = $_POST[ 'message' ] ;
	}
	
	if (strlen ($nom)>=1 && strlen ($email)>=1 && strlen ($demande)>=1 && strlen ($message)>=1) {
		echo "<section>";
		echo "<h2 style= \"color: #B8860B;\">Données reçues </h2>\n" ;
		echo "<p style= \"color: #B8860B;\">\n" ;
		echo "Votre Nom : " .$nom. "<br/>\n" ;
		echo "Votre Téléphone : " . $telephone . "<br/>\n" ;
		echo "Votre E-mail : " . $email . "<br/>\n" ;
		echo "Votre demande : " . $demande . "<br/>\n" ;
		echo "Première visite  : " . $visite . "<br/>\n";
		echo "Votre Message : <br/>" . $message . "<br/>\n" ;
		echo "<br/>Votre demande a bien été prise en compte.";
		echo "</p>\n" ;
		echo"</section>";
	} else {
		formIncomplet ($nom, $telephone, $email, $demande, $visite, $message) ;
	}
?>

	<?php include_once('./Pieddepage.php'); ?>
<?php Pieddepage() ; ?>

