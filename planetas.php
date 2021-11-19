<?php

use Edison\Banco\Model\Astro\Astro;
use Edison\Banco\Model\Astro\Estrela\Estrela;

require_once 'autoload.php';

$umaEstrela = new Estrela('Anã-Laranja', 696340, 2, 6300);
$outraEstrela = new Estrela('Anã-Laranja', 696340, 2, 6300);

echo $umaEstrela;
$umaEstrela->tipoDaEstrela();
echo PHP_EOL;
echo "Número de Astros: ".$umaEstrela->recuperaNumeroDeAstros().PHP_EOL;
// unset($umaEstrela);
$umaEstrela->superNova($umaEstrela);
echo "Número de Astros: ".$outraEstrela->recuperaNumeroDeAstros().PHP_EOL;
