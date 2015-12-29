<?php
//include config
require_once('../config/config.php');
//log user out
$user->loggout();
header('Location: index.php'); 
?>
