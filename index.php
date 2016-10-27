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
    <?php  
    // Include navbar
    include 'Templates/navbar.php' 
    ?>


    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Test PHP — Pagination</h1>
            <p class="lead">Exercice de PHP pour découvrir la pagination</p>
            <h2>Introduction</h2>
            <p>Le but de cet exercice est de mettre en page des données provenant
              d'un fichier. Ce fichier contenant plus de 2000 enregistrements,
              une pagination est souhaitée.</p>

            <h2>Mise en situation</h2>
            <p><a href="https://www.ninjatune.net/home">Ninja Tune</a> est un label
              indépendant de musique électronique qui a été créé en Angleterre en 1990
              par les deux DJ Matt Black et Jonathan Moore, mieux connus sous le
              nom de Coldcut. Le label a diffusé le travail en studio et en live
              de nombreux DJ et producteurs du monde de la musique électronique.
              La musique du label est difficile à qualifier. On peut toutefois y
              entendre de l'électronique, du jazz, de l'ambient, du hip-hop,
              du breakbeat, souvent en même temps.
              [Plus d'info sur <a href="https://en.wikipedia.org/wiki/Ninja_Tune">wikipedia</a>]</p>
            <p>Le <a href="./assets/data/records.json">fichier JSON</a> qui vous est fourni recense tous les enregistrements du label Ninja Tune.</p>

            <h2>Tâches</h2>
            <p>La page <a href="tasks.html">Liste de tâches</a> vous fournira une liste détaillée du travail à faire.<br />
            <b>TL;DR</b> La page <a href="records.html">Records</a> doit présenter une liste des enregistrements du label Ninja Tune.</p>

            <h2>Moyens à disposition</h2>
            <p>
              <ul>
                <li>Un <a href="./assets/data/records.json">fichier JSON</a> comprenant tous les enregistrements ;</li>
                <li>Le <a href="http://getbootstrap.com/">framework CSS bootstrap</a> ;</li>
                <li>La <a href="https://jquery.com/">librairie JavaScript jQuery</a>.</li>
              </ul>
              <i>Note : l'OS et le serveur web utilisé sont à choix.</i>
              <br />
              <br />
              Additionnellement, les différentes pages suivantes peuvent aider:
              <ul>
                <li><a href="http://php.net/docs.php">http://php.net/docs.php</a> ;</li>
                <li><a href="http://devdocs.io/">http://devdocs.io</a> ;</li>
                <li><a href="https://jsonview.com/">https://jsonview.com</a> un add-on pour mettre en page du JSON dans le navigateur ;</li>
                <li><a href="http://stackoverflow.com">http://stackoverflow.com</a> et plus particulièrement <a href="http://stackoverflow.com/questions/3737139/reference-what-do-various-symbols-mean-in-php">cette page pour PHP</a> ;</li>
                <li>... et bien sûr le <a href="https://duckduckgo.com/">moteur de recherche de votre choix</a>.</li>
              </ul>
            </p>

            <h2>Divers</h2>
            <p>
               Le thème "bootstrap" utilisé pour le site est <a href="http://bootswatch.com/cosmo/">COSMO</a> de <a href="http://bootswatch.com/">bootswatch.com</a>.<br />
               Une page d'exemples (e.g. pagination et tables) est disponible <a href="bootswatch.html">ici</a>, mais l'essentiel est déjà sur la page <a href="records.html">Records</a>.<br />
               L'extraction des enregistrements a été fait à l'aide de l'API du site <a href="https://www.discogs.com">https://www.discogs.com</a>.
            </p>


            <h2>Évaluation</h2>
            <p>
               Ce projet n'a pas vocation à être noté. Néanmoins, une auto-évaluation pourrait se baser sur les critères suivants :
               <ul>
                 <li>Fonctionnement général du site et réussite des objectifs ;</li>
                 <li>Lisibilité du code source des pages et du code PHP ;</li>
                 <li>Commentaires et possibilité de réutilisation du code.</li>
               </ul>
            </p>
          </div>

          <div class="col-lg-4 col-md-5 col-sm-6">
            <img src="./assets/img/ninjatuneslogo.jpg" width="250px" />
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
