<?php
    session_start();

    $hora = $_POST["hora-muerte"];

    if ($hora == null) {
        header("Location: ../../juego.php?answsset=false");
    } else {
        $horas = $_SESSION["horas"];

        print_r($_SESSION["seleccionados"]);
        echo "<br>";

        foreach ($horas as $nombre => $i) {
            echo $nombre." -> ".$i[0];
            echo "<br>";
            if (($hora > $i[0] && $hora < $i[1]) && $_SESSION["seleccionados"][$nombre]) {
                $_SESSION["seleccionados"][$nombre] = true;
            } else {
                $_SESSION["seleccionados"][$nombre] = false;
            }
        }

        header("Location: ../../juego.php");
    }

    
?>