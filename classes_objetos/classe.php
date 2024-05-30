<?php
    $title = 'Primeira Classe';
?>
<div class="titulo"><?= $title ?></div>
<?php
    class Cliente{
        //atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar(){
            return "Nome: {$this->nome} Idade: {$this->idade} ";
        }
    }
$c1 = new Cliente();
$c1->nome = 'Ana Oliveira';
echo $c1->apresentar(), '<br>';

$c2 = new Cliente();
$c2->nome = 'Gabriel Silva';
$c2->idade = 25;
echo $c2->apresentar(), '<br>';