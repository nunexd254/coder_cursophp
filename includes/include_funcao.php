<?php
    $title = 'Include Função';
?>
<div class="titulo"><?= $title ?></div>
<?php
    echo "Carregando: include_funcao<br>";

    function carregarArquivo() {
        include('include_arquivo.php');
        echo $variavel . '<br>';
        echo soma(2,3) . '<br>';
    }

    echo 'Novamente no arquivo include_funcao<br>';
    //echo soma(1,8) . '<br>';
    carregarArquivo();
    echo "Variavel = '{$variavel}'.";
    var_dump($variavel);
    echo '<br>';
    echo soma(2,11);