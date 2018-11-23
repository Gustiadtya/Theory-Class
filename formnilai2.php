<html>
<head>
   <title>form</title>
   </head>
   <body>
   	<table> 
   		<form ACTION="" METHOD="POST" Name="nilai">
       		<tr><td>Nama 	 : </td><td><input type="text" name="nama"></td></tr>
       		<tr><td>UTS 	 : </td><td><input type="text" name="uts"></td></tr>
       		<tr><td>UAS 	 : </td><td><input type="text" name="uas"></td></tr>
       		<tr><td>Pratikum : </td><td><input type="text" name="praktikum"></td></tr>
       		<tr><td rowspan="2"><input type="submit" name="input" value="Hitung" </td></tr>
       </form></table>
     </body>
     </html>

<?php
  if(isset($_POST['input'])){
    $Nama=$_POST['nama'];
    $UTS=$_POST['uts'];
    $UAS=$_POST['uas'];
    $Praktikum=$_POST['praktikum'];

    $na=(0.35*$UTS)+(0.3*$Praktikum)+(0.35*$UAS);

    if($na>80){
      $hm="Huruf Mutu A";
    }
    elseif (($na>=68)&&($na<80)) {
      $hm="Huruf Mutu B";
    }
    elseif (($na>=50)&&($na<68)) {
      $hm="Huruf Mutu C";
    }
    else {
      $hm="Huruf Mutu D";
    }
    
    echo "Nama Anda adalah <b>$Nama</b> <br>
          Nilai Akhir = $na<br>
          Huruf Mutu = $hm";
    }

?>