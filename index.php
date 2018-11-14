<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Půjčovna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
      require 'pripojeni.php';
    ?>
    <div class="hlava">
      <h1>CD půjčovna</h1>
    </div>
    <div class="menu">
     <a href="formular_vlozeni_cd.php">Přidaní CD</a>
     <a href="vypis_cd.php">Úprava CD</a>
    </div>
    <div class="seznam">
      <?php
        require 'seznam_cd.php';
      ?>
    </div>
</body>
</html>