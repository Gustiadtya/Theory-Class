<!DOCTYPE html>
<html>
<head>
	<title>Gaji Karyawan</title>
</head>
<body>
	<table> 
   		<form ACTION="" METHOD="POST" Name="nilai">
       		<tr><td>Nama 	 : </td><td><input type="text" name="nama"></td></tr>
       		<tr><td>Jam Lembur : </td><td><input type="text" name="jam"></td></tr>
       		<tr><td rowspan="2"><input type="submit" name="input" value="Hitung Honor" </td></tr>
       </form>
   </table>
</body>
</html>

<?php
	if(isset($_POST['input'])){
    $nama=$_POST['nama'];
    $jam=$_POST['jam'];

    $gp=4000000;
    $bns=3000000;
    
    if (($jam>=0)&&($jam<30)) {
    	$honor=$gp;
    }
    elseif (($jam>=30)&&($jam<=120)) {
    	$honor=$gp+($jam*100000);
    }
    else {
    	$honor=$gp+($jam*100000)+$bns;
    }

      echo "Nama Karyawan = <b>$nama</b> <br>
          	Honor = $honor";
    }
?>