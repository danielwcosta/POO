<?php
class AreaRetangulo
{
    //propriedades
    private $base;
    private $altura;

    //metodo construtor
    public function __construct(float $xBase, float $xAltura)
    {
        $this->base = $xBase;
        $this->altura = $xAltura;
    }

    //metodo para calculo da area
    public function calcularArea()
    {
        return $this->base * $this->altura;
    }
}