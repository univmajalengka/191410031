<?php
	error_reporting(0); 

	$angka = [1,2,3,4,6];
	$angkaMin = min($angka);
	$angkaBesar = max($angka);

	for ($i=0; $i <= count($angka) ; $i++) { 
		
		echo $angka[$i]. " ";

	}

	for ($x=$angkaMin; $x <= $angkaBesar ; $x++) { 
		
		if (!in_array($x, $angka)) {
			
			echo "<br> Angka Hilang : ". $x;
		}
	}
	
	echo "<br> Total Angka : ". $angkaBesar. "<br><br>";



	$angka1 = [1,2,3,4,6,7,9,8,10];
	$angka1Min = min($angka1);
	$angka1Besar = max($angka1);

	for ($a=0; $a <= count($angka1) ; $a++) { 
		
		echo $angka1[$a]. " ";

	}

	for ($b=$angka1Min; $b <= $angka1Besar ; $b++) { 
		
		if (!in_array($b, $angka1)) {
			
			echo "<br> Angka Hilang : ". $b;
		}
	}
	
	echo "<br> Total Angka : ". $angka1Besar;
?>