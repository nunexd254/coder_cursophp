<?php
    $title = 'Interface';
?>
<div class="titulo"><?= $title ?></div>
<?php
interface Animal {
    function respirar();
}

interface Canino {
    function latir(): string;
}

class Cachorro implements Animal, Canino{
    function respirar()
    {
        $respirar = "inspirei <br> expirei <br> respirei <br>";
        return $respirar;
    }
    function latir(): string
    {
        return "au au";
    }
}
$animal = new Cachorro();
echo $animal->respirar();
echo $animal->latir();