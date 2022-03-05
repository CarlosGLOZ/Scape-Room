<?php
    $hora = $_POST["hora-muerte"];

    $horas = [
        "larry" => array(0000, 2400),
        "matt" => array(2000, 2400),
        "maya" => array(1400, 2100),
        "lana" => array(0000, 1300),
        "william" => array(0000, 2000),
        "klavier" => array(1900, 2130),
    ];

    $seleccionados = [];

    foreach ($horas as $nombre => $i) {
        echo $nombre." -> ".$i[0];
        echo "<br>";
        if ($hora > $i[0] && $hora < $i[1]) {
            array_push($seleccionados, $nombre);
        }
    }

    foreach ($seleccionados as $key => $nombre) {
        echo $key." - ".$nombre;
        echo "<br>";
    }
?>