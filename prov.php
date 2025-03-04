<?php $title = "Provisoire" ?>
<?php require("./include/header.inc.php") ?>
<section>

    <?php
        if (isset($_GET["min"])) {
            $texte = $_GET["min"];
            echo "texte en majuscule : ".strtoupper($texte);
        } 
      

       
        if (isset($_GET["num"])) {
            $dec = intval($_GET["num"]);
            echo "<br/> la valeur de ".$dec." en hexadecimale est : ".dechex($dec);
        } 
      



    ?>

</section>

<?php require("./include/footer.inc.php") ?>
