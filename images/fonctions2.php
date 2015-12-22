<?php
function entete(){
	echo "	<!doctype html>\n";
	echo "	<html lang=\"fr\">\n";
	echo "		<head>\n";
	echo "			<meta charset=\"UTF-8\"/>\n";
	echo "			<link rel=\"stylesheet\" href=\"./style.css\" media=\"screen\"/>\n";
	echo "			<link rel=\"stylesheet\" href=\"./print.css\" media=\"print\"/>\n";
	echo "			<title>The Walking Dead Actu</title>\n";
	echo "			<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./icone.png\" />";
	echo "		</head>\n";
	echo "		\n";
	echo "		<body>\n";
	echo "			<header>\n";
	echo "				<div>\n";
	echo "					<a href=\"http://www.twitter.com\" class=\"image\"><img src=\"./logoTwitter.png\" alt=\"Twitter\" class=\"social\"/></a>\n";
	echo "					<a href=\"http://www.facebook.com\" class=\"image\"><img src=\"./logoFb.png\" alt=\"Facebook\" class=\"social\"/></a>\n";
	echo "				</div>\n";
	echo "				<a href=\"./accueil.php\"><img src=\"./banniere.png\" class=\"banniere\"/></a>\n";
	echo "			</header>			\n";
	echo "				\n";
	echo "				<nav>\n";
	echo "					<ol>\n";
	echo "						<li>\n";
	echo "							<a href=\"./accueil.php\">Accueil</a>\n";
	echo "						</li>\n";
	echo "						\n";
	
	echo "						<li class=\"bio\">\n";
	echo "							<a href=\"./biographies.php\">Biographies</a>\n";
    echo "                          <ol class =\"bio\">\n";
    echo "                              <li>\n ";
    echo "                                  <a href=\"./bio_daryl.php\">Daryl</a>\n"; 
    echo "                              </li>\n";
    echo "                              <li>\n ";
    echo "                                  <a href=\"./bio_michonne.php\">Michonne</a>\n"; 
    echo "                              </li>\n";
    echo "                              <li>\n ";
    echo "                                  <a href=\"./bio_rick.php\">Rick</a>\n"; 
    echo "                              </li>\n";
    echo "                              <li>\n ";
    echo "                                  <a href=\"./bio_glenn.php\">Glenn</a>\n"; 
    echo "                              </li>\n";
    echo "                          </ol>\n";
	echo "						</li>\n";
    
	echo "						\n";
	echo "						<li>\n";
	echo "							<a href=\"./medias.php\">Médias</a>\n";
	echo "						</li>\n";
	echo "						<li class=\"avDer\">\n";
	echo "							<a href=\"./contact.php\">Contact</a>\n";
    echo "                      <li class=\"red\">\n ";
    echo "                           Episodes\n"; 
    echo "                      </li>\n";
    echo "                      <li class=\"red\">\n ";
    echo "                           Partager\n"; 
    echo "                      </li>\n";
	echo "					</ol>\n";
	echo "				</nav>\n";
}

