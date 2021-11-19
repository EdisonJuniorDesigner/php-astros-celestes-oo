<?php

namespace Edison\Banco\Model\Astro\Estrela;

use Edison\Banco\Model\Astro\Astro;

class Estrela extends Astro
{
    private float $temperatura; // Temperatura em Kelvin (K)

    function __construct(string $nome, float $raio, int $quantidadeDeLuas, float $temperatura)
    {
        parent::__construct($nome, $raio, $quantidadeDeLuas);
        $this->temperatura = $temperatura;
    }

    public function recuperaTemperatura(): float
    {
        return $this->temperatura;
    }

    public function tipoDaEstrela(): void
    {
        echo "Cor: ";
        switch($this->temperatura){
            case $this->temperatura >= 20000:
                echo "Azul";
                break;
            case $this->temperatura >= 10000:
                echo "Branca";
                break;
            case $this->temperatura >= 6000:
                echo "Amarela";
                break;
            case $this->temperatura >= 3000:
                echo "Vermelha";
                break;
        }
    }

    public function superNova(Estrela $estrela) : void
    {
        echo "Sua ".parent::recuperaNome().", morreu o que resultou numa Super Nova, varrendo " .parent::recuperaQuantDeLuas(). " Lua(s) de sua órbita".PHP_EOL;
        unset($estrela);
    }

    public function __toString(): string
    {
        return parent::__toString().", Temperatura: {$this->temperatura} K".PHP_EOL;
    }
}
