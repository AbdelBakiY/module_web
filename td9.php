<?php $title = "TD9" ?>
<?php require("./include/header.inc.php") ?>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['url'])) {
        $url = $_POST['url'];
        $urlInfo = extractURLInfo($url);
    }
}
$Param = " ";
if (isset($_GET['z']) && !empty($_GET['z'])) {
    $Param = $_GET['z'];
}
$Param1 = 0;
if (isset($_GET['z1']) && !empty($_GET['z1'])) {
    $Param1 = intval($_GET['z1']);
}
$Param2 = 0;
if (isset($_POST['z2']) && !empty($_POST['z2'])) {
    $Param2 = intval($_POST['z2']);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['q']) && isset($_GET['engine'])) {
        $query = urlencode($_GET['q']);
        $engine = $_GET['engine'];

        switch ($engine) {
            case 'google':
                $url = "https://www.google.com/search?q=$query";
                break;
            case 'bing':
                $url = "https://www.bing.com/search?q=$query";
                break;
            case 'yahoo':
                $url = "https://fr.search.yahoo.com/search?p=$query";
                break;
            default:
                $url = "https://www.google.com/search?q=$query";
                break;
        }


        header("Location: $url");
        exit();
    }
}


?>





<h1>TD 9 : formulaires HTML et traitement PHP</h1>
<section>
    <h2>Exercice 1 : formulaire de recherche en utilisant un site externe (ici, un moteur de recherche)</h2>

    <form method="get" action="https://www.google.fr/search?q" target="_blank">
        <label for="search1">Rechercher</label>
        <input type="search" id="search1" name="q" placeholder="Recherche Google" />
        <input type="submit" id="submit1" value="Rechercher" />
    </form>

</section>
<section>
    <h2>Exercice 2 : formulaire </h2>


    <h3>Test simple de la méthode GET</h3>
    <form method="get" action="td9.php">
        <label for="min">Saisissez votre texte :</label><br />
        <input type="text" id="min" name="z" /><br />
        <input type="submit" value="Rendre en majuscule" />
    </form>
    <?php print(strtoupper($Param)); ?>

    <h3>Test de la méthode GET</h3>
    <form method="get" action="td9.php">
        <label for="min1">Saisissez votre nombre :</label><br />
        <input type="text" id="min1" name="z1" /><br />
        <input type="submit" value="Valeur Hexa" />
    </form>
    <?php print(dechex($Param1)); ?>

    <h3>Test de la méthode POST</h3>
    <form method="post" action="td9.php">
        <label for="min2">Saisissez votre nombre :</label><br />
        <input type="text" id="min2" name="z2" /><br />
        <input type="submit" value="Valeur Hexa" />
    </form>
    <?php print(dechex($Param2)); ?>
</section>



<section class="exo">
    <h2>Exercice 3 : bouton-radio et redirection PHP</h2>
    <article>
        <h3>Formulaire de recherche en utilisant un site externe (ici, un moteur de recherche)</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <label for="search_query">Recherche :</label><br />
            <input type="search" id="search_query" name="q" placeholder="Entrez votre recherche" /><br />

            <input type="radio" id="google" name="engine" value="google" />
            <label for="google">Google</label><br />

            <input type="radio" id="bing" name="engine" value="bing" />
            <label for="bing">Bing</label><br />

            <input type="radio" id="yahoo" name="engine" value="yahoo" />
            <label for="yahoo">Yahoo</label><br />

            <input type="submit" value="Rechercher" />
        </form>
    </article>
</section>


<section class="exo">
    <h2>Exercice 4 : formulaire de saisie d'URL</h2>
    <article>
        <h3> Formulaire de saisie d'URL </h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="url">Entrez une URL :</label><br />
            <input type="url" id="url" name="url" placeholder="Ex: http://www.example.com" /><br />
            <button type="submit">Extraire les informations</button>
        </form>

        <?php if (!empty($urlInfo)) : ?>
            <h3>Informations extraites :</h3>
            <ul>
                <li><strong>Protocole:</strong>
                    <?php echo $urlInfo['protocol']; ?>
                </li>
                <li><strong>TLD:</strong>
                    <?php echo $urlInfo['tld']; ?>
                </li>
                <li><strong>Sous-domaine:</strong>
                    <?php echo $urlInfo['subdomain']; ?>
                </li>
                <li><strong>Nom du serveur:</strong>
                    <?php echo $urlInfo['hostname']; ?>
                </li>
                <li><strong>Adresse IP:</strong>
                    <?php echo $urlInfo['ip']; ?>
                </li>
            </ul>
        <?php endif; ?>

    </article>
</section>

