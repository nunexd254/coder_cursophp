<?php
    namespace Outro\Nome;
    $title = 'Use\As';
?>
<div class="titulo"><?= $title ?></div>
<?php
    echo __NAMESPACE__ . '<br>';

    include('use_as_arquivo.php');

    function soma($a,$b){
        return $a . $b; //Eu sei
    }

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\Constante . '<br>';

use const \Nome\Bem\Grande\Constante;

echo Constante . '<br>';

use Nome\Bem\Grande as ctx;

echo  soma(1,2);
echo '<br>';
echo ctx\soma(1,2);

use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100,200). '<br>';


$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();
