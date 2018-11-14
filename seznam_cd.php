<?php
$zaznam="SELECT * FROM prehled_cd order by ID asc";
$vysledek = mysqli_query($spojeni,$zaznam);
echo '<table border=1>';
echo '<tr>';
echo '<td>';
echo 'Číslo CD</td>', '<td>Název CD</td>', '<td>Interpret</td>', '<td>Stav</td>', '<td>Uživatel</td>';
echo '</tr>';
while($zaznam=MySQLi_Fetch_Array($vysledek))
{
echo '<tr>';
echo '<td>';
echo $zaznam['ID'], '</td><td>', $zaznam['nazev'], '</td><td>', $zaznam['interpret'], '</td><td>', $zaznam['stav'], '</td><td>', $zaznam['uzivatel'], '</td>';
echo '</tr>';
}
mysqli_close($spojeni);
?>  