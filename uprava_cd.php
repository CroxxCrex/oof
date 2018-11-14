<meta http-equiv="refresh" content="2;url=index.php">
<?php
require 'pripojeni.php';
$ID=$_POST['ID'];
$nazev = $_POST['nazev'];
$interpret = $_POST['interpret'];
$stav = $_POST['stav'];
$uzivatel = $_POST['uzivatel'];
$zaznam = "UPDATE prehled_cd SET nazev='$nazev',interpret='$interpret',stav='$stav',uzivatel='$uzivatel' WHERE ID='$ID'";
$vysledek = mysqli_query($spojeni,$zaznam);
if ($spojeni->query($zaznam) === TRUE) {
echo "CD bylo upraveno.";
}
else
{
echo "Chyba: ", $zaznam, "<br>", $spojeni->error;
}
?>                                             