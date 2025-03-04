<?php

declare(strict_types=1);
require("./include/functions.inc.php");

$style = isset($_GET['style']) ? $_GET['style'] : (isset($_COOKIE['style']) ? $_COOKIE['style'] : 'standard');
setcookie('style', $style, time() + (86400 * 30), "/");

$hitsFilename = 'hits.txt';
$hits = incrementHitsCounter($hitsFilename);
?>
<!DOCTYPE html>
<html lang="<?php echo isset($lang) && $lang === 'en' ? 'en' : 'fr'; ?>">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>

    <link rel="stylesheet" type="text/css" href="style_toggle.css">
    <?php
    echo '<link rel="stylesheet" type="text/css" href="style' . ($style === 'alternatif' ? '2' : '') . '.css">';
    ?>

    <link rel="shortcut icon" href="images/logo.png" />
   
</head>



<body>
    <header>
        <a href="index.php" title="retourner à l'accueil ">
            <img src="images/CYU.png" alt="retourner à l'accueil" />
        </a>
        <!-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                var toggleSwitch = document.querySelector('.switch');

                var currentStyle = '<?php echo $style; ?>';

                toggleSwitch.querySelector('input').checked = (currentStyle === 'alternatif');

                toggleSwitch.addEventListener('click', function() {
                    var currentStyle = '<?php echo $style; ?>';

                    var newStyle = (currentStyle === 'standard' || !currentStyle) ? 'alternatif' : 'standard';

                    document.cookie = 'style=' + newStyle + '; path=/';

                    window.location.href = 'index.php?style=' + newStyle;
                });
            });
        </script> -->

        <nav>
            <ul>
                <li><a href="td5.php" class="pA">TD5</a> </li>
                <li><a href="td6.php" class="pA">TD6</a> </li>
                <li><a href="td7.php" class="pA">TD7</a> </li>
                <li><a href="td8.php" class="pA">TD8</a> </li>
                <li><a href="td9.php" class="pA">TD9</a> </li>
                <li><a href="td10.php" class="pA">TD10</a> </li>
                <li><a href="td11.php" class="pA">TD11</a> </li>
            </ul>
        </nav>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
    </header>
    <main>