<?php 

class Cadeira
{
    // propriedade
    private $cor;
    private $estofado;
    private $preco;
    private $fixaOuNao;

    public function __construct(string $xCor,string $xEstofado,bool $xfixaOuNao)
    {
        $this->cor = $xCor;
        $this->estofado = $xEstofado;
        $this->fixaOuNao = $xfixaOuNao;
    }

    public function sentar()
    {
        echo 'sentar...';
    }
}

?>