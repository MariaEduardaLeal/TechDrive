<?php

$local = "localhost";
$root = "root";
$pass = "";
$bd = "oficina_mecanica";

$conexao = new mysqli($local, $root, $pass, $bd);

if($conexao ->connect_errno){
    echo "erro <br>" ;
    echo "Erro: " . $conexao->connect_error; 
}
?>