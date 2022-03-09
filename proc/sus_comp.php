<?php
    session_start();

    $sospechoso = $_POST['sus'];

    if ($sospechoso == "Klavier_Gavin") {
        $_SESSION["final_disponible"] = true;
        header("Location: ./../ganada.php");
    } else {
        $_SESSION["final_disponible"] = true;
        header("Location: ./../perdida.php");
    }
?>