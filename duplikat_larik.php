<?php
error_reporting(0);
$array = [1, 1, 2, 3, 4, 7, 9, 9, 10, 10];

//Menghitung panjang array

$panjang = count($array) / count($array[0]);

echo "Duplikat pada larik : <br>";

for ($i=0; $i < $panjang; $i++) { 
	
	for ($a= $i + 1; $a < $panjang; $a++) { 
		
		if($array[$i] == $array[$a]) {

			echo $array[$a]. " ";
		}
	}
}

?>