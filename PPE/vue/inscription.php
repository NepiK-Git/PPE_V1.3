<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-12">
			<div class="card mt-5">
				<div class="card-header" style="background-color: #7F0E55;">
					<h3 class="text-center text-light">Créer un compte</h3>  
				</div>
				<div class="card-body bg-secondary">
					<form method="post" action="">
						<div class="mb-3 form-group">
							<input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off" class="form-control" value="<?php if (isset($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>">
						</div>
						<div class="mb-3 form-group">
							<input type="text" name="firstName" placeholder="Prénom" autocomplete="off" class="form-control" value="<?php if (isset($_POST['firstName'])) { echo $_POST['firstName']; } ?>">
						</div>
						<div class="mb-3 form-group">
							<input type="text" name="lastName" placeholder="Nom" autocomplete="off" class="form-control" value="<?php if (isset($_POST['lastName'])) { echo $_POST['lastName']; } ?>">
						</div>
						<div class="mb-3 form-group">
							<input type="text" name="datenaiss" placeholder="AAAA-MM-JJ" autocomplete="off" class="form-control" value="<?php if (isset($_POST['datenaiss'])) { echo $_POST['datenaiss']; } ?>">
						</div>
						<div class="mb-3 form-group">
							<input type="email" name="email" placeholder="Adresse Email" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>">
						</div>
						<div class="mb-3 form-group">
							<input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
						</div>
						<div class="mb-3 form-group">
							<input type="password" name="mdp2" placeholder="Confirmez votre mot de passe" class="form-control">
						</div>
						<div class="d-flex justify-content-center mb-3" >
							<button type="submit" name="signup" class="btn btn-success btn-lg active fw-bold">Créer un compte</button>
						</div>
						
						<p class="text-center">Déjà un compte ? <a href="connexion">Connectez-vous</a></p>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<?= Alerts::getFlash(); ?>
</div>
