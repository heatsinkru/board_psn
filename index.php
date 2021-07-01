<?php
/**
 * @author Samuel-Charles DITTE-DESTRÉE <samueldittedestree@gmail.com>
 * @version 6.0
 * @copyright (c) Polytech Services Nancy, 2021
 * @link https://board.polytech-services-nancy.fr
 */
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PSN Board</title>
    <link rel="icon" type="image/png" href="images/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div id="wrapper">

    <?php include "includes/navbar.php"; ?>

    <div class="container">

        <?php
        $data = getData();
        $panelIndex = 0;
        foreach ($data['tabs'] as $panel) {
            include 'includes/panel.php';
            $panelIndex++;
        }
        ?>

    </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>
<script src="script.js" defer></script>
<script>
    // popovers initialization
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
</html>
