<?php

$descriptor = fopen('el_quijote.txt', 'r');
$leer=fgets($descriptor);
$array = explode(" ",$leer);
$i=0;


while (($leer=(fgets($descriptor))) !== false ){

//	buscaMolino($leer);
	//$array = str_split($leer);
	echo $leer . "\n";
	$array = explode(" ",$leer);
	

	if(in_array('Cid', $array)){
		
			$i++;
	}

}
echo "la palabra molino aparece $i veces";
function buscaMolino($leer){
	$array = str_split($leer);
	if(in_array($array, "molino")){
		$i++;
	}
}

?>