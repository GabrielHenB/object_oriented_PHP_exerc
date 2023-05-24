<?php
namespace source\UserData;

class Endereco
{
    private $rua;
    private $numero;
    private $complemento;
    
    
    public function __construct($numero, $rua, $complemento = null){
        $this->numero = $numero;
        $this->rua = $rua;
        $this->complemento = $complemento;
    }
    
    
    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @param string $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    
}

