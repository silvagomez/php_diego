<?php 
if(isset($_REQUEST['name'])){
    setcookie('la_cookie2',$_REQUEST['name'],time()+60*60*24*1);
    header ("Refresh:0, url=cookies_ejer2_pag2.php"); //para refrescar la página
}

require_once "../../estilo/formato_i.php";

if (isset($_COOKIE['la_cookie2'])) {
    echo <<<html
        <p>
            HOLA {$_COOKIE['la_cookie2']} <br>
            <strong>Árboles</strong> <br>
            Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo. El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez, diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros
        </p>
html;
} else {
    echo <<<html
        <p>
            <strong>ÁRBOLES</strong> <br>
            Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo. El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez, diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros
        </p>
        <a href="cookies_ejer2_pag1.php">Introducir nombre</a>
html;
}

require_once "../../estilo/formato_f.php";
?>