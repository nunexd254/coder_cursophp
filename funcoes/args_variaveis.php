<?php
    $title = 'Argumentos Variáveis';
?>
<div class="titulo"><?= $title ?></div>
<?php
    function somaCompleta(...$numeros){
        $soma = 0;
        foreach($numeros as $num){
            $soma += $num;
        }
        return $soma;
    }

    echo somaCompleta(2,3,5,7,9);
    $array = [5,6,8];
    echo '<br>' . somaCompleta(...$array);

    function membros($titular, ...$dependentes){
        echo "Titular: $titular <br>";

        if($dependentes){
            foreach($dependentes as $dep){
                echo "Dependente: $dep <br>";
            }
        }
    }
    echo '<br>';
    membros("Ana Silva","Pedro","Rafaela","Amanda");