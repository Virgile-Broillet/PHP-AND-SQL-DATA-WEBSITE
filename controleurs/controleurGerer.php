<?php 
$connexion = getConnexionBD(); // connexion à la BD


	// recuperation des Playlists
	$playlist = getInstances($connexion, "`LISTE_DE_LECTURE`");
	if($playlist == null || count($playlist) == 0)
	{
		$message .= "Aucune Playlist n'a été trouvée dans la base de données !"; 
	}
/*
	isset($_POST['boutonSupprimer'])
	{
		
		delete_chanson_from_playlist($connexion, $idV, $idLec);
		
		régulariser_playlist($connexion, $idLec);
	}*/

	if(isset($_POST['boutonComparer'])) 
	    {
	$titreLec1 = $_POST['titreL'];  // nom de la playlist 1
	$titreLec2 = $_POST['titreL2']; // nom de la playlist 2
	
	
	
		}
	
?>
