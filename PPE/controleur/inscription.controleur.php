<?php require "modele/inscription.modele.php";

if (isset($_SESSION['id_u'])) {
	header('Location:compte');
}

if (isset($_POST['signup'])) {
	if (!empty($_POST['pseudo'])) {
		if (!empty($_POST['firstName'])) {
			if (!empty($_POST['lastName'])) {
				if (!empty($_POST['email'])) {
					if (!empty($_POST['datenaiss'])) {
						if (!empty($_POST['mdp'])) {
							if (!empty($_POST['mdp2'])) {
								$pseudo = htmlspecialchars($_POST['pseudo']);
								$firstName = htmlspecialchars($_POST['firstName']);
								$lastName = htmlspecialchars($_POST['lastName']);
								$email = htmlspecialchars($_POST['email']);
								$datenaiss = htmlspecialchars($_POST['datenaiss']);
								$mdp = sha1($_POST['mdp']);
								$mdp2 = sha1($_POST['mdp2']);
								if ($mdp == $mdp2) {
									if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
										if (preg_match("#^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$#", $email)) {
											if (preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/", $_POST['mdp'])) {
												$pseudo_exist = checkPseudo($pseudo);
												$email_exist = checkEmail($email);
												if ($pseudo_exist) {
													Alerts::setFlash("Ce pseudo est déjà utilisé", "warning");
												} elseif ($email_exist) {
													Alerts::setFlash("Cette adresse email est déjà utilisé", "warning");
												} else {
													$insertion = insert($pseudo, $firstName, $lastName, $datenaiss, $email, $mdp);
													$requete = utilisateur();
													$_SESSION['id_u'] = $requete['id_u'];
								                    $_SESSION['pseudo'] = $requete['pseudo'];
								                    $_SESSION['firstName'] = $requete['firstName'];
								                    $_SESSION['lastName'] = $requete['lastName'];
								                    $_SESSION['datenaiss'] = $requete['datenaiss'];
								                    $_SESSION['age'] = $requete['age'];
								                    $_SESSION['email'] = $requete['email'];
								                    Alerts::setFlash("Users ajouté avec succès !", "success");
													//header('Location:compte');
                                                    //exit();
												}
											} else {
												Alerts::setFlash("<strong><strong>Erreur :</strong> Votre mot de passe doit contenir au moins 1 lettre MAJUSCULES, 1 lettre minuscules, 1 chiffre et minimum 8 caractères.</strong>", "danger");
											}
										} else {
											Alerts::setFlash("<strong>Format invalide.</strong>", "danger");
										}
									} else {
										Alerts::setFlash("<strong>Format invalide.</strong>", "danger");
									}
								} else {
									Alerts::setFlash("Les mots de passe ne correspondent pas.", "warning");
								}
							} else {
								Alerts::setFlash("Veuillez le confirmer", "warning");
							}
						} else {
							Alerts::setFlash("Veuillez saisir un mot de passe", "warning");
						}
					} else {
						Alerts::setFlash("Veuillez saisir votre date de naissance", "warning");
					}
				} else {
					Alerts::setFlash("Veuillez saisir votre email.", "warning");
				}
			} else {
				Alerts::setFlash("Veuillez saisir votre nom.",  "warning");
			}
		} else {
			Alerts::setFlash("Veuillez saisir votre prénom.", "warning");
		}
	} else {
		Alerts::setFlash("Veuillez saisir un pseudo.", "warning");
	}
}

require "vue/inscription.php"; 

?>