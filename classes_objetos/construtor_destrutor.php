<?php
    $title = 'Construtor e Destrutor';
?>
<div class="titulo"><?= $title ?></div>
<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18)
    {
        echo 'Construtor invocado!<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo '<br> & Morreu!';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos";
    }
}

$pessoa = new Pessoa('Arthur', 40);
$pessoa->apresentar();
unset($pessoa);