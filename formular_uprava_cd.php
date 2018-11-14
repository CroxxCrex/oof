<?php
$ID=$_POST['ID'];
require 'pripojeni.php';
$zaznam="SELECT * FROM prehled_cd WHERE ID=$ID";
$vysledek = mysqli_query($spojeni,$zaznam);
echo '<table border=1>';
while($zaznam=MySQLi_Fetch_Array($vysledek))
{
echo '<form action="uprava_cd.php" method="post">';
echo '<tr>';
echo '<td>';
echo '<input type="text" name="ID" value="';
echo $ID;
echo '">';
echo '<input type="text" name="nazev" value="' ;
echo $zaznam['nazev'];
echo '">';
echo '</td>';
echo '<td>';
echo '<input type="text" name="interpret" value="' ;
echo $zaznam['interpret'];
echo '">';
echo '</td>';
echo '<td>';
echo '<input type="text" name="stav" value="' ;
echo $zaznam['stav'];
echo '">';
echo '</td>';
echo '<td>';
echo '<input type="text" name="uzivatel" value="' ;
echo $zaznam['uzivatel'];
echo '">';
echo '</td>';
echo '<td>';
echo '<input type="submit" value="Upravit">';
echo '</td>';
echo '</tr>';
echo '</form>';
echo '</table>';
 }
?> 
