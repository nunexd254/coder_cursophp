<?php
    $title = 'Argumentos Padrão';
?>
<div class="titulo"><?= $title ?></div>
<?php
    function saudacao($nome = 'Senhor (a)', $sobrenome = 'Cliente'){
        return "Bem vindo, $nome $sobrenome!<br>";
    }

    echo saudacao();
    echo saudacao(null);
    echo saudacao(null,null);
    echo saudacao('Mestre', 'Supremo');