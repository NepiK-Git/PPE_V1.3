<?php

function checkPseudo($pseudo) {
	global $bdd;
	$SQL_pseudo = "SELECT pseudo FROM users WHERE pseudo = :pseudo";
    $pseudo_exist = $bdd->prepare($SQL_pseudo);
    $pseudo_exist->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $pseudo_exist->execute();
    return $pseudo_exist->fetchAll(PDO::FETCH_OBJ);
}

function checkEmail($email) {
	global $bdd;
	$SQL_email = "SELECT email FROM users WHERE email = :email";
    $email_exist = $bdd->prepare($SQL_email);
    $email_exist->bindParam(':email', $email, PDO::PARAM_STR);
    $email_exist->execute();
    return $email_exist->fetchAll(PDO::FETCH_OBJ);
}

function insert($pseudo, $firstName, $lastName, $datenaiss, $email, $mdp) {
	global $bdd;
	$insertion = $bdd->prepare("
        INSERT INTO users (pseudo, firstName, lastName, datenaiss, email, mdp, age, lvl) 
        VALUES (:pseudo, :firstName, :lastName, :datenaiss, :email, :mdp, 1, 1)");
	$insertion->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $insertion->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $insertion->bindValue(':lastName', $lastName, PDO::PARAM_STR);
    $insertion->bindValue(':datenaiss', $datenaiss, PDO::PARAM_STR);
    $insertion->bindValue(':email', $email, PDO::PARAM_STR);
    $insertion->bindValue(':mdp', $mdp, PDO::PARAM_STR);
    return $insertion->execute();
}

function utilisateur() {
	global $bdd;
	$requete = $bdd->prepare("SELECT * FROM users");
	$requete->execute();
	return $requete->fetch();
}

?>