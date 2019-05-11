<?php
class GeneroIMC
{
    private $peso;
    private $altura;
    private $genero;

    public function __construct(float $peso, float $altura, string $genero)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->genero = $genero;
    }

    public function calculoPesoIdeal()
    {
        return ($this->peso)/($this->altura**2);
    }

    public function genero()
    {
        return $this->genero;
    }
}

?>