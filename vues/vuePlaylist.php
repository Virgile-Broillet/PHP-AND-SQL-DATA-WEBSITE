<?php error_reporting(0); ?>

<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<style>
h2{
	width:20em;
}
</style>

<center>
	<div class="formulaire">
		<h2> Création d'Une Playlist Aléatoire</h2>
		<form method="post" action="#">
			<label for="nomchanson"></label>
			
			<div class="gauche"><p type="Durée de la Playlist en minutes :"> <input class="bb" type="number" name="duréePlaylist" id="durée en minutes" placeholder="20" min="4" required /></div></p>
			<div class="droite"><p type="Nom de votre Playlist :"> <input class="bb" type="text" name="nomPlaylist" id="nomPlaylist" placeholder="Les musiques de Tchoupi" require ></div></p></br>
			
			</br></br></br></br></br>

			<p type="Genre privilégié :">
				<select name="genre1" id="genre1">
						<option>Tous les genres ( au hasard )</option>
						<option>Metal</option>
						<option>Rock</option>
						<option>Pop</option>
						<option>Funk</option>
						<option>Punk</option>
						<option>Indie</option>
						<option>Electro</option>
						<option>Classical</option>
						<option>Reggae</option>
				</select>
			<br/></p>
			
			</br>

			<div class="button"><input type="submit" name="boutonValider" value="Ajouter"/></div>
		</form>
	</div>
</center>
