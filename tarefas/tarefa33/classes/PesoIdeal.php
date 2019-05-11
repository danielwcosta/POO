<?php
class PesoIdeal
{
    private $peso;
    private $altura;

    public function __construct(float $peso, float $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calculoPesoIdeal()
    {
        return ($this->peso)/($this->altura**2);
    }
}

?>