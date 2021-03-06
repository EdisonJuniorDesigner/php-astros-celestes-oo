<?php

// autoloader PSR-4
spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoArquivo = str_replace('Edison\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});
