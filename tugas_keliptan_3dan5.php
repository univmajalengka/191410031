<!DOCTYPE html>
<html>
<head>
	<title>Tugas Algoritma</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Masukan jumlah angka </td>
				<td>:</td>
				<td><input type="text" name="angka"></td>
			</tr>
			<tr>
				<td><button type="submit" name="kirim">Tampilkan</button></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['kirim'])) {

			$angka = $_POST['angka'];
			
			for ($i=1; $i <= $angka ; $i++) { 
				
					if($i%3==0 and  $i%5==0) {

						echo "Upin Ipin <br>";

					} else if($i%3==0) {

						echo "Upin <br>";
					} else if ($i%5==0) {
						
						echo "Ipin <br>";
					} else {
						echo $i."<br>";
					}
			}

		}
	?>

</body>
</html>