<?php
do {
    echo "Confirmez-vous la modification (oui/non)?\n";
    $valeur = rtrim(fgets(STDIN));

    if ($valeur !== "oui" && $valeur !== "non") {
        echo "Réponse Incorrecte ! \n";
    }

} while ($valeur !== "oui" && $valeur !== "non");

echo "Modification en cours...\n";
?>