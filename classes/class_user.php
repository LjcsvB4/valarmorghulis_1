<?php
class User extends Password
{


	private $_db;


	public function __construct($db)
	{
		//parent::__construct();
		$this->_db = $db;
	}

	public function getUserHash($username)
	{



	}

	public function login($username,$password)
	{


	}




	public function loggout()
	{
		session_destroy();
	}

	public function is_logged_in()
	{
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}

?>
