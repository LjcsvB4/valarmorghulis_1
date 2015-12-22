<?php include_once './fonctions2.php'; ?>

<?php entete();?>

	<section>
		<div>
			<h2>
				Contactez-nous !
			</h2>
			<p>
				Téléphone : 06 66 66 66 66<br/>
				Email : twd.actu@web.org<br>
				Adresse : 29 rue des papillons, Clermont-Ferrand 63000
			</p>
		</div>
		<div>
			<form method="post" action="reception.php">
				<p>
					<label for="nom">Votre Nom*</label>
					<input type="text" name="nom"  size="30" id="nom"/>
				</p>
				<p>
					<label for="email">Votre Email*</label>
					<input type="email" name="email" size="30" id="email"/>
				</p>
				<p>
					<label for="telephone">Votre Numéro de téléphone </label>
					<input type="tel" name="telephone" size="11" id="telephone"/>
				</p>
				<p>
					<label for="demande">Votre Demande*</label>
					<select name="demande" id="demande">
						<option value="Bug">Bug</option>
						<option value="Amélioration">Amélioration</option>
						<option value="Autre">Autre</option>
					</select>
				</p>
				<p>
					<strong><br/>S'agit-il de votre première visite ?</strong>
				</p>				
				<p>
					<label for="oui">	Oui</label>
					<input type="radio" name="visite" value="oui" id="oui"/>
				</p>				
				<p>
					<label for="non">Non</label>
					<input type="radio" name="visite" value="non" id="non"/>
				</p>				
				<p>
					<label for="message">Votre Message :*<br/><br/></label>
					<textarea  name="message" rows="20" cols="60"></textarea>
				</p>
				<p>
					Les champs suivis d'un * sont obligatoires.
				</p>
				<p>
					<label for="envoyer"></label>
					<input type="submit" value="envoyer"/>
				</p>
			</form>
		
		</div>
	</section>
	

<?php bas_page();?>
