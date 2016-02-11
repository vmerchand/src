<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "unodc");

$result = $conn->query("SELECT apellidos, nombre, sexo FROM principal");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"apellidos":"'  . $rs["apellidos"] . '",';
    $outp .= '"nombre":"'   . $rs["nombre"]        . '",';
    $outp .= '"sexo":"'. $rs["sexo"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);
?>