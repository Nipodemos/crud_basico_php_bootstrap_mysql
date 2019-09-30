<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listar Produtos</title>
    <?php include 'codigo_bootstrap.html'; ?>
    <script defer src="https://kit.fontawesome.com/9060385a42.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top: 40px;">
        <br>

        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h3>Lista de Produtos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Núm Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexao = include 'conexao.php';
                $sql = "SELECT * FROM `produtos`";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_produto   = $array['id_produto'];
                    $num_produto  = $array['num_produto'];
                    $nome_produto = $array['nome_produto'];
                    $categoria    = $array['categoria'];
                    $quantidade   = $array['quantidade'];
                    $fornecedor   = $array['fornecedor']; ?>
                    <tr>
                        <td>
                            <?php echo $num_produto  ?>
                        </td>
                        <td>
                            <?php echo $nome_produto ?>
                        </td>
                        <td>
                            <?php echo $categoria    ?>
                        </td>
                        <td>
                            <?php echo $quantidade   ?>
                        </td>
                        <td>
                            <?php echo $fornecedor   ?>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm" style="color: black;" href="atualizar_produto.php?id=<?php echo $id_produto ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
                            <a class="btn btn-danger btn-sm" style="color: black;" href="deletar_produto.php?id=<?php echo $id_produto ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>