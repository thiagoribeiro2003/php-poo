<?php
class Cliente 
{
    // Propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha = ""; // valor inicial padrão
    public array $telefones;

    // Dados
    public function exibirDados(){
        echo "<h3> $this->nome </h3>";
        echo "<ul>";
        echo "<li> $this->email</li>";
        echo "<li>". implode(', ',$this->telefones)."</li>";
        echo "</ul>";
    }

}