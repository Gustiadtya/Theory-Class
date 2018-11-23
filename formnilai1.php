<html>
	<head>
		<title>Pengolahan Form</title>
	</head>
	<body>
	<table>
		<form action="" method="post" name="input">
			<tr><td>Nama Anda :</td><td> <input type="text" name="nama"></td></tr>
			<tr><td>UTS	      :</td><td> <input type="text" name="uts"></td></tr>
			<tr><td>UAS	      :</td><td> <input type="text" name="uas"></td></tr>
			<tr><td>Praktikum :</td><td> <input type="text" name="praktikum"></td></tr>
			<tr><td><input type="submit" name="Input" value="Hitung"></td></tr>	
		</form>
	</table>
	</body>
</html>

	<?php
		if(isset($_POST['Input'])){
		$Nama=$_POST['nama'];
		$UTS=$_POST['uts'];
		$UAS=$_POST['uas'];
		$Praktikum=$_POST['praktikum'];

		$Hasil=(0.35*$UTS)+(0.3*$Praktikum)+(0.35*$UAS);
		
		if($Hasil>=60){
			$l = "<font color='blue'>LULUS</font>";
		}
		else{
			$l = "<font color='red'>REMEDIAL</font>";
		}
		
		echo "Nama Anda adalah <b>$Nama</b> <br>
			Nilai UTS anda = $UTS<br>
			Nilai UAS anda = $UAS<br>
			Nilai Praktikum anda = $Praktikum<br>
			Nilai Akhir anda <font color='blue'><b> $Hasil </b></font><br>
			Anda $l";
		}
	?>
