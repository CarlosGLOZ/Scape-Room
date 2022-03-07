<?php
    session_start();

    $sospechoso = $_POST['sus'];

    if ($sospechoso == "Klavier_Gavin") {
        $_SESSION["final_disponible"] = true;
        header("Location: ../pant_finales/ganada.php");
    } else {
        $_SESSION["final_disponible"] = true;
        header("Location: ../pant_finales/perdida.php");
    }
?>