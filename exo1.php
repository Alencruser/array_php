<?php
$i = array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
echo $i[2]."\n";
echo $i[5]."\n";
$i[7]="Août";
echo $i[7]."\n";
foreach ($i as &$value){
	echo "foreach : ".$value."\n";
};
?>