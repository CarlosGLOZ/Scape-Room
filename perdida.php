<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        if (!$_SESSION["final_disponible"]) {
            header("Location: juego.php");
        }
    ?>
    <div class="row">
        <div class="column-1 center">
            <img src="./img/Final/Periodico-bad.jpg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="column-1">
        <a href="index.php">
            <input type="submit" value="volver" class="btn-back">
        </a>
        </div>
    </div>
</body>
</body>
</html>