<div style="margin-top:35px;">
<center>

<code>
<h3>Catalogue</h3>
<p>
Acheter des alcools de tous types.
</p>
</code>
</center>
</div>

<?php

$reponse = $bdd->query('SELECT * FROM produit');
$requete_articles = $bdd->query("SELECT nombre FROM compteur");
$produits = $requete_articles->fetch();

?>
    <p class="text-center">Nombre total d'articles disponibles : <?= $produits['nombre'] ?></p>
    </code>
</div>

<?php
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

<div style="position: relative; float: left; margin-left:30px; margin-top:30px;">
    <p>
       
        <strong>Nom </strong> : <?php echo $donnees['nom']; ?><br />
        <strong>Date de mise en bouteille </strong> : <?php echo $donnees['dateMiseEnBouteille']; ?><br />
        <strong>Domaine </strong> : <?php echo $donnees['domaine']; ?><br />
        <strong>Type d'alcool </strong> : <?php echo $donnees['type']; ?><br />
        <strong>Degré d'alcool </strong> : <?php echo $donnees['degreAlcol']; ?><br />
        <strong>Prix / Cout </strong> : <?php echo $donnees['prix']; ?><br /><br />
        <img width="430" height="550" src="images/vin<?php echo $donnees['idP']; ?>.png" />
        <h5> </h5>
        <center>
        <a class="btn text-light" style="background-color:#e23e8c;" href="panier?panier&id_article=<?= $donnees['idP']; ?>&nom_article=<?=$donnees['nom']?>&prix_article=<?= $donnees['prix']?>&ajouter" >Ajouter aux panier</a>
        </center>
       
        <h5>--------------------------------------------------</h5>
        
    </p>
    
</div>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>