<?php 
function entete() {
echo "	<!doctype html>	";
echo "<html lang=\"fr\">";
echo "	<link rel=\"shortcut icon\" href=\"iconeGofT.ico\">";
echo "	<head>";
echo "		<meta charset=\"UTF-8\"/>";
echo "		<link rel=\"stylesheet\" href=\"./Style_CSS.css\">";
echo "		<title>Valar Morghulis</title>";
echo "	</head>";
echo "	<body>";

echo "		<header>";
echo "			<img style=\"min-widht: 100%\" src=\"./ValarMorghulis.png\" alt=\"Valar Morghulis\">";
echo "		</header>";
echo "		";
echo "		";
echo "		<div class=\"navigation\">";


echo "			<ul class=\"menu\">";
echo "				<li>";
echo "					<a class=\"bouton\" href=\"./Code_HTML.html\"> Accueil</a>";
echo "				</li>";
echo "				<li>";
echo "					<a class=\"bouton\" href=\"./Article_1.php\"> News Of the Sevens Kingdoms</a>";
echo "				</li>";
echo "				<li>";
echo "					<a class=\"bouton\" href=\"./Article_2.php\">News du site</a>";
echo "				</li>";
echo "				<li>";
echo "					<a class=\"bouton\" href=\"./Pagedephoto.php\">Les photos</a>";
echo "				</li>";
echo "				<li>";
echo "					<a class=\"bouton\" href=\"./pageVideo.php\">La vidéo</a>";
echo "				</li>";
echo	"				<li>";
echo	"			<a class=\"bouton\"	href=\"./Biographies.php\"	>Biographie</a>"	;	
echo	"				</li>";
echo "          <li>";
echo"          <a class=\"bouton\" href=\"./Pagedesaisi.php\" >Saisie</a>";
echo "			</ul>	";
echo "		</div>" ;
}

function formIncomplet($nom, $telephone, $email, $demande, $visite, $message){
	echo "			<h1 style=\"color:#B8860B\">";
	echo "				Tous les champs requis n'ont pas été remplis.";
	echo "			</h1>";
	echo "			<form method=\"post\" action=\"reception.php\">";
	echo "				<p>";
	echo "					<label for=\"nom\">Votre Nom*</label>";
	echo "					<input type=\"text\" name=\"nom\"  value=\"" .$nom. "\" size=\"30\"id=\"nom\"/>";
	echo "				</p>";
	echo "				<p>";
	echo "					<label for=\"email\">Votre Email*</label>";
	echo "					<input type=\"email\" name=\"email\" value=\"" .$email. "\"size=\"30\" id=\"email\"/>";
	echo "				</p>";
	echo "				<p>";
	echo "					<label for=\"telephone\">Votre Numéro de téléphone </label>";
	echo "					<input type=\"tel\" name=\"telephone\" value=\"" .$telephone. "\" size=\"16\" id=\"telephone\"/>";
	echo "				</p>";
	echo "				<p>";
	echo "					<label for=\"demande\">Votre Demande*</label>";
	echo "					<select name=\"demande\">";
	echo "						<option value=\"Bug\">Bug</option>";
	if ($demande == "Amélioration") {
		echo "						<option value=\"Amélioration\" selected=\"selected\">Amélioration</option>";
	} else { echo "						<option value=\"Amélioration\">Amélioration</option>"; }
	if ($demande == "Autre") {	
		echo "						<option value=\"Autre\" selected=\"selected\">Autre</option>";
	} else { echo "						<option value=\"Autre\">Autre</option>"; }
	echo "					</select>";
	echo "				</p>";
	echo "				<p>";
	echo "					<strong  style=\"color:#B8860B;\"\"><br/>S'agit-il de votre première visite ?</strong>";
	echo "				</p>				";
	echo "				<p>";
	echo "					<label for=\"oui\">	Oui</label>";
	if ($visite == "oui") {
		echo "					<input type=\"radio\" name=\"visite\" value=\"oui\" checked=\"checked\"/>";
	} else { echo "					<input type=\"radio\" name=\"visite\" value=\"oui\" id=\"oui\"/>"; }
	echo "				</p>				";
	echo "				<p>";
	echo "					<label for=\"non\">Non</label>";
	if ($visite == "non") {
		echo "					<input type=\"radio\" name=\"visite\" value=\"non\" checked=\"checked\"/>";
	} else { echo "					<input type=\"radio\" name=\"visite\" value=\"non\" id=\"non\"/>"; }
	echo "				</p>				";
	echo "				<p>";
	echo "					<label for=\"message\">Votre Message :*<br/><br/></label>";
	echo "					<textarea  name=\"message\" rows=\"20\" cols=\"60\">" .$message. "</textarea>";
	echo "				</p>";
	echo "				<p>";
	echo "					Rappel : Les champs suivis d'un * sont obligatoires.";
	echo "				</p>";
	echo "				<p>";
	echo "					<label for=\"envoyer\"></label>";
	echo "					<input type=\"submit\" value=\"envoyer\"/>";
	echo "				</p>";
}
?>
