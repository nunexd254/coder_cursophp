<?php
    namespace contexto;
    $title = 'Exemplo Básico';
?>
<div class="titulo"><?= $title ?></div>
<?php
    echo __NAMESPACE__ .'<br>';
    const Constante1 = 123;

    define('contexto\Constante2',123);
    define(__NAMESPACE__.'\Constante3',1234);
    define('outro_contexto\Constante4',456);

    echo Constante1 . '<br>';
    echo Constante2 . '<br>';
    echo constant(__NAMESPACE__ . '\Constante3') . '<br>';
    echo \outro_contexto\Constante4 . '<br>';

    function strpos(string $str, string $text){
        echo "Buscando o texto '{$text}' em '{$str}'<br>";
        return 1;
    }
    //chamada do strpos minha
    echo strpos('Texto genérico para busca','busca');

    //chamada do strpos do php
    echo \strpos('Texto genérico para busca','busca');