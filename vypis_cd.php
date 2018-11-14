<?php
require 'pripojeni.php';
$zaznam="SELECT * FROM prehled_cd order by ID asc";
$vysledek = mysqli_query($spojeni,$zaznam);
echo '<table border=1>';
while($zaznam=MySQLi_Fetch_Array($vysledek))
{
echo '<tr>';
echo '<td>';
echo $zaznam['ID'], '</td><td>', $zaznam['nazev'], '</td><td>', $zaznam['interpret'], '</td><td>', $zaznam['stav'],'</td><td>', $zaznam['uzivatel'], '</td>';
echo '<td>'; 
echo '<form action="formular_uprava_cd.php" method="post">
<input type="hidden" name="ID" value="';
echo $zaznam['ID'];
echo '"><input type="submit" value="Upravit"></form>';
echo '</td>';
echo '</tr>';
}
echo '</table>';
?>  