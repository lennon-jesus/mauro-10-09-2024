<?php
include "aluno.php";

$aluno = new Aluno($_GET['nome'],$_GET["nasc"],$_GET["matr"],$_GET["cpf"]);

$alunoDiferente = serialize($aluno);

session_start();

$_SESSION['aluno'] = $alunoDiferente;

?>