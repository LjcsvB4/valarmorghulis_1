<?php
require_once('config/config.php');

if($user->is_logged_in())
{
	header('Location : memberpage.php');
}

if(isset($_POST['submit']))
{
	if(strlen($_POST['username']) < 3)
	{
		$error[] = 'Veuillez saisir un nom d\'utilisateur ayant plus de 3 caractères';
	}
	else
	{
		$stmt= $db->prepare('SELECT pseudoUtilisateur,motDePasseUtilisateur,idUtilisateur from utilisateur where pseudoUtilisateur = :username');
		$stmt->execute(array(":username"=>$_POST['username']));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['pseudoUtilisateur']))
		{
			$error[] = "L'utilisateur existe déjà, veuillez en saisir un nouveau";
		}
	}





}


$title = 'accueil';
require_once('layout/header.php');
?>



<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<form role="form" name="form" method="POST" action="" autocomplete="off">
				<h2>Veuillez vous inscrire</h2>
				<p><a href="login.php">Login</a></p>
				<?php
				if(isset($error))
				{
					foreach($error as $error)
					{
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}
				if(isset($_GET['action']) && $_GET['action']==true)
				{
					echo '<p class="bg-success">L\'enregistrement s\'est bien passé, veuillez activer votre compte en allant dans votre boîte mail</p>';
				}


				?>
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control" placeholder="username" value="<?php if(isset($_POST['username'])) { echo $_POST['username'];};?>">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control" placeholder="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email'];};?>">
				</div>
				
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control" placeholder="mot de passe">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<input type="passwordConfirm" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder="Confirmer mot de passe">
						</div>
					</div>
				</div>
				<div class="row">
					<input type="submit" name="submit" id="submit" class="btn btn-primary" value="valider">
				</div>

			</form>
		</div>
	</div>
</div>



<?php
require_once('layout/footer.php');
?>
