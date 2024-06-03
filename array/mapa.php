<?php
    $title = 'Mapa';
?>
<div class="titulo"><?= $title ?></div>
<?php

    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    print_r($dados);
    echo '<br>';
    var_dump($dados);
    echo '<br>';
    echo $dados["idade"];
    echo '<br>';
    echo $dados["cor"];
    echo '<br>';
    echo $dados["peso"];
    //adiciona elemento na lista
    $dados[] = 'i';
    echo '<br>';
    var_dump($dados);
    $dados['vinte'] = 'j';
    echo '<br>';
    var_dump($dados);