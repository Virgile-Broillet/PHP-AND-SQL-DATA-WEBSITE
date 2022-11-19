<?php 

$groupe = getInstances($connexion, "GROUPE");
if($groupe == null || count($groupe) == 0) {
	$message .= "Aucun Groupe n'a été trouvée dans la base de données !";
}

$genre = getInstances($connexion, "GENRE");
if($genre == null || count($genre) == 0) {
	$message .= "Aucun Genre n'a été trouvée dans la base de données !";
}

$chanson = getInstances($connexion, "CHANSON");
if($chanson == null || count($chanson) == 0) {
	$message .= "Aucune Chansons n'a été trouvée dans la base de données !";
}

$album = getInstances($connexion, "ALBUM");
if($album == null || count($album) == 0) {
	$message .= "Aucun ALbum n'a été trouvée dans la base de données !";
}

if(isset($_POST['boutonValider'])) { // formulaire soumis

	$nomGroupe = $_POST['nomgroupe']; // recuperation de la valeur saisie
	$nomChanson = $_POST['nomchanson'];
	$nom_genre = $_POST['genre'];
	$année = $_POST['date'];
	$durée = $_POST['durée'];
	$chemin = $_POST['chemin'];
	$forme = $_POST['forme'];
	$type = $_POST['type'];
	$nomAlbum = $_POST['album'];
	$numero_piste = $_POST['numero_piste'];
	$nV = 1;

	if ($forme == 'Composition')
	{
		$forme2 = 1;
	}else
	{
		$forme2 = 0;
	}

	$last_id_song=get_Last_Id_Song($connexion);	

	$idA = get_idA_By_nomAlbum($connexion, $nomAlbum);
	$idGE = get_idGE_By_nomGE($connexion, $nom_genre);
	$idG = get_idG_By_nomGroupe($connexion, $nomGroupe);

	$verification = getSongByName($connexion, $nomChanson);

	if($verification == FALSE || count($verification) == 0) { // pas de chanson avec ce nom, insertion

		$insertion_song = insertSong($connexion, $nomChanson, $last_id_song, $année, $forme2, $type, $idA, $numero_piste);
		$insertion_poss = insertPosseder($connexion, $last_id_song, $idGE);
		$insertion_version = insertVersion($connexion, $last_id_song, $nV, $année, $chemin, $durée);
		$insertion_inter = insertInterpreter($connexion, $last_id_song, $idG);

		if($insertion_song && $insertion_poss && $insertion_version && $insertion_inter == TRUE) {
			$message = "La Chanson $nomChanson a bien été ajoutée !";
		}
		else {
			$message = "Erreur lors de l'insertion de la Chanson $nomChanson.";
		}
	}
	else {
		$message = "Une Chanson existe déjà avec ce nom ($nomChanson).";
	}
}

?>
