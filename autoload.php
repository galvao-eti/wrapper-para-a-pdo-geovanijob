<?php

spl_autoload_register(function ($class) {

    // prefixo do namespace especifico do projeto
    $prefix = '';

    
    // diretório base para o prefixo do namespace
    $base_dir = __DIR__ . '/src/';
    

    // a classe usa o prefixo do namespace?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        
    // não, vá para o próximo autoloader registrado
        return;
    }
    // obtém o nome da classe relativa
    $relative_class = substr($class, $len);    
    // substitua o prefixo do namespace pelo diretório base, substitua o namespace
    // separadores com separadores de diretório no nome da classe relativa, acrescentar
    // com .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    // se o arquivo existir, exija
    if (file_exists($file)) {
        require $file;

    }
});