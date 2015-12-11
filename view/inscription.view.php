	<div id="content">
	<h2>Inscription</h2>
	<div id="inscription">
		<form>
			<h3>Informations personnelles</h3>
			<hr>

			<table><!-- INFO PERSO -->
			<tr class="ligne_radio">
				<td>Vous êtes un &nbsp</td>
				<td></td>
				<td>
					<input type="radio" name="type" value="booker" id="radio_booker" checked/><label for="radio_booker">Booker</label>
					<input type="radio" name="type" value="groupe" id="radio_groupe"/><label for="radio_groupe">Groupe</label>
					<input type="radio" name="type" value="orga" id="radio_orga"/><label for="radio_orga">Organisateur</label>
				</td>
			</tr>

			<tr class="ligne_simple">
				<td>Pseudonyme *</td>
				<td></td>
				<td><input type="text" name="libelle"/></td>
			</tr>

			<tr class="ligne_double">
				<td><input type="button" id="img_opposite" onclick="alert('Bouton appuyé')">Prénom *</td>
				<td></td>
				<td><input type="text" name="prenom"><span>Nom* </span><input type="text" name="prenom"></td>
			</tr>

			<tr class="ligne_petite">
				<td>Telephone mobile &nbsp</td>
				<td></td>
				<td><input type="tel" name="mobile"/></td>
			</tr>
			<tr class="ligne_petite">
				<td>Telephone fixe &nbsp</td>
				<td></td>
				<td><input type="tel" name="fix"/></td>
			</tr>
			</table>

			<h3>Informations de connexion</h3>
			<hr>
			<table> <!-- INFO CONNEXION -->
			<tr class="ligne_simple">
				<td>Adresse e-mail *</td>
				<td></td>
				<td><input type="email" name="email" required/></td>
			</tr>
			<tr class="ligne_simple">
				<td>Confirmer *</td>
				<td></td>
				<td><input type="email" name="conf_email" required/></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td></td>
				<td></td>
			</tr>
			<tr class="ligne_simple">
				<td>Mot de passe *</td>
				<td></td>
				<td><input type="password" name="mdp" required/></td>
			</tr>
			<tr class="ligne_simple">
				<td>Confirmer *</td>
				<td></td>
				<td><input type="password" name="conf_mdp" required/></td>
			</tr>
			</table>
			

			<h3>Adresse</h3>
			<hr>
			<table> <!-- ADRESSE -->
			<tr class="ligne_simple">
				<td>Libellé de la voie</td>
				<td></td>
				<td><input type="text" name="libelle_voie"/></td>
			</tr>
			<tr class="ligne_petite">
				<td>Ville</td>
				<td></td>
				<td><input type="text" name="libelle"></td>
			</tr>
			<tr class="ligne_petite">
				<td>Code postal</td>
				<td></td>
				<td><input type="text" name="code postal"></td>
			</tr>
			<tr class="ligne_petite">
				<td>Pays</td>
				<td></td>
				<td><input type="text" name="libelle"></td>
			</tr>
			</table>

			<input type="submit" value="Valider l'inscription">

		</form>
	</div>
	</div>

	<footer>


	</footer>
  </body>
</html>
