<?php
namespace source\Interp;

class Manga
{
    public $title;
    public $capitulos;
    private $price;
    private $dataLancamento;
    
    /*public function __construct($title, $dataLancamento, $price, $capitulos = null)
    {
        $this->title = $title;
        $this->dataLancamento = $dataLancamento;
        $this->price = $price;
        $this->capitulos = $capitulos;
    }*/
    
    public function handler($title, $price, $capitulos){
        //Como se fosse um setter mas apenas atribui valores.
        $this->title = $title;
        $this->price = number_format($price, "2", ".", ","); //dois decimais, separadores de milhar e decimal
        $this->capitulos = $capitulos;
    }
    
    //Impede que novas propriedades sejam adicionadas se nao existirem
    public function __set($name, $value){
        $this->naoAchei(__FUNCTION__,$name);
    }
    
    //Exibe o nome da propriedade ou metodo que nao foi encontrado a classe apos o __set
    public function naoAchei($m,$n){
        echo "A propriedade {$n} nao foi encontrada na ".__CLASS__."\n";
    }
    
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDataLancamento()
    {
        return $this->dataLancamento;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $dataLancamento
     */
    public function setDataLancamento($dataLancamento)
    {
        $this->dataLancamento = $dataLancamento;
    }

}

