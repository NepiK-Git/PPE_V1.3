<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Site Vanneau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="CSS/main.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Vanneau</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="accueil">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="catalogue">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="producteurs">Producteurs</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="connexion">Gestion du compte</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="panier">Payements</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="aide">Nous Contacter</a>
                </li>
                
                 <li class="nav-item position-absolute top-0 end-0 mt-2 me-2">
                    <a class="btn btn btn-danger" href="deconnexion">Déconnexion</a>
                </li>
                
               
            </ul>
        </div>
    </div>
</nav>


<?= $content; ?>

<footer class="container fixed-bottom">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2020-2021 &middot; <a href="#">Conception par</a> <a href="#">Lucas Labastugue </a> &middot;</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>