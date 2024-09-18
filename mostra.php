<?php
include "aluno.php";

session_start();

$retornado = unserialize($_SESSION['aluno']);

echo "Nome: ".$retornado->nome;
echo "Nascimento: ".$retornado->nascimento;
echo "Matrícula: ".$retornado->matricula;
echo "CPF: ".$retornado->cpf;
?>