<?php
    $sospechoso = $_POST['sus'];

    if ($sospechoso == "larry_butz") {
        header("Location: ../pant_finales/ganada.php");
    } else {
        header("Location: ../pant_finales/perdida.php");
    }
?>