<?php
    $title = 'Desafio Data';
?>
<div class="titulo"><?= $title ?></div>
<?php
class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        $dataCompleta = "{$this->dia}/{$this->mes}/{$this->ano}";
        return $dataCompleta;
    }
}
$c1 = new Data();
$c1->dia = 16;
echo $c1->apresentar(), '<br>';