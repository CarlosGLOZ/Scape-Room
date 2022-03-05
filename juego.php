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
                    <button class="sospechosos-nav" onclick="open_sospechosos()"></button>
                </div>
                <div class="column-fileNav">
                    <button class="forense-nav" onclick="open_forense()"></button>
                </div>
                <div class="column-fileNav">
                    <button class="pruebas-nav" onclick="open_pruebas()"></button>
                </div>
                <div class="column-fileNav">
                    <button class="escena-nav" onclick="open_escena()"></button>
                </div>
                <div class="column-fileNav">
                    <button class="testimonios-nav" onclick="open_testimonios()"></button>
                </div>
            </section>

            <div id="contents">
                <div id="sospechosos-cont">
                    <form action="./proc/sus_comp.php" method="post">
                        <input type="radio" name="sus" class="sospechoso1" value="larry_butz">
                        <label for="sus1">Larry Butz</label>

                        <input type="radio" name="sus" class="sospechoso2" value="matt_engarde">
                        <label for="sus2">Matt Engarde</label>

                        <input type="radio" name="sus" class="sospechoso3" value="maya_fey">
                        <label for="sus3">Maya Fey</label>

                        <input type="radio" name="sus" class="sospechoso4" value="lana_skye">
                        <label for="sus4">Lana Skye</label>

                        <input type="radio" name="sus" class="sospechoso5" value="william_stone">
                        <label for="sus5">William Stone</label>

                        <input type="radio" name="sus" class="sospechoso6" value="klavier_gavin">
                        <label for="sus6">Klavier Gavin</label>

                        <input type="submit" value="Acusar">
                    </form>
                </div>

                <div id="forense-cont">
                    <form action="./proc/validaciones/val_hora.php" method="post">
                        <!-- Tienes que poner la hora a la que murió la víctima -->

                        <label for="hora-muerte">Hora de la muerte: </label>
                        <input type="time" name="hora-muerte">

                        <input type="submit" value="Comprobar">
                    </form>
                </div>

                <div id="pruebas-cont">
                    <!-- En la escena del crimen, encontramos una carta dirigida a la víctima, escrita por su amante -->
                    pruebas adicionales
                </div>

                <div id="escena-cont">
                    <!-- Varias pruebas que mandar al laboratorio, solo puedes mandar una -->
                    <form action="./proc/proc.php" method="post">

                        <label for="prueba1">Papel de regalo</label>
                        <input type="radio" name="pruebas" value="prueba1">
                        
                        <label for="prueba2">Huellas de Zapato</label>
                        <input type="radio" name="pruebas" value="prueba2">
                        
                        <label for="prueba3">Arma</label>
                        <input type="radio" name="pruebas" value="prueba3">

                        <label for="prueba4">Movil</label>
                        <input type="radio" name="pruebas" value="prueba4">

                        <input type="submit" value="Mandar a laboratorio">
                    </form>
                </div>

                <div id="testimonios-cont">
                    testimonios
                </div>
            </div> 
        </div> 
    </div>
</body>
</html>