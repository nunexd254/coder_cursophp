<?php
    $title = '$_POST';
?>
<div class="titulo"><?= $title ?></div>
<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado" >
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>
<style>
    form > * {
        font-size: 1.8rem;
    }

</style>

<?php
    var_dump($_POST);
echo '<br>' . count($_POST);