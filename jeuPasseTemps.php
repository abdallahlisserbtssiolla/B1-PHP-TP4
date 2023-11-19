<?php

$nombreRecherche = rand(1, 100);
$nombreTentatives = 0;
$saisie = 0;


while ($saisie != $nombreRecherche) {
	echo "Saisir un nombre entier compris entre 1 et 100 : ";
    $saisie = rtrim(fgets(STDIN));
    $nombreTentatives = $nombreTentatives + 1 ;

    if ($saisie < 1 || $saisie > 100) {
        echo "Valeur incorrecte !\n";
    } elseif ($saisie < $nombreRecherche) {
        echo "Trop petit !\n";
    } elseif ($saisie > $nombreRecherche) {
        echo "Trop grand !\n";
    } else {
        echo " Felicitations Capitaine. Victoire en $nombreTentatives coups !\n";
        break;
    }

 
}
?>
