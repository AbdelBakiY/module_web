<?php

function nomLieux(): string {
    $data = "<datalist id=\"suggestions\">" ;
    $nom_fichier = "./data/lignes.txt";
    $fichier = fopen($nom_fichier, "r");
    while (!feof($fichier)) {
        $ligne = fgets($fichier);
        $data.= "<option value=\"".$ligne."\">" ;

    }
    fclose($fichier);
    $data.="</datalist" ;
    return $data ;

}




?>