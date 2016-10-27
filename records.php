<?php
// Inclure mes outils PHP/HTML
include "myTools/SessionTools.php";
include "myTools/HTMLtools.php";

debug($_SESSION);

// Connaître le nom du fichier courant
$file = basename(__FILE__);

// Copier le contenu du json dans une string.
$json_file = file_get_contents('assets/data/records.json');

// Convertir la string en objet json
$jfo = json_decode($json_file);

// Retrouver les champs qui nous intéressent.
// jfo = Json File Object
$releases = $jfo->releases;
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
<?php include 'Templates/navbar.php'; ?>


        <div class="container">

            <div class="page-header" id="banner">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1>Test PHP - Pagination</h1>
                        <p class="lead">Liste des enregistrements</p>
                    <?php
                    $formName = "resultsNumber";
                    echo "<form method='post' action='myTools/CheckForm.php' name='$formName'>";
                    // Création d'un champ texte pour le nombre de page
                    $nbType = "text";
                    $nbLabel = "Nombre de résultats par page (par défaut 10)";
                    $nbName = "nbResults";
                    // Create text box: FormName, Type, Label, Name (Unique!), is required
                    echo PasswordOrTextOrEmail($formName, $nbType, $nbLabel, $nbName, false);

                    // Création d'un bouton submit
                    //Exemple de submit
                    $submitName = 'submit';
                    $submitText = 'OK';
                    // Create submit: FormName, Name, Text
                    echo Submit($formName, $submitName, $submitText);
                    echo "</form>";

                    /**
                     * PAGINATION
                     * - Récupérer la page avec GET.
                     * - Définir la limite de résulats par défaut par page.
                     * - Définir l'offset (le nombre de résultats qui viennent avant la page actuelle).
                     * - Trouver le nombre de résultats.
                     * - Trouver le nombre de pages.
                     * - Trouver les résultats à afficher.
                     * - Stocker le numéro de page dans la session
                     */
                    $page = !isset($_GET['page']) ? (!isset($_SESSION['page']) ? 1 : $_SESSION['page']) : $_GET['page']; // Le numéro de page.
                    $limit = !isset($_SESSION['forms'][$formName]["$nbName"]['value']) ? 10 : $_SESSION[$formName]['nbResults']['value']; // Nombre de résultats par page.
                    $offset = ($page - 1) * $limit; // Offset
                    $total_items = count($releases); // Nombre de résultats
                    $total_pages = ceil($total_items / $limit); // Nombre de pages
                    $final = array_slice($releases, $offset, $limit); // Résultats à afficher
                    $_SESSION['page'] = $page; // Stock la page dans la session
                    ?>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <img src="./assets/img/ninjatunesmonkey.jpg" width="250px" />
                    </div>

                    <div class="col-lg-12">
                        <h2 id="tables">Tables</h2>
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Artist</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$index = $offset;
foreach ($final as $release) {
    $index++;
    echo "<tr>\n";
    //var_dump(property_exists($release, "year"));
    echo "\t<td>$index</td>\n";
    echo "\t<td>$release->title</td>\n";
    echo "\t<td>$release->artist</td>\n";
    echo "\t<td>";
    if (property_exists($release, "year")) {
        echo $release->year;
    } else {
        echo "Unknown";
    }
    echo "</td>\n";
    echo "</tr>";
}
?>
                                <!--
                                <tr>
                                    <td>1</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="info">
                                    <td>3</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="success">
                                    <td>4</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="danger">
                                    <td>5</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="warning">
                                    <td>6</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="active">
                                    <td>7</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                -->
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-12">
                        <h2 id="pagination">Pagination</h2>
                        <!--<ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                        <br />
                        <ul class="pagination pagination-lg">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                        <br />-->
<?php
$arroundCurrent = 4; // Nombre de pages affichées autour le la page courante.
echo "<ul class='pagination pagination-sm'>\n";
echo "\t<li><a href='$file?page=1'>&laquo;</a></li>\n"; // Première page.
// Afficher les pages avant:
for ($arround = $page - $arroundCurrent; $arround <= $page - 1; $arround++) {
    if ($arround > 0) {
        echo "\t<li><a href='$file?page=$arround'>$arround</a></li>\n";
    }
}
// Afficher la page courante:
echo "\t<li class='active'><a href='$file?page=$page'>$page</a></li>\n";
// Afficher les pages après:
for ($arround = $page + 1; $arround <= $page + $arroundCurrent; $arround++) {
    if ($arround <= $total_pages) {
        echo "\t<li><a href='$file?page=$arround'>$arround</a></li>\n";
    }
}
echo "\t<li><a href='$file?page=$total_pages'>&raquo;</a></li>\n"; // Dernière page.
echo "</ul>\n";
?>
                        <!--
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>-->
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
