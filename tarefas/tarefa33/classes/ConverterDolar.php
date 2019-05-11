<?php
class ConverterDolar
{
    private $dolar;
    private $cambio;

    public function __construct(float $dolar,float $cambio)
    {
        $this->dolar = $dolar;
        $this->cambio = $cambio;
    }

    public function conversao()
    {
        return $this->dolar * $this->cambio;
    }
}


?>