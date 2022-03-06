<?php
    $sospechoso = $_POST['sus'];

    if (isset($sospechoso)) {
        if ($sospechoso == "Klavier_Gavin") {
            header("Location: ../pant_finales/ganada.php");
        } else {
            header("Location: ../pant_finales/perdida.php");
        }   
    } else {
        header("Location: ../juego.php?answsset=false");
    }
?>