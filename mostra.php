<?php
include "aluno.php";

session_start();

$aluno = unserialize($_SESSION['aluno']);

var_dump($aluno);
?>