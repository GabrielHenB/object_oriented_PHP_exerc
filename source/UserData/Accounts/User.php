<?php
namespace source\UserData\Accounts;

class User
{
    private $nome;
    private $email;
    
    //METODOS DE CONSTRUCAO CLONE DESTRUICAO
    
    public function __construct($email, $nome = null){
        //Construtor que nao obriga envio da variavel $nome
        $this->nomeA = $nome;
        $this->email = $email;
    }
    public function __clone(){
        //Reservado para clone de um objeto
        $this->nomeA = null;
        $this->email = null;
    }
    public function __destruct(){
        //Metodo chamado durante a destruicao do objeto
        //Sempre xecutado ao final do ciclo do objeto
        echo "<p>Um objeto = {$this->nome} foi destruido</p>";
    }
    
    //Impede que novas propriedades sejam adicionadas se nao existirem
    public function __set($name, $value){
        $this->naoAchei(__FUNCTION__,$name);
    }
    
    //Exibe o nome da propriedade ou metodo que nao foi encontrado a classe apos o __set
    public function naoAchei($m,$n){
        echo "A propriedade {$n} nao foi encontrada na ".__CLASS__."\n";
    }
    
    public function setNome($nome){
        $this->nome = nome;
    }
    
    public function setEmail($email){
        $this->email = email;
    }
    
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}

