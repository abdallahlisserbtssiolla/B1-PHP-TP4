<?php
	define( "CONFIRMATION", 1 );
do{
	echo"Confirmez-vous la modification (oui/non)? \n";
	$valeur = rtrim ( fgets (STDIN) );
	
	
}while ($valeur !== "oui" && $valeur !== "non");

echo"Modification en cours...";
?>
		
