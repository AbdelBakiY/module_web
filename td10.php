<?php $title = "TD10" ?>
<?php require("./include/header.inc.php");



?>

<h1>TD 10 : fichiers ; accessibilité ; développement durable</h1>
<section class="accueil-photos">
    <h2>Exercice 3 : développement durable</h2>
    <div class="grid-paysages">
        <img src="images/paysage1.png" alt="Twelve apostles - Australie">
        <img src="images/paysage2.webp" alt="Wai-O-Tapu - Nouvelle-Zélande">
        <img src="images/paysage3.jpeg" alt="Parc National d’Abel Tasman - Nouvelle-Zélande">
    </div>

    <div class="grid-portraits">
        <img src="images/portrait1.jpg" alt="portrait1">
        <img src="images/portrait2.jpg" alt="portrait2">
        <img src="images/portrait3.jpg" alt="portrait3">
    </div>

</section>
<section>
    <h2>Exercice 4 : compteur de « hits » et fichier</h2>

    <p>Nombre de hits: <?php echo $hits; ?></p>


</section>
<section>
    <h2>Exercice 5 : fichier CSV</h2>

    <div>
        <?php
        $regionsDepartments = extractRegionsDepartments('v_region_2024.csv', 'v_departement_2024.csv');

        // Affichage des données
        echo '<table>';
        echo '<tr><th>Région</th><th>Départements</th></tr>';
        foreach ($regionsDepartments as $regionName => $regionDepartments) {
            echo '<tr><td>' . $regionName . '</td><td>';
            echo '<ul>';
            foreach ($regionDepartments as $department) {
                echo '<li>' . $department . '</li>';
            }
            echo '</ul></td></tr>';
        }
        echo '</table>';
        ?>
    </div>


</section>
<?php require("./include/footer.inc.php") ?>