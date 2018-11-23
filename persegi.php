<html>
<head>
   <title>form</title>
   </head>
   <body>
   	<table> 
   		<form ACTION="" METHOD="post" Name="persegi">
       		<tr><td>Menghitung 	 : </td><td><input type="text" name="menghitung"></td></tr>
       		<tr><td>Sisi 	 : </td><td><input type="text" name="sisi"></td></tr>
          <tr><td><input type="submit" name="hitung" value="Hitung" </td></tr>
       </form></table>
     
     </body>
     </html>	

<?php
  if(isset($_POST['hitung'])){
    $menghitung=$_POST['menghitung'];
    $sisi=$_POST['sisi'];

    if($menghitung=='Luas'){
      $r=($sisi*$sisi);

      echo " pilihan = $menghitung <br>
             sisi= $sisi meter <br>
             Luas persegi = $r meter persegi";

    }
    else
    {
      $r=(4*$sisi);
      echo " pilihan = $menghitung <br>
             sisi= $sisi <br>
             Keliling persegi = $r";
    }

}


  ?>