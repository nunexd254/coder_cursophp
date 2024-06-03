<?php
    $title = 'Download';
?>
<div class="titulo"><?= $title ?></div>

<?php
//ini_set('display_errors',1);
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/uploads';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp,$arquivo)){
    echo "<br> Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
}else{
    echo "<br>Erro no upload de arquivo!";
}
#FICOU FALTANDO AULAS 213,212 
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo) : ?>
        <li>
            <a href="../files/<?= $arquivo ?>">
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>   
</ul>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>
