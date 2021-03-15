<?php 

if (! isset($_SESSION['panier']))  $_SESSION['panier'] = array();

//données panier
$id_article   = isset($_GET['id_article'])   ? $_GET['id_article']   : null;
$nom_article  = isset($_GET['nom_article'])  ? $_GET['nom_article']  : null;
$prix_article = isset($_GET['prix_article']) ? $_GET['prix_article'] : '?';
$qte_article  = isset($_GET['qte_article'])  ? $_GET['qte_article']  : 1;


//traitements panier
if ($id_article == null) // Message si pas d'acticle sélectionné
    $msg_not_article = "";
elseif (isset($_GET['ajouter'])) { 
    
    //nouvel article
  $_SESSION['panier'][$id_article]['nom']  = $nom_article;
  $_SESSION['panier'][$id_article]['prix'] = $prix_article;
  $_SESSION['panier'][$id_article]['qte']  = $qte_article;
    
} elseif (isset($_GET['modifier']))  $_SESSION['panier'][$id_article]['qte'] = $qte_article; //Modifier quantité
elseif (isset($_GET['supprimer']))  unset($_SESSION['panier'][$id_article]); //Supprimer
?>

<h2 class="text-center mt-4">Contenu de votre panier</h2>

<?php if (isset($msg_not_article)) { ?>
<p class="text-center">Veuillez sélectionner un article pour le mettre dans le panier!</p>
<?php } ?>

<?php
if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) {
    $total_panier = 0;
    foreach ($_SESSION['panier'] as $id_article=>$article_achete) {
        if (isset($article_achete['nom']) && isset($article_achete['prix']) && isset($article_achete['qte'])) {
?> <div class="container mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-xxl-4">
            <ul>
                <li>
                    <form>
                        <?= $article_achete['nom'].', (', number_format($article_achete['prix'], 2, ',', ''), ' €)' ?>
                        <div class="mb-3">
                            <input type="hidden" name="id_article" class="form-control form-control-lg" value="<?= $id_article ?>">
                            <div class="mb-3">
                                <label for="qte_article">Quantité :</label>
                                <input type="text" name="qte_article" id="qte_article" value="<?= $article_achete['qte'] ?>">
                            </div>
                            <button type="submit" name="modifier" class="btn btn-primary">Changer la quantité</button>
                            <button type="submit" name="supprimer" class="btn btn-danger">Retirer du panier</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
        $total_panier += $article_achete['prix'] * $article_achete['qte'];
        
    }
}
    
    
?>
<hr>
<h3 class="text-center">Total : <?php echo number_format($total_panier, 2, ',', ' '), '€ '; ?></h3>
<form method="post" action="">
    <div class="d-flex justify-content-center">
         <a class="btn btn btn-dark" href="catalogue">Retour au Catalogue</a>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" name="valider_achat" class="btn btn-outline-success btn-lg fw-bold mt-4">Finaliser l'achat</button>
    </div>
</form>
<?php } else { ?>
<p class="text-center">Votre panier est vide</p>

<?php } ?>


<center>
    <div class="container  mt-4">
        <p>Warning</p> <img class="media-object mt-3" width="120px" height="120px" src="images/nonAlcool.png" alt="Nature">
    </div>
</center>