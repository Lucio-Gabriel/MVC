<?php

spl_autoload_register(function ($nome_da_classe)
{
    $caminho = str_replace('\\', '/', $nome_da_classe);
    $arquivo = BASE_DIR . "/" . $caminho . ".php";

    // echo $arquivo;

    if(file_exists($arquivo))
        include $arquivo;
    else
        throw new Exception("Arquivo não econtrado" . $arquivo);

    // echo "<br><br>";
    // echo "<hr />";
});