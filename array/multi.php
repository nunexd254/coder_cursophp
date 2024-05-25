<?php
    $title = 'Multidimensionais';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $dados = [
        [
            "nome" => "Roberto",
            "idade" => 26,
            "naturalidade" => "São Paulo",
            [
                "Bairro" => "Osasco",
                "numero" => 2232,
                "cep" => 95095000
            ]
        ],
        [
            "nome" => "Maria",
            "idade" => 20,
            "naturalidade" => "Bahia",
            [
                "Bairro" => "Osasco",
                "numero" => 2232,
                "cep" => 95095000
            ]
        ],  
    ];
    var_dump($dados);
    echo '<br>';
    $dados[] = [
        "nome" => "Florinda",
        "idade" => 15,
        "naturalidade" => "Cidade do México",

    ];
    var_dump($dados);
    echo '<br>';
    unset($dados[1]);