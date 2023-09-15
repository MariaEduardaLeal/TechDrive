<?php

$local = "localhost";
$root = "root";
$pass = "";
$bd = "oficina_mecanica";

$mysqli = new mysqli($local, $root, $pass, $bd);

if($mysqli ->connect_errno){
    echo "erro <br>" ;
    echo "Erro: " . $mysqli->connect_error; 
}
?>
