
<?php $title = "TD8" ?>
<?php require("./include/header.inc.php") ?>



<h1>TD8 : PHP - tableaux,
    fonctions & liens
    paramétrés</h1>


<section>
    <h2>Exercice 1 : fonction, tableau PHP et manipulations de chaînes de caractères : URL</h2>

    <div class="exo-1">
        <?php

        $data = extraireData("https://www.cyu.fr");
        echo "Protocol : " . $data["protocole"] . "<br/>";
        echo "Port : " . $data["port"] . "<br/>";
        echo " l'organisme / le sous-domaine : " . $data["organisme"] . "<br/>";
        echo " le nom de la machine : " . $data["machine"] . "<br/>";
        echo " le TLD : " . $data["tld"] . "<br/>";

        ?>

    </div>


</section>
<section>
    <h2>Exercice 2 : fonction et tableaux PHP : chmod</h2>

    <div class="exo-2">
        <?php
        echo binChmod("400") . "<br/>";
        echo binChmod("640") . "<br/>";
        echo binChmod("755") . "<br/>";


        ?>

    </div>


</section>

<section>
    <h2>Exercice 3 : liens paramétrés : passage d’information du client (navigateur) au serveur Web.</h2>

    <div class="exo-3">

    </div>


</section>

<?php require("./include/footer.inc.php") ?>