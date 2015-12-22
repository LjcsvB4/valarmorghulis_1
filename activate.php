<?php

require('config/config.php');

$memberID = trim($_GET['x']);
echo 'memberID = ' . $memberID;
$active = 0;//trim($_GET['y']);
//if id is number and the active token is not empty carry on
if(is_numeric($memberID) && !empty($active)){
	//update users record set the active column to Yes where the memberID and active value match the ones provided in the array
	$stmt = $db->prepare("UPDATE utilisateur SET active = 'Yes' WHERE idUtilisateur = :idUtilisateur AND active = :active");
	$stmt->execute(array(
		':idUtilisateur' => $memberID,
		':active' => $active
	));
	//if the row was updated redirect the user
	if($stmt->rowCount() == 1){
		//redirect to login page
		header('Location: login.php?action=active');
		exit;
	} else {
		echo "Your account could not be activated."; 
	}
	
}


?>
