<?php 

$host = "IP DO BANCO";
$usuario = "USUARIO DO BANCO";
$senha = "SENHA DO BANCO";
$banco = "NOME DO BANCO";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);