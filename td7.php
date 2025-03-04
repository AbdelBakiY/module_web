<?php $title = "td7" ?>
<?php require("./include/header.inc.php") ?>


<h1>TD7 : PHP - fonctions,
    constantes, tableaux et
    constructions multi-fichiers</h1>

   <section> <h2>Exercice 1 : construction multi-fichiers et intégration</h2> </section>
   <section> <h2>Exercice 2 : fonctions, constantes, valeur par défaut et construction multi-fichiers</h2> </section>
<section>
    <h2>Exercice 3 : fonction PHP et tableau PHP</h2>
    <span>Une liste HTML des noms des régions : </span>
    <div class="arrayToList">
        <?php echo arrayToList(); ?>

    </div>
    <span>Avec un parametre supplimentaire (bool):</span>
    <span>Si le parametre vaut vraie :</span>
    <div class="arrayToList">
        <?php echo arrayToList(regions, true); ?>

    </div>
    <span>Si le parametre vaut Faux :</span>
    <div class="arrayToList">
        <?php echo arrayToList(regions, false); ?>

    </div>

</section>
<section>
    <h2>Exercice 4 : fonctions PHP et tableaux associatifs PHP</h2>
    <?php $origines = originesEtymologiquesDateCourante();
    echo "Origine étymologique du jour : " . $origines[0] . "<br/>";
    echo "Origine étymologique du mois : " . $origines[1];
    ?>


</section>
<section>
    <h2>Exercice 5 : détecter le navigateur de l’internaute</h2>


</section>

<?php require("./include/footer.inc.php") ?>