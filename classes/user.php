<?php


class User
{


	private $db;


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
