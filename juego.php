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

            <div id="contents" class="row">
                <div id="sospechosos-cont">
                    <div class="column-2 rlln">
                    </div>
                    <?php
                        session_start();
                
                        $_SESSION["horas"] = [
                            "Larry_Butz" => array(0000, 2400),
                            "Matt_Engarde" => array(2000, 2400),
                            "Maya_Fey" => array(1400, 2100),
                            "Lana_Skye" => array(0000, 1300),
                            "William_Stone" => array(0000, 2000),
                            "Klavier_Gavin" => array(1900, 2130),
                        ];

                        $_SESSION["pruebas"] = [
                            "Larry_Butz" => "huellas",
                            "Matt_Engarde" => "papel_regalo",
                            "Maya_Fey" => "arma",
                            "Lana_Skye" => "movil",
                            "William_Stone" => "movil",
                            "Klavier_Gavin" => "huellas",
                        ];

                        $_SESSION["final_disponible"] = false;
                        
                    ?>
                    <div class="form-sospechosos">
                        <form action="./proc/sus_comp.php" method="post">
                            <?php
                                $nombres_mostrar = [
                                    "Larry_Butz" => "Larry Butz",
                                    "Matt_Engarde" => "Matt Engarde",
                                    "Maya_Fey" => "Maya Fey",
                                    "Lana_Skye" => "Lana Skye",
                                    "William_Stone" => "William Stone",
                                    "Klavier_Gavin" => "Klavier Gavin",
                                ];

                                // echo "<div class='form-sospechosos'>";
                                foreach ($_SESSION["seleccionados"] as $nombre => $mostrar) {
                                    if ($mostrar) {
                                        echo "<div id='{$nombre}'>";
                                        echo "<div class='usr'><input type='radio' name='sus' class='sospechoso' value='{$nombre}'>";
                                        echo "<label for='sus'>{$nombres_mostrar[$nombre]}</label></div></div>";
                                    }
                                }
                            ?>
                        <div class="row">
                            <div class="column-1">
                            <input type="submit" value="Acusar" class="buttom usr">
                            </div> 
                        </div>
                        </form>
                    </div>
                </div>

                <div id="forense-cont">
                    <form action="./proc/validaciones/val_hora.php" method="post">
                        <!-- Tienes que poner la hora a la que murió la víctima -->

                        <label for="hora-muerte">Hora de la muerte: </label>
                        <input type="time" name="hora-muerte">

                        <input type="submit" value="Comprobar">
                    </form>
                    
                    <div id="autopsia"></div>
                </div>

                <div id="pruebas-cont">
                    <h3><a href="./pruebas-adicionales.html" target="_blank">ABRIR REGISTRO DEL CASO</a></h3>
                    <p>El registro contiene información adicional sobre el caso en detalle.</p>

                    <h4><a href="./img/pruebas_adicionales/registro_A24B1.docx" dowload>Descargar registro del caso</a></h4>
                </div>

                <div id="escena-cont">
                    <!-- Varias pruebas que mandar al laboratorio, solo puedes mandar una -->
                    <form action="./proc/validaciones/val_prueba.php" method="post">

                        <input type="radio" name="prueba" value="papel_regalo">
                        <label for="prueba1">Papel de regalo</label>
                        
                        <input type="radio" name="prueba" value="huellas">
                        <label for="prueba2">Huellas de Zapato</label>
                        
                        <input type="radio" name="prueba" value="arma">
                        <label for="prueba3">Arma</label>

                        <input type="radio" name="prueba" value="movil">
                        <label for="prueba4">Movil</label>

                        <input type="submit" value="Mandar a laboratorio">
                    </form>

                    <div id="pruebas-escena"></div>
                </div>

                <div id="testimonios-cont">
                    <div id="testimonios"></div>
                </div>
            </div> 
        </div> 
    </div>
    <script>
        document.getElementsByClassName("disclaimer")[0].style.display = "none";
    </script>
</body>
</html>