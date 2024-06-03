<?php
    $title = 'Ler Arquivo';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $arquivo = fopen('teste.txt', 'r');
    echo fread($arquivo, 200);
    echo '<br>';
    fclose($arquivo);

    echo '<hr>';

    // $arquivo = fopen('teste.txt', 'r');
    // $retorno = fread($arquivo, filesize('teste.txt'));
    // echo $retorno;
    // fclose($arquivo);
    // //lendo arquivo linha linha
    // echo fgets($arquivo), '<br>';
    // fclose($arquivo);

    echo '<br>';
    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)){
        echo fgets($arquivo), '<br>';
    }
    fclose($arquivo);