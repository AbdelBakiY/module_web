<?php $title = "TD6" ?>
<?php require("./include/header.inc.php") ?>
<?php require_once("./include/header.inc.php") ?>




<h1>TD 11 : cookies, assertions</h1>
<section>
    <h2>Exercice 2 : assertions</h2>
    <article>
        <?php
        echo " la somme des carrés des 10 premiers entiers est " . sommeCarre(10)."<br/>";
        echo " la somme des carrés des 5 premiers entiers est " . sommeCarre(5)."<br/>";
        echo " la somme des carrés des 5 premiers entiers est " . sommeCarre(8);

        echo assertSommeCarre(10);
        echo assertSommeCarre(5);
        echo assertSommeCarre(4);
        echo assertSommeCarre(9);

        ?>
    </article>

</section>


<?php require("./include/footer.inc.php") ?>