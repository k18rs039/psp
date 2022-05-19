<h2>令和3年8月</h2>
<table>
<?php 
 echo "<tr>";
 for ($i=1; $i<=31; $i++){
   echo "<td>" . $i . "</td>";
   if ($i % 7 == 0) {
     echo "</tr>\n<tr>";
   }
 }
 echo "</tr>";
?>
</table>