<header>
	<div id="header-content">
		<img id="logo" src="view/style/img/logo.png" />
		<div id="header-top">
			<div id="news">
				<p>Ouverture de la programmation pour "Musilac"</p>
				<p>La musique donne une âme à nos coeurs et des ailes à la pensée. - Platon"</p>
			</div>
			<div id="header-right">
				<?php
				if ($data['connecte'] == true){
					echo "<div id=\"account\">";
					echo "<span id=\"username\">".$data['nom']."</span>\n";
					echo "<a href=\"#\">D�connexion</a>\n";
					echo "</div>\n";
					echo "<img class=\"img-profil\" src=\"../view/style/img/noimage.jpg\"/>\n";
				} else {
					echo "<div id=\"account\">";
					echo "<span><a href=\"../connexion/\">Connexion</a> | <a href=\"#\">Inscription</a></span>\n";
					echo "</div>\n";
				}?>
			</div>
		</div>
		<div id="header-bottom">
			<nav>
				<ul>
					<li><a href="#">Accueil</a></li><!--
					--><li><a href="#">Rechercher</a></li><!--
				--><li><a href="#">Mes contacts</a></li><!--
			--><li><a href="#">Mon compte</a></li>
		</ul>
	</nav>
</div>


</div>

</div>
</div>
</header>
