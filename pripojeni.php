<?php
  $spojeni=mysqli_connect("localhost", "root", "", "hanc");
  mysqli_query($spojeni, "SET CHARACTER SET 'utf8'");
  
  if (mysqli_connect_errno())
  {
  echo "Nalezena chyba: ", mysqli_connect_error();
  
  }
  
?>