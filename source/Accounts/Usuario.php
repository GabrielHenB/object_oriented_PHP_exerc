<?php
namespace source\Interp;

class Usuario
{
    private $nomeA;
    private $email;
    
    //METODOS DE CONSTRUCAO CLONE DESTRUICAO CLASSAO
    
    public function __construct($nomeA,$email = null){
        //Construtor que nao obriga envio da variavel $email
        $this->nomeA = $nomeA;
        $this->email = $email;
    }
    public function __clone(){
        //Reservado para clone de um objeto
        $this->nomeA = null;
        $this->email = null;
    }
    public function __destruct(){
        //Metodo chamado durante a destruicao de teyvat
        //Sempre xecutado ao final do ciclo do objeto
        echo "<p>Um objeto = {$this->nomeA} foi destruido</p>";
    }
    
    //ALGUMAS OUTRAS COISAS DA CLASSE PARTE 2
    
    /**
     * @return mixed
     */
    public function getNomeA()
    {
        return $this->nomeA;
    }

    /**
     * @return mixed
     */
    public function getNomeB()
    {
        return $this->nomeB;
    }

}

