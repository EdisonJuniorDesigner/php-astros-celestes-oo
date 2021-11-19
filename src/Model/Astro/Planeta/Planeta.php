<?php

namespace Edison\Banco\Model\Astro\Planeta;

use Edison\Banco\Model\Astro\Astro;

class Planetas extends Astro
{
    private string $tipo;
    private bool $temAneis;
    private bool $ehHabitavel;

    public function __construct(string $nome, float $raio, int $quantidadeDeLuas, string $tipo, bool $temAneis, bool $ehHabitavel)
    {
        parent::__construct($nome, $raio, $quantidadeDeLuas);
        $this->tipo = $tipo;
        $this->temAneis = $temAneis;
        $this->ehHabitavel = $ehHabitavel;
    }

    public function recuperaTipo(): string
    {
        return $this->tipo;
    }

    public function retornaTemAneis(): bool
    {
        return $this->temAneis;
    }

    public function retornaEhHabitavel(): bool
    {
        return $this->ehHabitavel;
    }

}
