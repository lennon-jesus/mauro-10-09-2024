<?php
include "aluno.php";

session_start();

$retornado = unserialize($_SESSION['aluno']);

echo "Nome: $retornado->nome";
echo ", ".$retornado->idade()." anos"
?>