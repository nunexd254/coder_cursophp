<div class="titulo">String</div>

<?php
    echo 'Eu sou uma string <br>';
    var_dump("Eu também");
    echo '<br>';

    #concatenação
    echo "Nós também " . 'somos <br>';
    echo '"Teste"' . "'Teste'", '<br>';
    echo '\'Teste\'' , "\\ <br>";
    print("<p>Também existe o função print!</p>");
    print"<p>Também existe o função print!</p>";

    #algumas funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst('primeira maiuscula');
    echo '<br>' . ucwords('toda a primeira letra de cada palavra será maiuscula');
    echo '<br>' . 'Quantas letras tem aqui? '. strlen('Quantas letras tem aqui? ');
    $string = 'Quantas letras tem aqui também? ';
    //echo '<br>' .  mb_strlen($string, 'utf-8'); //não funcionou
    echo '<br>' . substr('Só uma parte mesmo.',7,6);
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');


