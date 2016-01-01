<?php 

require 'config/config.php';

session_unset();

header('Location: login.php');
exit;

