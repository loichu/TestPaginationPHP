<?php
// Définir un tableau de valeurs pour la barre de navigation
$navbar = array(
    "index.php" => "Accueil",
    "tasks.php" => "Liste des tâches",
    "records.php" => "Records"
)
?>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Test PHP — Pagination</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <?php
                // Créer une entrée dans la barre de navigation pour chacune des entrées du tableau $navbar
                foreach ($navbar as $link => $title) {
                    $active = $file == basename($link);
                    echo "<li>\n";
                    echo "\t<a href='$link'";
                    echo $active ? "class='active'" : "";
                    echo ">$title</a>\n";
                    echo "</li>";
                }
                ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://github.com/ponsfrilus/TestPaginationPHP" target="_blank">GitHub repo</a></li>
            </ul>

        </div>
    </div>
</div>
