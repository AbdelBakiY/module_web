
<?php require ("./include/util.php") ;
?>
</main>
<footer>
    <span>Réalisé par:</span>
    <ul>
        <li>Abdel Baki Mougari</li>
    </ul>
    <span class="info-nav">
        <?php
            echo "navigateur:".get_navigateur() ; 
             ?> </span>       
    <span class="plan"> <a href="plan.php">plan de site</a> </span>
    <span class="infos-contact">28/02/2024 - Université de Cergy</span>
    <p>Nb hits :<?php echo $hits; ?></p>
</footer>
</body>

</html>