<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente // extends pois vem (herda) da classe cliente 
{
private string $cpf;
private int $idade;

public function __construct()
{
    $this->setSituacao("normal");
}




public function getCpf(): string
{
return $this->cpf;
}


public function setCpf(string $cpf)
{
$this->cpf = $cpf;

return $this;
}





public function getIdade(): int
{
return $this->idade;
}


public function setIdade(int $idade)
{
$this->idade = $idade;

return $this;
}
}