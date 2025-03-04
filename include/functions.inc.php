<!-- fondtion de td5 -->
<?php
/**
 * Liste les éléments de 1 à n dans une liste HTML non ordonnée.
 *
 * @param int $n Le nombre d'éléments à lister (par défaut 20).
 * @return string La liste HTML générée.
 */

function lister(int $n = 20): String
{
    $res = "<ul>";
    for ($i = 0; $i < $n; $i++) {
        $res .= "<li> hello numero " . ($i + 1) . "</li>\n";
    }
    $res .= "</ul>\n";
    return $res;
}

/**
 * Liste les nombres en hexadécimal de 0 à n dans une liste HTML non ordonnée.
 *
 * @param int $n Le nombre maximum à lister (par défaut 15).
 * @return string La liste HTML générée.
 */

function listeHex(int $n = 15): String
{
    $res = "<ul>";
    for ($i = 0; $i < $n + 1; $i++) {
        $res .= "<li>  0x" . dechex($i) . "</li>\n";
    }
    $res .= "</ul>\n";
    return $res;
}

/**
 * Génère un tableau de conversion binaire, octal, décimal et hexadécimal.
 *
 * @param int $n Le nombre maximum à convertir (par défaut 17).
 * @return string Le tableau HTML généré.
 */

function tableauConversion(int $n = 17): string
{
    $res = "<table>
    <caption>
     tableau de conversion
    </caption>
    <thead>
      <tr>
        <th scope=\"col\">binaire</th>
        <th scope=\"col\">octal</th>
        <th scope=\"col\">Décimal</th>
        <th scope=\"col\">hexadecimal</th>
      </tr>
    </thead>
    <tbody> ";
    for ($i = 0; $i < $n + 1; $i++) {
        $res .= sprintf("<tr>
        <th scope=\"row\">%b</th>
        <td>%o</td>
        <td>%d</td>
        <td>%x</td>
      </tr>", $i, $i, $i, $i);
    }
    $res .= " </tbody>
  </table>\n";
    return $res;
}

/**
 * Construit un tableau de multiplication de dimension x dimension.
 *
 * @param int $dim La dimension du tableau (par défaut 10).
 * @return string Le tableau HTML généré.
 */

#fonction de td 6
define("dimension", 10);
function construireTable(int $dim = dimension): string
{
    $res = "<table>
    <caption>
     tableau de multiplication
    </caption>
    <thead>
      <tr>";
    $res .= "<th scope=\"col\">X</th>";
    for ($i = 1; $i <= $dim; $i++) {
        $res .= sprintf("<th scope=\"col\">%d</th>", $i);
    }

    $res .=  "</tr>
    </thead>
    <tbody> ";

    for ($i = 1; $i <= $dim; $i++) {
        $res .= sprintf("\n<tr>
        <th scope=\"row\">%d</th>", $i);
        for ($j = 1; $j <= $dim; $j++) {
            $multip = $i * $j;
            $res .= sprintf(" <td>%d</td>", $multip);
        }
        $res .= "\n</tr>";
    }
    $res .= "\n</tbody>
  </table>\n";
    return $res;
}

/**
 * Génère un tableau ASCII en HTML.
 *
 * @return string Le tableau HTML généré.
 */


// Tableau ASCII HTML
function generer_table_ascii(): string
{
    $asciiTable = "<table>
        <caption>
            Tableau de code ASCII
        </caption>";
    $asciiTable .= "<thead><tr><th>X</th>";

    for ($i = 0; $i <= 15; $i++) {
        $asciiTable .= "<th>" . dechex($i) . "</th>";
    }

    $asciiTable .= "</tr></thead>";
    $asciiTable .= "<tbody>";

    for ($i = 2; $i <= 7; $i++) {
        $asciiTable .= "<tr><td>$i</td>";

        for ($j = 0; $j <= 15; $j++) {
            $charCode = ($i << 4) + $j;
            $char = ($charCode == 127) ? '&#x00A0;' : htmlspecialchars(chr($charCode));
            $style = '';

            if (ctype_digit($char)) {
                $style = 'color: blue;';
            } elseif (ctype_upper($char)) {
                $style = 'color: green;';
            } elseif (ctype_lower($char)) {
                $style = 'color: red;';
            }

            $asciiTable .= "<td style='$style'>$char</td>";
        }

        $asciiTable .= "</tr>";
    }

    $asciiTable .= "</tbody></table>";

    return $asciiTable;
}


//fondtion de td7


define("regions", array(
    "Guadeloupe",
    "Martinique",
    "Guyane",
    "La Réunion",
    "Mayotte",
    "Île-de-France",
    "Centre-Val de Loire",
    "Bourgogne-Franche-Comté",
    "Normandie",
    "Hauts-de-France",
    "Grand Est",
    "Pays de la Loire",
    "Bretagne",
    "Nouvelle-Aquitaine",
    "Occitanie",
    "Auvergne-Rhône-Alpes",
    "Provence-Alpes-Côte d’Azur",
    "Corse"
));

/**
 * Transforme un tableau en liste HTML.
 *
 * @param array $reg Le tableau à transformer en liste.
 * @param bool $estUL Indique s'il s'agit d'une liste non ordonnée (par défaut true).
 * @return string La liste HTML générée.
 */

function arrayToList(array $reg = regions, bool $estUL = true): string
{
    if ($estUL) {
        $listeReg = "\t<ul>";
        for ($i = 0; $i < count($reg); $i++) {
            $listeReg .= "\n\t\t<li>" . $reg[$i] . "</li>";
        }
        $listeReg .= "\n\t</ul>";
    } else {
        $listeReg = "\t<ol>";
        for ($i = 0; $i < count($reg); $i++) {
            $listeReg .= "\n\t\t<li>" . $reg[$i] . "</li>";
        }
        $listeReg .= "\n\t</ol>";
    }
    return $listeReg;
}

$joursSemaine = array(
    "lundi" => "Lune",
    "mardi" => "Mars",
    "mercredi" => "Mercure",
    "jeudi" => "Jupiter",
    "vendredi" => "Vénus",
    "samedi" => "Saturne",
    "dimanche" => "Soleil"
);

$moisAnnee = array(
    1 => "Janus",
    2 => "purification",
    3 => "Mars",
    4 => "incertain",
    5 => "Maia",
    6 => "Juno",
    7 => "Jules César",
    8 => "Auguste",
    9 => "sept",
    10 => "octo",
    11 => "novem",
    12 => "decem"
);
$joursEnFrancais = array(
    'Monday'    => 'Lundi',
    'Tuesday'   => 'Mardi',
    'Wednesday' => 'Mercredi',
    'Thursday'  => 'Jeudi',
    'Friday'    => 'Vendredi',
    'Saturday'  => 'Samedi',
    'Sunday'    => 'Dimanche'
);

/**
 * Récupère les origines étymologiques de la date courante.
 *
 * @return array Un tableau contenant l'origine du jour et du mois.
 */

function originesEtymologiquesDateCourante(): array
{
    $joursSemaine = array(
        "Lundi" => "Lune",
        "Mardi" => "Mars",
        "Mercredi" => "Mercure",
        "Jeudi" => "Jupiter",
        "Vendredi" => "Vénus",
        "Samedi" => "Saturne",
        "Dimanche" => "Soleil"
    );

    $moisAnnee = array(
        1 => "Janus",
        "purification",
        "Mars",
        "incertain",
        "Maia",
        "Juno",
        "Jules César",
        "Auguste",
        "sept",
        "octo",
        "novem",
        "decem"
    );
    $joursEnFrancais = array(
        'Monday'    => 'Lundi',
        'Tuesday'   => 'Mardi',
        'Wednesday' => 'Mercredi',
        'Thursday'  => 'Jeudi',
        'Friday'    => 'Vendredi',
        'Saturday'  => 'Samedi',
        'Sunday'    => 'Dimanche'
    );


    $jourCourant = $joursEnFrancais[date('l', time())];
    $moisCourant = date('n', time());

    $origineJour = $joursSemaine[$jourCourant];
    $origineMois = $moisAnnee[$moisCourant];


    return array($origineJour, $origineMois);
}

//td8

define("LISTEPORTS", array(
    'http'  => 80,
    'https' => 443,
    'ftp'   => 21,
    'ftps'  => 990,
    'ssh'   => 22,
    'telnet' => 23
));


define("LISTETLD", array(
    'com' => 'Commercial',
    'org' => 'Organisation',
    'net' => 'Network',
    'fr'  => 'France'
));

/**
 * Extrait les données pertinentes d'une URL.
 *
 * @param string $url L'URL à analyser.
 * @return array Les données extraites.
 */
//exo1

function extraireData(string $url): array
{
    $elements = explode("/", $url);
    $lien = explode(".", substr($elements[2], 0, strlen($elements[2]) + 1));

    $protocole = substr($elements[0], 0, strlen($elements[0]) - 1);
    $port = LISTEPORTS[$protocole];
    $machine = $lien[0];
    $organisme = $lien[1];
    $tld = LISTETLD[$lien[2]];

    $dataList = array(
        'protocole' => $protocole, 'port' => $port,
        'machine' => $machine, 'organisme' => $organisme, 'tld' => $tld
    );

    return $dataList;
}


/**
 * Convertit un chiffre octal en binaire.
 *
 * @param string $octalDigit Le chiffre octal à convertir.
 * @return string Le chiffre binaire converti.
 */
//exo2 

function octalDigitToBinary(string $octalDigit): string
{
    $decimal = base_convert($octalDigit, 8, 10); // Convertir de octal à décimal
    $binary = sprintf("%03d", decbin($decimal)); // Formater avec des zéros à gauche
    return $binary;
}

/**
 * Convertit un motif binaire en notation de permissions UNIX.
 *
 * @param string $val Le motif binaire à convertir.
 * @return string La notation de permissions UNIX correspondante.
 */

function binToChmod(string $val): string
{
    $res = "";

    if (strlen($val) >= 3) {

        for ($i = 0; $i < 3; $i++) {
            if ($i == 0) {
                if ($val[0] == '1') {
                    $res .= 'r';
                } else {
                    $res .= '-';
                }
            } else if ($i == 1) {
                if ($val[1] == '1') {
                    $res .= 'w';
                } else {
                    $res .= '-';
                }
            } else if ($i == 2) {
                if ($val[2] == '1') {
                    $res .= 'x';
                } else {
                    $res .= '-';
                }
            }
        }
    }
    return $res;
}

/**
 * Convertit une valeur octale de permissions UNIX en notation de permissions UNIX.
 *
 * @param string $valeurOc La valeur octale de permissions UNIX.
 * @return string La notation de permissions UNIX correspondante.
 */

function binChmod(string $valeurOc): string
{
    $admin =  octalDigitToBinary($valeurOc[0]);
    $groupe =  octalDigitToBinary($valeurOc[1]);
    $utilisateur = octalDigitToBinary($valeurOc[2]);
    $res = $valeurOc . " => " . binToChmod($admin) . " " . binToChmod($groupe) . " " . binToChmod($utilisateur);
    return $res;
}

/**
 * Extrait les informations d'une URL donnée.
 *
 * @param string $url L'URL à analyser.
 * @return array Un tableau contenant les informations extraites.
 */
//td 9
function extractURLInfo($url)
{

    if (empty($url)) {
        return array(
            'protocol' => '',
            'tld' => '',
            'subdomain' => '',
            'hostname' => '',
            'ip' => ''
        );
    }

    // Initialisation des valeurs par défaut
    $protocol = '';
    $tld = '';
    $subdomain = '';
    $hostname = '';
    $ip = '';

    // Extraction du protocole
    $protocolPos = strpos($url, '://');
    if ($protocolPos !== false) {
        $protocol = substr($url, 0, $protocolPos);
        $url = substr($url, $protocolPos + 3);
    }

    // Extraction du domaine avec une expression régulière
    preg_match('/(?:https?:\/\/)?(?:www\.)?([^\/]+)/i', $url, $matches);
    $domain = isset($matches[1]) ? $matches[1] : '';

    if (!empty($domain)) {
        // Extraction du TLD, du sous-domaine et du nom du serveur
        $parts = explode('.', $domain);
        if (count($parts) > 2) {
            $subdomain = $parts[0];
            $hostname = $parts[1];
            $tld = end($parts);
        } elseif (count($parts) == 2) {
            $hostname = $parts[0];
            $tld = end($parts);
        }

        // Récupération de l'adresse IP
        $dnsRecords = dns_get_record($domain, DNS_A);
        if (!empty($dnsRecords)) {
            $ip = $dnsRecords[0]['ip'];
        }
    }

    return array(
        'protocol' => $protocol,
        'tld' => $tld,
        'subdomain' => $subdomain,
        'hostname' => $hostname,
        'ip' => $ip
    );
}
/**
 * Vérifie si une année est bissextile.
 *
 * @param int $annee L'année à vérifier.
 * @return bool True si l'année est bissextile, sinon False.
 */

function estBissextile($annee)
{
    return (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0);
}


/**
 * Renvoie le jour de la semaine pour une année donnée.
 *
 * @param int $annee L'année à utiliser.
 * @return string Le jour de la semaine.
 */
function jourSemaine($annee)
{
    $timestamp = strtotime("$annee-01-01");
    return date('l', $timestamp);
}

/**
 * Incrémente le compteur de visites dans un fichier.
 *
 * @param string $filename Le nom du fichier de comptage.
 * @return int Le nombre de visites après l'incrémentation.
 */

function incrementHitsCounter($filename)
{
    // Vérifier si le fichier existe
    if (!file_exists($filename)) {
        file_put_contents($filename, '0');
    }

    // Lire le nombre de hits depuis le fichier
    $hits = intval(file_get_contents($filename));

    // Incrémenter le compteur à chaque rafraîchissement de la page
    $hits++;
    file_put_contents($filename, $hits);

    return $hits;
}

/**
 * Extrait les régions et leurs départements à partir de fichiers CSV.
 *
 * @param string $regionsFile Chemin vers le fichier des régions.
 * @param string $departmentsFile Chemin vers le fichier des départements.
 * @return array Le tableau des régions et de leurs départements.
 */

function extractRegionsDepartments($regionsFile, $departmentsFile) {
    // Initialisation du tableau pour stocker les régions et les départements
    $regionsDepartments = array();

    // Lecture du fichier des régions
    $regionsData = array_map('str_getcsv', file($regionsFile));

    // Lecture du fichier des départements
    $departmentsData = array_map('str_getcsv', file($departmentsFile));

    // Parcours des données des régions
    foreach ($regionsData as $region) {
        $regionName = $region[4];
        $regionCode = $region[0];

        // Initialisation du tableau pour stocker les départements de la région
        $regionDepartments = array();

        // Parcours des données des départements
        foreach ($departmentsData as $department) {
            if ($department[1] === $regionCode) {
                $regionDepartments[] = $department[4] . ' - ' . $department[5];
            }
        }

        // Ajout de la région et de ses départements au tableau principal
        $regionsDepartments[$regionName] = $regionDepartments;
    }

    // Retourner le tableau des régions et des départements
    return $regionsDepartments;
}



/** 
 * calcule la somme des n premiers entier
 * @author abdel
 * @param int $n un entier positif 
 * @return int la somme de n premiers entiers 
 */
function sommeCarre(int $n):int{
    if($n <= 0){
        return 0 ;
    }
    return ($n*$n) + sommeCarre($n-1);
}

function assertSommeCarre(int $n){
    $resultatAt = $n*($n+1)*(2*$n+1)/6 ;
    $sommeCarre = sommeCarre($n) ;

    assert($resultatAt==$sommeCarre,"Assertion a échoué: sommeCarres($n) devrait être $resultatAt, mais retourne $sommeCarre.");

}
?>