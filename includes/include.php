<?php
    $title = 'Include';
?>
<div class="titulo"><?= $title ?></div>
<?php
    echo 'Executei essa linha no arquivo include.php';
    echo '<br>';
    include ('include_arquivo.php');
    //a mesma função não pode possuir mais de um include
    echo soma(2,3) . '<br>';

    echo "O conteúdo da variável é: {$variavel}<br>";