<div class="titulo">Integração CSS com PHP</div>

<h1 center>
    <?php
        $ex = "expressar";
        echo 'Olá';
        echo '<br>';
        echo '<small>';
        echo 'Mundo';
        echo '</small>';
    ?>
</h1>

<?= "<div center azul> Outra forma de me '{$ex}'!"  ?>

<br>
<div center ><button dobro><?= "Legal" ?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
    }
</style>