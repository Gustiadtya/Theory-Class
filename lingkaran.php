<!DOCTYPE html>
<html>
<head>
	<title>Luas Lingkaran</title>
</head>
<body>
	<table><form action="" method="POST" name="lingkaran">
		<tr><td>Masukan Jari Jari :</td><td><input type="text" name="jari"></td></tr>
		<tr><td>Pilihan</td><td>Luas <input type="radio" name="pilihan" value="luas"> Keliling <input type="radio" name="pilihan" value="keliling"></td></tr>
		<tr><td colspan="2"><input type="submit" name="input" value="hitung"></td></tr>
	</form></table>
</body>
</html>

<?php 
	if(isset($_POST['input'])) {
	$jari=$_POST['jari'];
	$pilihan=$_POST['pilihan'];

	function luas($jari){
		$lo=3.14*$jari*$jari;
		echo "Luas Lingkarannya adalah : $lo";
		return $lo;
	}

	function keliling($jari){
		$ko=3.14*2*$jari;
		echo "Keliling lingkarannya adalah : $ko";
		return $ko;
	}

	if ($pilihan=='luas') {
		luas($jari);
	}
	elseif ($pilihan=='keliling') {
		keliling($jari);
	}
	else{
		echo "Anda belum memasukan Pilihan";
	}
}
?>