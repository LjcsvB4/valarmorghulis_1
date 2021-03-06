<?php
//include config
require_once('config/config.php');
//check if already logged in move to home page
if($user->is_logged_in() ){ header('Location: memberpage.php'); } 
//process login form if submitted
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		if($password=="admin" && $username=="admin")
		{
			header('Location: admin/index.php');
		}
		else
		{

			header('Location: memberpage.php');
			exit;
		}
	
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}
}//end if submit
//define page title
$title = 'Login';
//include header template
require('layout/header.php'); 
?>

	
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Please Login</h2>
				<p><a class="LienFormulaire" href='./'>Back to home page</a></p>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}
				if(isset($_GET['action'])){
					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<p class='infoFormulaire'>Your account is now active you may now log in.</p>";
							break;
						case 'reset':
							echo "<p class='infoFormulaire'>Please check your inbox for a reset link.</p>";
							break;
						case 'resetAccount':
							echo "<p class='infoFormulaire'>Password changed, you may now login.</p>";
							break;
					}
				}
				
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a class="LienFormulaire" href='reset.php'>Forgot your Password?</a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>



</div>


<?php 
//include header template
require('layout/footer.php'); 
?>
