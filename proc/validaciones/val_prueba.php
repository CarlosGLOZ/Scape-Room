<?php
    session_start();

    $prueba = $_POST["prueba"];

    $pruebas = $_SESSION["pruebas"];

    // $culpables = [];

    print_r($_SESSION["pruebas"]);
    echo "<br>";

    
    print_r($_SESSION["seleccionados"]);
    echo "<br>";

    foreach ($pruebas as $nombre => $incriminatoria) {
        if ($prueba == $incriminatoria && $_SESSION["seleccionados"][$nombre]) {
            $_SESSION["seleccionados"][$nombre] = true;
        } else {
            $_SESSION["seleccionados"][$nombre] = false;
        }
    }

    print_r($culpables);
    echo "<br>";

    print_r($_SESSION["seleccionados"]);

    header("Location: ../../juego.php");
?>