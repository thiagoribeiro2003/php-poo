<?php
/* Classes abstratas NÃO PODEM SER INSTANCIADAS 
Ou seja, não é possivel criar um objeto/variável
a partir desta classe. */
abstract class Cliente 
{
    // Propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    
    private string $situacao = "a definir";


    // Métodos getters e setters

                /* get = pegar*/ 
    public function getNome():string{
        return $this->nome;
    }

                            //Parametro
    public function setNome(string $nome){
        $this->nome ="Cliente: ".$nome;
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




    

    /* Modificador de visibilidade
    public: nenhuma restrição (padrão)
    (todos acessam todos)

    private: restrição total 
    (só a classe conhece os recursos dela)
    
    protected: restrição parcial
    (recursos acessíveis pela própria classe e pelas
    subclasses que a herdam)
    */
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

   
    protected function setSituacao(string $situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }
}