window.onload = function() {
    open_sospechosos();
}
document.getElementsByClassName("disclaimer")[0].style.display = "none";
function open_sospechosos() {
    document.getElementById("forense-cont").style.display = "none";
    document.getElementById("pruebas-cont").style.display = "none";
    document.getElementById("escena-cont").style.display = "none";
    document.getElementById("testimonios-cont").style.display = "none";
    document.getElementById("sospechosos-cont").style.display = "initial";
    document.getElementById("folder").style.backgroundImage = "url('img/fondo_carpetas/sospechosos_carpeta_titulos.png')";
}

function open_forense() {
    document.getElementById("sospechosos-cont").style.display = "none";
    document.getElementById("pruebas-cont").style.display = "none";
    document.getElementById("escena-cont").style.display = "none";
    document.getElementById("testimonios-cont").style.display = "none";
    document.getElementById("forense-cont").style.display = "initial";
    document.getElementById("folder").style.backgroundImage = "url('img/fondo_carpetas/forense_carpeta_titulos.png')";
}

function open_pruebas() {
    document.getElementById("sospechosos-cont").style.display = "none";
    document.getElementById("forense-cont").style.display = "none";
    document.getElementById("escena-cont").style.display = "none";
    document.getElementById("testimonios-cont").style.display = "none";
    document.getElementById("pruebas-cont").style.display = "initial";
    document.getElementById("folder").style.backgroundImage = "url('img/fondo_carpetas/pruebas_carpeta_titulos.png')";
}

function open_escena() {
    document.getElementById("sospechosos-cont").style.display = "none";
    document.getElementById("forense-cont").style.display = "none";
    document.getElementById("pruebas-cont").style.display = "none";
    document.getElementById("testimonios-cont").style.display = "none";
    document.getElementById("escena-cont").style.display = "initial";
    document.getElementById("folder").style.backgroundImage = "url('img/fondo_carpetas/escena_carpeta_titulos.png')";
}

function open_testimonios() {
    document.getElementById("sospechosos-cont").style.display = "none";
    document.getElementById("forense-cont").style.display = "none";
    document.getElementById("pruebas-cont").style.display = "none";
    document.getElementById("escena-cont").style.display = "none";
    document.getElementById("testimonios-cont").style.display = "initial";
    document.getElementById("folder").style.backgroundImage = "url('img/fondo_carpetas/testimonios_carpeta_titulos.png')";
}