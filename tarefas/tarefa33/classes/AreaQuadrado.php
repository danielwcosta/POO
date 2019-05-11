<?php
class AreaQuadrado
{
    private $aresta;

    public function __construct(float $xAresta)
    {
        $this->aresta = $xAresta;
    }

    public function calcularArea()
    {
        return $this->aresta ** 2;
    }
}
?>