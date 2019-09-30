<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <?php include 'codigo_bootstrap.html'; ?>
</head>

<body>
    <div class="container" style="margin: 100px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
                        <a href="inserir_produto.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar, editar ou excluir produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar categoria</h5>
                        <p class="card-text">Opção para adicionar categorias em nosso estoque.</p>
                        <a href="inserir_categoria.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>