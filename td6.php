

<?php $title = "TD6" ?>
<?php require("./include/header.inc.php") ?>




<h1>TD6 : XHTML5 &amp; PHP (tests, boucles et fonctions)</h1>
<section>
    <h2>Exrecice 1</h2>



    <span class="texte">En utilisant la valeur par défaut</span>

    <div class="tab">
        <?php
        echo  construireTable();
        ?>
    </div>

    <span class="texte">En spécifiant la dimension</span>

    <div class="tab">
        <?php
        echo  construireTable(11);
        ?>
    </div>

</section>
<section>
    <h2>Exercice 2</h2>
    <div class="tab">
        <?php echo generer_table_ascii(); ?>
    </div>
</section>


<?php require("./include/footer.inc.php") ?>