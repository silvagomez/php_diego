<?php 
require_once "../../estilo/formato_i.php";

if (isset($_COOKIE['la_cookie'])) {
    echo<<<html
    <form action="cookies_ejer1_pag2.php" method="post">
    <label>Introduce tu nombre: <input type="text" name="name" value="{$_COOKIE['la_cookie']}"></label>
    <input type="submit" value="Aceptar">
    </form>
html;
} else {
    echo<<<html
    <form action="cookies_ejer1_pag2.php" method="post">
    <label>Introduce tu nombre: <input type="text" name="name"></label>
    <input type="submit" value="Aceptar">
    </form>
html;
}

require_once "../../estilo/formato_f.php";
?>