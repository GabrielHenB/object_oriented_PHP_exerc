<?php
namespace source\UserData\Accounts;

use source\UserData\Endereco; //pois nao esta no mesmo namespace

class UserCliente extends User
{
    /**
     * 
     * @var Endereco
     */
    private $endereco; //Associacao
    
    public function __construct($email,Endereco $endereco ,$nome=null){
        
        parent::__construct($email,$nome);
        $this->endereco = $endereco;
    }
    /**
     * 
     * @return \source\UserData\Endereco
     */
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
    
}

