<html>
<head>
   <title>form</title>
   </head>
   <body>
   	<table> 
   		<form ACTION="" METHOD="post" Name="looping">
       		<tr><td>Inputan 	 : </td><td><input type="text" name="input"></td></tr>
       		<tr><td>Junlah Pengulangan 	 : </td><td><input type="text" name="loop"></td></tr>
          <tr><td colspan="2" align="center"><input type="submit" name="hitung" value="loop" </td></tr>
       </form></table>
     
     </body>
     </html>	

     <?php

      if (isset($_POST['hitung'])){

      $input=$_POST['input'];
      $loop=$_POST['loop'];

      $i=0;

      while($i<$loop){
      	echo "$input <br>";
      	$i++;
      }

      }

      ?>