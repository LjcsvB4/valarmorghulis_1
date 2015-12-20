<?php

if(!defined('PASSWORD_BCRYPT'))
{
	define('PASSWORD_BCRYPT',1);
	define('PASSWORD_DEFAULT',PASSWORD_BCRYPT);
}

class Password
{

	public function __construct()
	{
	}

	public function password_hash($password,$algo,array $option=array())
	{
		if(!function_exists('crypt'))
		{
			trigger_error('fonction crypt n\'existe pas',E_USER_WARNING);
			return null;
		}
		if(!is_string($password))
		{
			trigger_error('le mot de passe doit être une chaîne de caractère',E_USER_WARNING);
			return null;
		}
		if(!is_int($algo))
		{
			trigger_error('l\'algo doit être un entier',E_USER_WARNING);
			return null;
		}
		if(!isset($option['cost']))
		{
			$cost=10;
			$row_salt_length = 16;
			$required_salt_length = 22;
			$hash_format = sprintf('$2y$%02d$',$cost);
		}
		if(isset($option['salt']))
		{
			if(function_exists('mcrypt_create_iv'))
			{
				
			}
			if(function_exists('openssl_random_pseudo_bytes'))
			{

			}

		}

		$salt = md5(uniqid(rand(),true));
		$hash = $hash_format . $salt;
		$ret = crypt($password,$hash);
		return $ret;

	}




}
?>
