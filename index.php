<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>

 <?php getHeader(); ?>

</head>

<body>

  <div id="wrapper">

    <?php getNavBar(); ?>

    <div class="container">

      <div class="row general_row">
      <?php
        loadFile("txtfiles/general.txt");
      ?>
      </div>

      <div class="row projets_row">
      <?php
        loadFile("txtfiles/projets.txt");
      ?>
      </div>

      <div class="row info_row">
      <?php
        loadFile("txtfiles/info.txt");
      ?>
      </div>

      <div class="row comm_row">
      <?php
        loadFile("txtfiles/comm.txt");
      ?>
      </div>

      <div class="row quali_row">
      <?php
        loadFile("txtfiles/quali.txt");
      ?>
      </div>

      <div class="row treso_row">
      <?php
        loadFile("txtfiles/treso.txt");
      ?>
      </div>

      <div class="row partenaires_row">
      <?php
        loadFile("txtfiles/partenaires.txt");
      ?>
      </div>

    </div>

  </div>

</body>
<script src="script.js" defer></script>
</html>