<?php
    $sospechoso = $_POST['sus'];

    if ($sospechoso == "Klavier_Gavin") {
        header("Location: ../pant_finales/ganada.php");
    } else {
        header("Location: ../pant_finales/perdida.php");
    }
?>