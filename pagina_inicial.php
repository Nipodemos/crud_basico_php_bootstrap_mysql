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
                        <a href="produto/inserir_produto.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar, editar ou excluir produtos.</p>
                        <a href="produto/listar_produtos.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar categoria</h5>
                        <p class="card-text">Opção para adicionar categorias em nosso estoque.</p>
                        <a href="categoria/inserir_categoria.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Categorias</h5>
                        <p class="card-text">Visualizar, editar ou excluir categorias.</p>
                        <a href="categoria/listar_categorias.php" class="btn btn-primary">Categorias</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar fornecedor</h5>
                        <p class="card-text">Opção para adicionar fornecedores em nosso estoque.</p>
                        <a href="fornecedor/inserir_fornecedor.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Fornecedores</h5>
                        <p class="card-text">Visualizar, editar ou excluir fornecedores.</p>
                        <a href="fornecedor/listar_fornecedores.php" class="btn btn-primary">Fornecedores</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Usuário</h5>
                        <p class="card-text">Opção para adicionar Usuários em nosso estoque.</p>
                        <a href="usuario/inserir_usuario.php" class="btn btn-primary">Cadastro Admin</a>
                        <a href="usuario/inserir_usuario_externo.php" class="btn btn-primary">Cadastro Externo</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Usuários</h5>
                        <p class="card-text">Visualizar, editar ou excluir Usuários.</p>
                        <a href="usuario/listar_usuarios.php" class="btn btn-primary">Usuários</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprovar Usuário</h5>
                        <p class="card-text">Arpovação de usuários inativos</p>
                        <a href="usuario/aprovar_usuario.php" class="btn btn-primary">Aprovar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>