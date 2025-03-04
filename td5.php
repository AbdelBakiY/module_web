
<?php $title = "TD5" ?>
<?php require("./include/header.inc.php") ?>
<h1>TD5 : PHP - introduction aux
    pages dynamiques</h1>

<section>
    <h2>Exercice 1</h2>
    <div class=" exo1">

        <?php
        echo date('l jS \of F Y h:i:s A');
        ?>
    </div>
</section>

<section>
    <h2>Exercice 2</h2>
    <div class="exo2">

        <?php echo lister();
        ?>
    </div>
</section>


<section>
    <h2>Exercice 3</h2>
    <div class="exo3">

        <?php


        $car1 = 'A';
        $car2 = '+';

        $valeur_ascii1 = ord($car1);
        $valeur_ascii2 = ord($car2);

        $hex1 = dechex($valeur_ascii1);
        $hex2 = dechex($valeur_ascii2);

        $dic1 = hexdec($hex1);
        $dic2 = hexdec($hex2);

        echo "'" . $car1 . "'" . " = " . $valeur_ascii1 . " = 0x" . $hex1 . "<br/>";
        echo "'" . $car2 . "'" . " = " . $valeur_ascii2 . " = 0x" . $hex2 . "<br/>";

        ?>
    </div>
</section>
<section>
    <h2>Exercice 4</h2>
    <div class="exo4">
        <div class="hex">
            <?php
            echo listeHex();
            ?>
        </div>
    </div>
</section>
<section class="exo5">
    <h2>Exercice 5</h2>
    <div class="tab">
        <?php
        echo tableauConversion();
        ?>
    </div>



</section>
<br />

<?php require("./include/footer.inc.php") ?>