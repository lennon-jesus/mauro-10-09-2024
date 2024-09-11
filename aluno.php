<?php
class Aluno
{
    public $nome;
    public $nascimento;
    public $matricula;
    public $cpf;
    
    public function __construct($nome, $nascimento, $cpf, $matricula) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nascimento = $nascimento;
        $this->matricula = $matricula;
    }
    public function idade()
    {
        "$ano/$mes/$dia" = $nascimento;
        $idade = date("Y/m/d");
        return(true);
    }
}


?>
