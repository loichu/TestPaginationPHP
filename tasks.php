<?php
$file = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHPTest — Pagination</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="./assets/css/custom.min.css" media="screen">
    <link rel="stylesheet" href="./assets/css/style.css" media="screen">
  </head>
  <body>
    <!--<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand">Test PHP — Pagination</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.html">Accueil</a>
            </li>
            <li>
              <a href="tasks.html" class="active">Liste des tâches</a>
            </li>
            <li>
              <a href="records.html">Records</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://github.com/ponsfrilus/TestPaginationPHP" target="_blank">GitHub repo</a></li>
          </ul>

        </div>
      </div>
    </div>-->
    <?php
    // Inclure la barre de navigation
    include "Templates/navbar.php";
    ?>

    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Test PHP - Pagination</h1>
            <p class="lead">Liste des tâches à effectuer</p>
            <p>Le but de cet exercice est de mettre en page des données provenant
              d'un fichier. Le fichier contenant plus de 2000 enregistrements,
              une pagination est souhaitée.</p>

            <h2>ToDos</h2>
            <div class="checkbox">
              <label><input type="checkbox"> Modifier le nécessaire pour passer le site sous PHP ;</label><br />
              <label><input type="checkbox"> Faire une fonction qui lit le fichier <a href="./assets/data/records.json">records.json</a> et qui retourne une variable (<a href="http://php.net/manual/en/function.json-decode.php">hint</a>) ;</label><br />
              <label><input type="checkbox"> Utiliser l'exemple de table disponible <a href="bootswatch.html">ici</a> et afficher les valeurs du fichier <a href="./assets/data/records.json">records.json</a> ;</label><br />
              <label><input type="checkbox"> Mettre en place un système de pagination (exemple de sélecteur de page disponible <a href="bootswatch.html">ici</a>).</label><br />
            </div>

            <h3>Mais aussi...</h3>
            <p>En addition des tâches listés ci-dessus :</p>
            <div class="checkbox">
              <label><input type="checkbox"> L'utilisateur doit avoir la possibilité de choisir le nombre de résultats par page ;</label><br />
              <label><input type="checkbox"> Et si l'utilisateur navigue en les 3 pages du site, la liste des enregistrements doit garder les informations (nombre d'enregistrements par page, dernière page consultée).</label><br />
            </div>

            <h3>Pour aller plus loin</h3>
            <p>Afin de fournir une expérience optimale, l'utilisateur doit pouvoir :</p>
            <div class="checkbox">
              <label><input type="checkbox"> Trier chaque colonne par ordre croissant ou décroissant ;</label><br />
              <label><input type="checkbox"> Utiliser une légende et des couleurs dans la table pour indiquer le type de support (e.g. CD, Mixtape, etc.).</label><br />
            </div>

            <h3>Nice to have</h3>
            <p>aka dans un monde idéal...</p>
            <div class="checkbox">
              <label><input type="checkbox"> Permettre la recherche de données sur la table (artistes, albums, ...) avec des filtres (CDs uniquement, entre 2013 et 2015, etc.).</label><br />
            </div>

            <h3>Avancés</h3>
            <p>Quelques idées (en vrac) pour encore améliorer le site :</p>
            <div class="checkbox">
              <label><input type="checkbox"> Essayer d'utiliser un <a href="https://plugins.jquery.com/tag/datagrid/">plugin datagrid</a> JavaScript pour le tri des données ;</label><br />
              <label><input type="checkbox"> Interroger une API pour afficher une miniature de l'album (<a href="https://www.discogs.com/developers/">discogs</a>, <a href="http://www.freecovers.net/api/">free covers</a>, ...) ;</label><br />
              <label><input type="checkbox"> Trouver un service pour écouter l'artiste, par exemple <a href="https://developers.google.com/youtube/v3/docs/search/list">youtube</a> ;</label><br />
              <label><input type="checkbox"> Se séparer du fichier JSON pour n'utiliser que l'API de <a href="https://www.discogs.com/developers/">discogs</a> ;</label><br />
              <label><input type="checkbox"> Rendre votre travail disponible sur <a href="https://pages.github.com/">pages.github.com</a>.</label><br />
            </div>

            <h2>Objectifs (de base)</h2>
            <p>
              <ul>
                <li>Expérimenter la lecture d'un fichier JSON ;</li>
                <li>Découvrir la manipulation de tableau ;</li>
                <li>Utiliser les POST/GET en PHP ;</li>
                <li>Réfléchir aux options de pagination et trouver un moyen pour que les paramètres (i.e. nombre d'enregistrements par page) soient dynamiques ;</li>
                <li>Utiliser une session pour garder les paramètres de l'utilisateur.</li>
              </ul>
            </p>

          </div>
          <div class="col-lg-4 col-md-5 col-sm-6">
            <img src="./assets/img/ninjatunes.jpg" width="250px" />
          </div>
        </div>
      </div>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li><a href="https://github.com/ponsfrilus/TestPaginationPHP">View source on GitHub</a> <small>(Pull requests welcome)</small></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</html>
