<?php
class Cliente 
{
    // Propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;



    // Métodos getters e setters

                /* get = pegar*/ 
    public function getNome():string{
        return $this->nome;
    }

                            //Parametro
    public function setNome(string $nome){
        $this->nome = $nome;
    //propriedade
    }





    public function getEmail():string{
        return $this->email;
    }

    public function setEmail(string $recebeEmail){
            $this->email = $recebeEmail;
    }





    public function getSenha():string{
        return $this->senha;
    }

    public function setSenha(string $recebeSenha){
        $this->senha = password_hash($recebeSenha, PASSWORD_DEFAULT);
    }

}