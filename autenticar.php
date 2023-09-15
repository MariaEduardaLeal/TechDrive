<?php

include('conexao.php');
include('validarCliente.php');

if (isset($_POST['login']) || isset($_POST['senha'])) {

    if (strlen($_POST['login']) == 0) {
        header("location: index.php");
        exit(); // Para interromper a execução após o redirecionamento
    } else if (strlen($_POST['senha']) == 0) {
        header("location: index.php");
        exit();
    } else {

        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM clientes where login = '$login' and senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['idcliente'] = $usuario['idcliente'];
            $_SESSION['nome'] = $usuario['nome'];

            header("location: principal.php");
            exit(); // Para interromper a execução após o redirecionamento
        } else {
            header("location: index.php");
            exit();
        }
    }
}
?>
