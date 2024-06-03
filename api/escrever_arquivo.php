<?php
    $title = 'Escrever Arquivo';
?>
<div class="titulo"><?= $title ?></div>

<?php

ini_set('display_errors',1);
    $arquivo = fopen('teste.txt', 'w'); //modo escrita ele sempre reescreve
    fwrite($arquivo, "Valor inicial\n");
    fclose($arquivo);
    $arquivo = fopen('teste.txt', 'a');//modo adiciona
    fwrite($arquivo," com novos valores\n");
    fwrite($arquivo,"Adiciona\n");
    fclose($arquivo);    
    $arquivo = fopen('teste.txt', 'w'); //arquivos novos
    fwrite($arquivo,"Arquivo novo\n");