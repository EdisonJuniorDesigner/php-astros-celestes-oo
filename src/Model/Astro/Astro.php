<?php

namespace Edison\Banco\Model\Astro;

abstract class Astro
{
    private string $nome;
    private float $raio;
    private int $quantidadeDeLuas;

    // atributo estático da classe
    private static int $numeroDeAstros = 0;

    public function __construct(string $nome, float $raio, int $quantidadeDeLuas)
    {
        $this->nome = $nome;
        $this->raio = $raio;
        $this->quantidadeDeLuas = $quantidadeDeLuas;

        // incrementa a quantidade de Astros
        self::$numeroDeAstros++;
    }

    //quando um planeta é destruído ou uma estrela passa por uma supernova
    //diminui a contagem de astros
    public function __destruct()
    {
        self::$numeroDeAstros--;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaRaio(): float
    {
        return $this->raio;
    }

    public function recuperaQuantDeLuas(): int
    {
        return $this->quantidadeDeLuas;
    }

    public function recuperaDiametro(): float
    {
        return $this->raio * 2;
    }

    // método estático
    public static function recuperaNumeroDeAstros(): int
    {
        return self::$numeroDeAstros;
    }

    public function __toString(): string
    {
        return "Estrela: {$this->nome}, Raio: {$this->raio}, Diametro: ".$this->recuperaDiametro().", Quantidade de Luas: {$this->quantidadeDeLuas}";
    }

}
