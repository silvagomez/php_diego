<?php
require_once ("conexion.php");
$conect=getConexion();
//En un heredoc recordar que si se usa $_POST, $_GET ó $_REQUEST deben ir en {} y si es una sentencia de mysql las llaves dentro de '';
$q=<<<sql
INSERT INTO trenes(fecha_compra,km_recorridos) VALUES('{$_REQUEST['fc']}','{$_REQUEST['recorrido']}');
sql;
mysqli_query($conect,$q) or die("ERROR: Insert");
// Versión 2.0 recogiendo los valores en variables
// $fc=$_REQUEST['fc'];
// $recorrido=$_REQUEST['recorrido'];
// $q=<<<sql
// INSERT INTO trenes(fecha_compra,km_recorridos) VALUES('$fc','$recorrido');
// sql;
// $conection->query($q) or die("ERROR: Insert"); // Funciona
closeConexion($conect);
?>

