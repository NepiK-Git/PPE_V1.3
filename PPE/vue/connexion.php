<div class="container">
    <div class="row d-flex justify-content-center">
       <div class="col-12 mt-4">
            <?= Alerts::getFlash(); ?>
            
            <?php if (isset($_SESSION['id_u'])) { header('Location: compte'); 
                  }else{
            ?>
            
            <div class="alert alert-info">
                <h3 class="text-center">Se connecter</h3>
                <form method="post" action="">
                    <div class="mb-3 form-group">
                        <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off" class="form-control" value="<?php if (isset($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>">
                    </div>
                    <div class="mb-3 form-group">
                        <input type="password" name="mdp" placeholder="Mot de passe" autocomplete="off" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" name="connexion" class="btn btn-primary btn-lg active fw-bold">Connexion</button>
                    </div>
                    <p class="text-center">Pas de compte ? <a href="inscription">Créer un compte</a></p>
                </form>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>