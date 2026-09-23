<?php 

$host = "SEU IP AQUI";
$usuario = "SEU USUARIO AQUI";
$senha = "SUA SENHA AQUI";
$banco = "SEU BANCO AQUI";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);