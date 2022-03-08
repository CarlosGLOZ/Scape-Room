<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASO A24B1</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/styles.css">

    <!--Reference to JS script-->
    <script src="./js/windowNav.js"></script>

</head>
<body>
    <?php
        session_start();

        $_SESSION["sospechosos"] = [
            "Larry_Butz",
            "Matt_Engarde",
            "Maya_Fey",
            "Lana_Skye",
            "William_Stone",
            "Klavier_Gavin",
        ];

        $_SESSION["seleccionados"] = [
            "Larry_Butz" => true,
            "Matt_Engarde" => true,
            "Maya_Fey" => true,
            "Lana_Skye" => true,
            "William_Stone" => true,
            "Klavier_Gavin" => true,
        ];
    ?>

    <div id="inicio">
        <h1 class="flex">CASO A24B1</h1>
        <a href="./juego.php" class="flex"><h2>Jugar</h2></a>
        <p class="flex">Tendrás que resolver un caso de asesinato. Encontrarás los detalles del crimen dentro de un archivo en tu mesa.</p>
        <p class="flex">Por cada apartado, podrás deducir algunos aspectos del caso, como la hora de la muerte o el arma del crimen.</p>
        <p class="flex">Una vez lo sepas, podrás comprobar los datos. Esto hará que los sospechosos se reduzcan para eliminar a los inocentes.</p>
        <p class="flex">Puedes deducir todos los detalles del crimen hasta reducir la cantidad de sospechosos lo máximo posible o seleccionar un sospechoso desde el principio.</p>
        <p class="flex">La decisión es tuya</p>
    </div>
</body>
</html>