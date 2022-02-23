<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/styles.css">

    <!--Reference to JS script-->
    <script src="./js/windowNav.js"></script>

</head>
<body>
    <div id="inicio">
        <div id="folder" class="padding-cpt">
            <section class="row-fileNav">
                <div class="column-fileNav">
                    <p class="sospechosos-nav" onclick="open_sospechosos()">Sospechosos</p>
                </div>
                <div class="column-fileNav">
                    <p class="forense-nav" onclick="open_forense()">Información Forense</p>
                </div>
                <div class="column-fileNav">
                    <p class="pruebas-nav" onclick="open_pruebas()">Pruebas adicionales</p>
                </div>
                <div class="column-fileNav">
                    <p class="escena-nav" onclick="open_escena()">Escena del crimen</p>
                </div>
                <div class="column-fileNav">
                    <p class="testimonios-nav" onclick="open_testimonios()">Testimonios</p>
                </div>
            </section>

            <div id="contents">
                <div id="sospechosos-cont">
                    <form action="./proc/proc.php" method="post">
                        <input type="radio" name="sus" class="sospechoso1" value="sus1">
                        <label for="sus1">Sospechoso 1</label>

                        <input type="radio" name="sus" class="sospechoso2" value="sus2">
                        <label for="sus2">Sospechoso 2</label>

                        <input type="radio" name="sus" class="sospechoso3" value="sus3">
                        <label for="sus3">Sospechoso 3</label>

                        <input type="radio" name="sus" class="sospechoso4" value="sus4">
                        <label for="sus4">Sospechoso 4</label>

                        <input type="radio" name="sus" class="sospechoso5" value="sus5">
                        <label for="sus5">Sospechoso 5</label>

                        <input type="radio" name="sus" class="sospechoso6" value="sus6">
                        <label for="sus6">Sospechoso 6</label>

                        <input type="submit" value="Seleccionar">
                    </form>
                </div>
                <div id="forense-cont">
                    forense
                </div>
                <div id="pruebas-cont">
                    pruebas adicionales
                </div>
                <div id="escena-cont">
                    escena del crimen
                </div>
                <div id="testimonios-cont">
                    testimonios
                </div>
            </div> 
        </div> 
    </div>
</body>
</html>