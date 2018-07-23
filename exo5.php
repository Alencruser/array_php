<?php
$i = array(
	02 => "Aisne",
	59 => "Nord",
	60 => "Oise",
	62 => "Pas-de-Calais",
	80 => "Somme"
);
echo $i[59]."\n";
$i[51]="Marne";
echo $i[51]."\n";
echo "Dump : \n";
var_dump($i);
foreach ($i as $key => $value){
	echo "Le département ".$value." a le numero ".$key."\n";
}
?>