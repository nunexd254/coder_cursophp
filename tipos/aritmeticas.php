<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1 , '<br>';
    echo 1 + 2.5 , '<br>';
    $x = 1 + 2.5;
    var_dump($x);
    echo 10 + 2, '<br>';
    echo 2 * 5 , '<br>';
    echo 7 / 4 , '<br>';
    echo intdiv(7 , 4), '<br>'; //apenas trunca
    echo round(7 / 4), '<br>';//arredonda
    echo 7 % 4, '<br>'; //modulo ou resto da divisão
    echo 4**2,'<br>';

    #Precedencia de operadores
    // () => ** => / *  % => + -

    echo '<p>Exemplo de Precedência</p>';
    echo  2 + 3 * 4 , '<br>';
    echo  (2 + 3) * 4 , '<br>';
    echo  2 + 3 * 4 ** 2, '<br>';
    echo  ((2 + 3) * 4) ** 2, '<br>';