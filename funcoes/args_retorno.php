<?php
    $title = 'Argumentos e Retornos';
?>
<div class="titulo"><?= $title ?></div>
<?php
    function obterMensagem(){
        return 'Seja bem vindo (a)!';
    }

    $m = obterMensagem();
    echo $m;
    echo '<br>';
    echo obterMensagem();
    echo '<br>';
    var_dump(obterMensagem());

    function obterMensagemComNome(string $nome){
        return "Bem vindo {$nome}! <br>";
    }

    echo '<br>', obterMensagemComNome('João');

    function soma(float $a, float $b){
        $soma = $a + $b;
        return $soma;
    }
    $x = 10;
    $y = 10.5;
    echo '<br>', soma($x, $y);