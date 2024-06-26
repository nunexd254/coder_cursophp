<?php
    $title = 'Consultar Registros';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
ini_set('display_errors',1);
    require_once "conexao.php";

    $sql = "SELECT id,nome,nascimento,email FROM cadastro";
    $conexao = novaConexao();

    $resultado = $conexao->query($sql);

    $registros = [];

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            $registros[]= $row;
        }
    }elseif($conexao->error){
        echo "Erro: " . $conexao->error;
    }

    //var_dump($registros);
    $conexao->close();
?>

<table class="table">
    <thead>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>