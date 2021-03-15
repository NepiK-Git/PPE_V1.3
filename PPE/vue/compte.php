<?php echo "<div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow\">
           <div class=\"text-center mb-4\">
            <br>
            <h1 class=\"h3 mb-3 font-weight-normal\">Profil</h1>
            <br>
            
            </div>
        Nom et prenom : ".$_SESSION['lastName']." ".$_SESSION['firstName']."<br>".
        //Affiche l'adresse mail
        "Votre adresse email : ".$_SESSION['email']."<br>".
        //Affiche le lien pour modifier le mot de passe
        "<a class=\"py-2 d-none d-md-inline-block\" href=modify_password.php>Modifier mon mot de passe</a>"."</div>";
?>