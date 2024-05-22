<div class="titulo">Integração HTML com PHP</div>

<h1>
    <?php
        $ex = "expressar";
        echo 'Olá';
        echo '<br>';
        echo '<small>';
        echo 'Mundo';
        echo '</small>';
    ?>
</h1>

<?= "<div> Outra forma de me '{$ex}'!"; ?>

<br>
<div><button><?= "Legal"; ?></button></div>