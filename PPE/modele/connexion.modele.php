<?php

function getUtilisateur($pseudo, $mdp) {
	global $bdd;
	$requete = $bdd->prepare("SELECT * FROM users WHERE pseudo = :pseudo AND mdp = :mdp");
	$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
	$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
	$requete->execute();
	return $requete->fetch();
}

?>