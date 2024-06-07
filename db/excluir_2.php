<?php
    $title = 'Excluir Registros';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    ini_set('display_errors',1);
    require_once "conexao.php";
    $conexao = novaConexao();

    if($_GET['excluir']){
        $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($excluirSQL);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

    $registros = [];

    $sql = "SELECT * FROM cadastro";
    $resultado = $conexao->query($sql);

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            $registros[] = $row;
        }
    }elseif($conexao->error){
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
?>

<table class="table table-hover table-striped">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td>
                    <a href="exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>" 
                    class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > *{
        font-size: 1.2rem;
    }
</style>