<?php
    $title = 'Formulário';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h2>Cadastro</h2>

<?php
    if(count($_POST) > 0){

        $erros = [];

        if(!filter_input(INPUT_POST, "nome")){
            $erros['nome'] = 'Nome é obrigatório';
        }
        if(filter_input(INPUT_POST,"nascimento")){
            $data = DateTime::createFromFormat('d/m/Y',$_POST['nascimento']);
            if(!$data){
                $erros['nascimento'] =  'Data deve estar no padrão dd/mm/aaaa.';
            }
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $erros['email'] =  "E-mail inválido";
        }
        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
            $erros['site'] =  "Site inválido";
        }

        $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];
        $salarioConfig = ['options' => ['decimal' => ',']];
    
    
        if(!filter_var($_POST['filhos'],FILTER_VALIDATE_INT,$filhosConfig) 
            && $_POST['filhos'] != 0){
                $erros['filhos'] =  'Quantidade de filhos inválida';
        }
        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT,$salarioConfig)){
            $erros['salario'] =  'Salário inválido';
        }
        var_dump($erros);

    }
?>
<?php foreach($erros as $erro):?>
    <!--<div class="alert alert-danger " role="alert">
         //$erro 
    </div>-->
<?php endforeach ?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" <?= $erros['nome'] ? 'is-invalid' : '' ?>
             id="nome" name="nome" placeholder="Nome"
            value="<?= $_POST['nome']?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" <?= $erros['nascimento'] ? 'is-invalid' : '' ?>
            id="nascimento" name="nascimento" placeholder="Nascimento"
            value="<?= $_POST['nascimento']?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" <?= $erros['email'] ? 'is-invalid' : '' ?>
            id="email" name="email" placeholder="E-mail"
            value="<?= $_POST['email']?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" <?= $erros['site'] ? 'is-invalid' : '' ?>
            id="site" name="site" placeholder="Site"
            value="<?= $_POST['site']?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde Filhos</label>
            <input type="number" class="form-control" <?= $erros['filhos'] ? 'is-invalid' : '' ?>
            id="filhos" name="filhos" placeholder="Qtde Filhos"
            value="<?= $_POST['qtde_filhos']?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" <?= $erros['salario'] ? 'is-invalid' : '' ?>
            id="salario" name="salario" placeholder="Salário"
            value="<?= $_POST['salario']?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>