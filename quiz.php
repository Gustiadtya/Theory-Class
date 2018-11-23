<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>
<body>
	<table><form action="" method="POST" name="quiz">
		<tr><td>Nama : </td><td><input type="text" name="nama"></td></tr>
		<tr><td>Jenis Kelamin : </td><td><input type="radio" name="jk" value="Pria">Pria<input type="radio" name="jk" value="Wanita">Wanita</td></tr>
		<tr><td>Pilihan </td><td><select name="pilihan">
			<option value="Keliling Persegi">Keliling Persegi</option>
			<option value="Luas Persegi">Luas Persegi</option>
			<option value="Volume Kubus">Volume Kubus</option>
			<option value="Luas Permukaan Kubus">Luas Permukaan Kubus</option>
		</select></td></tr>
		<tr><td>Input Nilai Sisi : </td><td><input type="text" name="sisi"></td></tr>
		<tr><td colspan="2"><input type="submit" name="input" value="Hitung"></td></tr>
	</form></table>
</body>
</html>

<?php 
	if(isset($_POST['input'])) {
		$nama=$_POST['nama'];
		$jk=$_POST['jk'];
		$pilihan=$_POST['pilihan'];
		$sisi=$_POST['sisi'];

		if ($pilihan=='Keliling Persegi') {
			$hasil=4*$sisi;
			$out='m';
		}
		elseif ($pilihan=='Luas Persegi') {
			$hasil=$sisi*$sisi;
			$out='m<sup>2';
		}
		elseif ($pilihan=='Volume Kubus') {
			$hasil=$sisi*$sisi*$sisi;
			$out='m<sup>3';
		}
		else{
			$hasil=6*$sisi*$sisi;
			$out='m<sup>2';
		}

		echo "Nama : <font color='blue'><b>$nama</b></font><br>";
		echo "Jenis Kelamin : $jk<br>";
		echo "Pilihan Menghitung \"<u>$pilihan</u>\" dengan nilai sisi = <u>$sisi</u><br>";
		echo "Output Nilai \"<u>$pilihan</u>\"= $hasil $out";
	}
?>