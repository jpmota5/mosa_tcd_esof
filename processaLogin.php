<?php

$usuarioPadrao = "admin";
$senhaPadrao = password_hash("mosaadmin", PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $usuarioPadrao && password_verify($password, $senhaPadrao)) {
        echo "<script>window.location.href = 'index.html';</script>";
        exit();
    } else {
        echo "<script>window.location.href = 'erro_autenticacao.html';</script>";
        exit();
    }
}
?>