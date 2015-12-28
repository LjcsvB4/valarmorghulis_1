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
		$stmt= $db->prepare('SELECT pseudoUtilisateur from utilisateur where pseudoUtilisateur = :username');
		$stmt->execute(array(":username"=>$_POST['username']));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['pseudoUtilisateur']))
		{
			$error[] = "L'utilisateur existe déjà, veuillez en saisir un nouveau";
		}
	}

	if(strlen($_POST['password']) <3)
	{
		$error[] = 'Veuillez saisir un password ayant plus de 3 caractères';
	}
	if(strlen($_POST['passwordConfirm']) <3)
	{
		$error[] = 'Veuillez saisir un password de confirmation ayant plus de 3 caractères';
	}


	if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		$error[] = 'Veuillez saisir un email valide';
	}
	else
	{
		$stmt= $db->prepare('SELECT email from utilisateur where email = :email');
		$stmt->execute(array(":email"=>$_POST['email']));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email']))
		{
			$error[] = "L'email existe déjà, veuillez en saisir un nouveau";
		}
	}
	if($_POST['passwordConfirm']!=$_POST['password'])
	{
		$error[] = 'Le mot de passe et le mot de passe de confirmation ne sont pas égaux';
	}

	if(!isset($error))
	{
		$activation = md5(uniqid(rand(),true));
		$hash_password = $user->password_hash($_POST['password'],PASSWORD_BCRYPT);
		
		$stmt = $db->prepare('INSERT INTO utilisateur(pseudoUtilisateur,motDePasseUtilisateur,email,active) VALUES (:pseudoUtilisateur,:motDePasseUtilisateur,:email,:active)');
		$stmt->execute(array(
			":pseudoUtilisateur"=>$_POST['username'],
			":motDePasseUtilisateur"=>$hash_password,
			":email"=>$_POST['email'],
			":active"=>$activation
			));
		$id = $db->lastInsertId('idUtilisateur');

$mail->setFrom('SITEEMAIL', 'Mailer');
$mail->addAddress($_POST['email'], $_POST['username']); 


$mail->Subject = 'activer votre compte sur valarmorghulis';
$mail->Body    = '<p>L\'adresse url pour activer le compte, se trouve ci-dessous : </p>'.
		 '<p>http://localhost/valarmorghulis_1/activate.php?x='.$id.'&y='.$activation.'</p>';


if(!$mail->send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else 
{
   /* echo 'Message has been sent';*/
/*echo '<p><a href="http://localhost/valarmorghulis_1/activate.php?x='.$id.'&y='.$activation.'">activation compte</a></p>';*/
   header('Location: index.php?action=joined');
    
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
				<p><a class="LienFormulaire" href="login.php">Login</a></p>
				<?php
				if(isset($error))
				{
					foreach($error as $error)
					{
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}
				if(isset($_GET['action']) && $_GET['action']=='joined')
				{
					echo '<p class="bg-success">L\'enregistrement s\'est bien passé, veuillez activer votre compte en allant dans votre boîte mail</p>';


				}


				?>
				<div class="form-group">

					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="pseudo">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="email" >

					
 
				</div>
				
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">

							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="mot de passe">


 
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">

							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirmer mot de passe">


 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 center">
					<input type="submit" name="submit" id="submit" class="btn btn-primary" value="valider">
					</div>

 
				</div>

			</form>
		</div>
	</div>
</div>



<?php
require_once('layout/footer.php');
?>
