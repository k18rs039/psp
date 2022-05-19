<h2>１～３１の数字を一行に7つずつ表示（改善版）</h2>
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