function bas_page(){

    echo "          <div class=\"Bas\">\n"; 
    echo "			   <footer>\n";
	echo "				 <p>Franck Darignac et Lucas Trampal, groupe 2</p>\n";
	echo "			  </footer>\n";

    echo "			   <aside>\n";
	echo "				 <h4>Saison 1</h4>\n";
	echo "				 <ul>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_1_de_The_Walking_Dead#.C3.89pisode_1_:_Pass.C3.A9_d.C3.A9compos.C3.A9\">Episode&nbsp;1</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_1_de_The_Walking_Dead#.C3.89pisode_2_:_Tripes\">Episode&nbsp;2</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_1_de_The_Walking_Dead#.C3.89pisode_3_:_T.E2.80.99as_qu.E2.80.99.C3.A0_discuter_avec_les_grenouilles\">Episode&nbsp;3</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_1_de_The_Walking_Dead#.C3.89pisode_4_:_Le_Gang\">Episode&nbsp;4</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_1_de_The_Walking_Dead#.C3.89pisode_5_:_Feux_de_for.C3.AAt\">Episode&nbsp;5</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_1_de_The_Walking_Dead#.C3.89pisode_6_:_Sujet-test_19\">Episode&nbsp;6</a>  </li>\n";
	echo "				 </ul>\n";
	echo "				\n";
	echo "				 <h4>Saison&nbsp;2</h4>\n";
	echo "				 <ul>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_1_:_Ce_qui_nous_attend\">Episode&nbsp;1</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_2_:_Saign.C3.A9e\">Episode&nbsp;2</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_4_:_Rose_Cherokee\">Episode&nbsp;3</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_3_:_Le_Tout_pour_le_tout\">Episode&nbsp;4</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_5_:_Le_Chupacabra\">Episode&nbsp;5</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_6_:_Secrets\">Episode&nbsp;6</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_7_:_D.C3.A9j.C3.A0_plus_ou_moins_mort\">Episode&nbsp;7</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_8_:_Nebraska\">Episode&nbsp;8</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_9_:_Le_Doigt_sur_la_d.C3.A9tente\">Episode&nbsp;9</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_10_:_.C3.80_dix-huit_miles.2C_au_moins\">Episode&nbsp;10</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_11_:_Juge.2C_Jur.C3.A9_et_Bourreau\">Episode&nbsp;11</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_12_:_Les_Meilleurs_Anges_de_notre_nature\">Episode&nbsp;12</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_2_de_The_Walking_Dead#.C3.89pisode_13_:_Pr.C3.A8s_du_feu_mourant\">Episode&nbsp;13</a></li>				\n";
	echo "				 </ul>				\n";
	echo "				\n";
	echo "				 <h4>Saison&nbsp;3</h4>\n";
	echo "				 <ul>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_1_:_Graines\">Episode&nbsp;1</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_2_:_Malade\">Episode&nbsp;2</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_3_:_Marchez_avec_moi\">Episode&nbsp;3</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_4_:_Un_tueur_.C3.A0_l.27int.C3.A9rieur\">Episode&nbsp;4</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_5_:_Dis-le\">Episode&nbsp;5</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_6_:_La_Traque\">Episode&nbsp;6</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_7_:_Quand_les_morts_approchent\">Episode&nbsp;7</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_8_:_Une_vie_de_souffrance\">Episode&nbsp;8</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_9_:_Le_Roi_du_suicide\">Episode&nbsp;9</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_10_:_Chez_nous\">Episode&nbsp;10</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_11_:_Entre_deux_feux\">Episode&nbsp;11</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_12_:_Retrouvailles\">Episode&nbsp;12</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_13_:_Une_fl.C3.A8che_sur_la_porte\">Episode&nbsp;13</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_14_:_La_Proie\">Episode&nbsp;14</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_15_:_Cette_triste_vie\">Episode&nbsp;15</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_3_de_The_Walking_Dead#.C3.89pisode_16_:_Bienvenue_dans_le_tombeau\">Episode&nbsp;16</a></li>\n";
	echo "				 </ul>\n";
	echo "				\n";
	echo "				 <h4>Saison&nbsp;4</h4>\n";
	echo "				 <ul>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_1_:_30_jours_sans_accident\">Episode&nbsp;1</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_2_:_Infect.C3.A9s\">Episode&nbsp;2</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_3_:_Isolement\">Episode&nbsp;3</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_4_:_Indiff.C3.A9rence\">Episode&nbsp;4</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_5_:_Internement\">Episode&nbsp;5</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_6_:_App.C3.A2t_vivant\">Episode&nbsp;6</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_7_:_Poids_mort\">Episode&nbsp;7</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_8_:_D.C3.A9sesp.C3.A9r.C3.A9\">Episode&nbsp;8</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_9_:_Apr.C3.A8s\">Episode&nbsp;9</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_10_:_D.C3.A9tenus\">Episode&nbsp;10</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_11_:_Revendiqu.C3.A9\">Episode&nbsp;11</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_12_:_Parenth.C3.A8se\">Episode&nbsp;12</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_13_:_Seul\">Episode&nbsp;13</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_14_:_Le_Verger\">Episode&nbsp;14</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_15_:_Nous\">Episode&nbsp;15</a></li>\n";
	echo "					    <li><a href = \"http://fr.wikipedia.org/wiki/Saison_4_de_The_Walking_Dead#.C3.89pisode_16_:_A\">Episode&nbsp;16</a></li>\n";
	echo "				 </ul>\n";
    
	echo "			  </aside>\n";
    echo "          </div>\n";
	echo "		</body>\n";
	echo "		\n";
	echo "	</html>\n";    

}

function formIncomplet($nom, $telephone, $email, $demande, $visite, $message){
	echo "	<section>";
	echo "		<div>";
	echo "			<h2>";
	echo "				Tous les champs requis n'ont pas été remplis.";
	echo "			</h2>";
	echo "		</div>";
	echo "		<div>";
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
	echo "					<strong><br/>S'agit-il de votre première visite ?</strong>";
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
	echo "			</form>";
	echo "		";
	echo "		</div>";
	echo "	</section>";
}
?>