<section class="exo">
    <h2>Exercice 5 : contrôle des données en provenance d’un
        formulaire</h2>
    <article>
        <h3> Formulaire de saisie </h3>
        <form method="post">
            <label for="nombre">Entrez un nombre entre 2 et 16 :</label>
            <input type="number" id="nombre" name="nombre" min="2" max="16" required="required" />
            <input type="submit" value="Générer la table de multiplication" />
        </form>



        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_VALIDATE_INT, [
                'options' => [
                    'min_range' => 2,
                    'max_range' => 16
                ]
            ]);

            if ($nombre === false) {
                echo "<p>Valeur invalide. Veuillez entrer un nombre entre 2 et 16.</p>";
            } else {
                echo "<section class='exo'><div class='contenu'><h2>Table de multiplication de $nombre</h2><ul>";
                for ($i = 1; $i <= 10; $i++) {
                    $resultat = $nombre * $i;
                    echo "<li>$nombre x $i = $resultat</li>";
                }
                echo "</ul></div></section>";
            }
        }
        ?>

    </article>

</section>


<section class="exo">
    <h2>Exercice 6 : formulaire avec cases à cocher</h2>
    <article>
        <h3> Formulaire de saisie </h3>
        <form method="post">
            <table>
                <tr>
                    <th>X</th> 
                    <th>Read (4)</th>
                    <th>Write (2)</th>
                    <th>Execute (1)</th>
                </tr>
                <?php
                $categories = ['user' => 'User', 'group' => 'Group', 'others' => 'Others'];
                foreach ($categories as $type => $name) {
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td><input type='checkbox' name='{$type}_r' id='{$type}_r' /><label for='{$type}_r'>Read</label></td>";
                    echo "<td><input type='checkbox' name='{$type}_w' id='{$type}_w' /><label for='{$type}_w'>Write</label></td>";
                    echo "<td><input type='checkbox' name='{$type}_x' id='{$type}_x' /><label for='{$type}_x'>Execute</label></td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <input type="submit" value="Calculer chmod" />
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $permissions = ['user' => 0, 'group' => 0, 'others' => 0];

            foreach ($permissions as $type => &$perm) {
                $perm += isset($_POST[$type . '_r']) ? 4 : 0;
                $perm += isset($_POST[$type . '_w']) ? 2 : 0;
                $perm += isset($_POST[$type . '_x']) ? 1 : 0;
            }

            $chmodValue = implode('', $permissions);
            echo "<p>Permissions chmod : $chmodValue</p>";
        }
        ?>
    </article>


</section>

<section class="exo">
    <h2>Exercice 7 : formulaire avec bouton radio</h2>
    <article>
        <h3> Formulaire avec bouton radio </h3>
        <form method="post" action="/td9.php">
            <label for="chmodValue">Valeur octale de "chmod" :</label>
            <input type="text" id="chmodValue" name="chmodValue" /><br />

            <input type="radio" id="file" name="type" value="file" />
            <label for="file">Fichier</label><br />

            <input type="radio" id="directory" name="type" value="directory" />
            <label for="directory">Répertoire</label><br />

            <input type="submit" value="Afficher" />
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['chmodValue'])) {
            // Récupère la valeur octale de chmod soumise via le formulaire
            $chmodValue = $_POST['chmodValue'];

            // Convertit la valeur octale en une représentation des permissions en format de chaîne
            $permissions = [
                '---',
                '--x',
                '-w-',
                '-wx',
                'r--',
                'r-x',
                'rw-',
                'rwx'
            ];

            // Décompose la valeur octale en permissions pour l'utilisateur, le groupe, et les autres
            $owner = $permissions[$chmodValue[0]];
            $group = $permissions[$chmodValue[1]];
            $world = $permissions[$chmodValue[2]];

            // Affiche les permissions
            echo "Permissions : $owner $group $world";
        } else {
            echo "Veuillez soumettre le formulaire.";
        }
        ?>

    </article>
</section>



<section class="exo">
    <h2>Exercice 8 : formulaire généré par des boucles PHP avec liste d'options
    </h2>
    <article>
        <h3> Formulaire généré par des boucles PHP avec liste d'options </h3>
        <form method="post">
            <label for="annee">Choisissez une année :</label>
            <select id="annee" name="annee">
                <?php
                for ($annee = 1950; $annee <= 2050; $annee++) {
                    echo "<option value='$annee'>$annee</option>";
                }
                ?>
            </select>
            <input type="submit" value="Vérifier l'année" />
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['annee'])) {
            $anneeSelectionnee = $_POST['annee'];
            $estBissextile = estBissextile($anneeSelectionnee) ? "est" : "n'est pas";
            $jour = jourSemaine($anneeSelectionnee);

            echo "<p>L'année $anneeSelectionnee $estBissextile une année bissextile.</p>";
            echo "<p>Le 1er janvier $anneeSelectionnee était un $jour.</p>";
        }
        ?>

    </article>
</section>

<?php require("./include/footer.inc.php") ?>