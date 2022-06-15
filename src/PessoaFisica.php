<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente // extends pois vem (herda) da classe cliente 
{
private string $cpf;
private int $idade;

    // Propriedade estática (não depende de um objeto)
    public static string $cidade;

    // Método estático (não depende de um objeto)
    public static function verificaIdade(int $idade): string{
        return $idade >= 60 ? "prioridade" : "normal";
    }



public function __construct()
{
    $this->setSituacao("normal");
}

public function exibirDados(){
    echo "<h3>".$this->getNome()."</h3>";
    echo "<p>".$this->getIdade()."</p>";
    echo "<p>".$this->getSituacao()."</p>";
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