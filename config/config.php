<?php

ob_start();
session_start();

define('DBHOST','localhost');
define('DBUSERNAME','root');
define('DBPASSWORD','benjamin');
define('DBNAME','site_web');
define('SITEEMAIL','noreply@hotmail.fr');


try 
{
	$db = new PDO('mysql:host='.DBHOST.';port=3306;charset=utf8;dbname='.DBNAME,DBUSERNAME,DBPASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
	echo '<p class="bg-danger">'.$e->getMessage.'</p>';

}
include('classes/user.php');
$user = new User($db);

?>
