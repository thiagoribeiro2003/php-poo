<?php
require_once "PessoaJuridica.php";
class MEI extends PessoaJuridica
{
    private string $areaDeAtuacao;
    public function getAreaDeAtuacao(): string
    {
        return $this->areaDeAtuacao;
    }
    public function setAreaDeAtuacao(string $areaDeAtuacao)
    {
        $this->areaDeAtuacao = $areaDeAtuacao;
    }
}