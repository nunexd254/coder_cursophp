<?php
    $title = 'Desafio Switch';
?>
<div class="titulo"><?= $title ?></div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
    <!-- <input type="submit" value="Converter"> -->
</form>
<style>
    form > *{
        font-size: 1.8rem;

    }

</style>
<?php
    const FATOR_KM_MILHA = 0.621371;
    const FATOR_METRO_KM = 1000;
    const FATOR_CEL_FAH = 1.8;
    $param = $_POST['param'] ?? 0;

    switch($_POST['conversao']){
        case 'km-milha':
            $distancia = $param  * FATOR_KM_MILHA;
            $mensagem = "$param Km = $distancia Milhas";
            break;
        case 'milha-km':
            $distancia = $param  / FATOR_KM_MILHA;
            $mensagem = "$param Milhas = $distancia Km";
            break;
        case 'metro-km':
            $distancia = $param  / FATOR_METRO_KM;
            $mensagem = "$param Metro = $distancia Km";
            break;
        case 'km-metro':
            $distancia = $param  * FATOR_METRO_KM;
            $mensagem = "$param Km = $distancia Metros";
            break;
        case 'cel-fah':
            $conversao = $param  * FATOR_CEL_FAH + 32;
            $mensagem = "{$param}º Celsius = {$conversao}º Farenheit";
            break;
        case 'fah-cel':
            $conversao = ($param - 32) * (1 / FATOR_CEL_FAH);
            $mensagem = "{$param}º Farenheit = {$conversao}º Celsius";
            break;
        default:
            $mensagem = "Nenhum valor foi calculado";  
    }

    echo "<p>$mensagem</p>";


