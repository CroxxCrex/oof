<meta http-equiv="refresh" content="2;url=index.php">
<?php
  require 'pripojeni.php';
  $nazev = $_POST['nazev'];
  $interpret = $_POST['interpret'];
  $stav = $_POST['stav'];
  $uzivatel = $_POST['uzivatel'];
  $zaznam = "INSERT INTO prehled_cd (nazev, interpret, stav, uzivatel) VALUES ('$nazev','$interpret','$stav','$uzivatel')";
  
  if ($spojeni-> query($zaznam) === TRUE) {
    echo 'CD bylo přidáno';
    }
    else {
    echo 'Error:' ,$zaznam,'<br>',$spojeni->error;
    }
?>