<?php

define ( "PASSAGER_MAX" , 39);

echo "Sièges du pont supérieur :\n\n" ;

$numSiege = 30;

while ($numSiege <= PASSAGER_MAX){
	
	echo "\tSiège numéro " , $numSiege , "\n" ;
	$numSiege = $numSiege + 2;
}
echo "Limite de passager.\n";


?>
