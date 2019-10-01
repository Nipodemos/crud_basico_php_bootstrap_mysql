<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Primeiro Script</title>

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            background-color: #FF1168;
            color: #FFFFFF;
            font-weight: bold;
        }
    </style>


    <?php include '../codigo_bootstrap.html'; ?>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top:40px;">

        <div style="text-align: right;">
            <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h4>Formulário de Cadastro</h4>
        <form action="_inserir_produto.php" method="post" style="margin-top:20px;">

            <div class="form-group">
                <label>Nº Produto</label>
                <input type="number" class="form-control" name="num_produto" placeholder="Insira o Nº do produto" required autocomplete="off">

            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nome_produto" placeholder="Insira o Nome do produto" autocomplete="off" required>

            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                    <?php
                    $conexao = include '../conexao.php';
                    $sql = 'SELECT * FROM categorias ORDER BY nome_categoria ASC';
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)) {
                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];
                        ?>

                        <option> <?php echo $nome_categoria ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade do Produto</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade do produto" required>

            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select name="fornecedor" class="form-control">
                    <?php
                    $conexao = include '../conexao.php';
                    $sql = 'SELECT * FROM fornecedores ORDER BY nome_fornecedor ASC';
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)) {
                        $id_fornecedor = $array['id_fornecedor'];
                        $nome_fornecedor = $array['nome_fornecedor'];
                        ?>

                        <option> <?php echo $nome_fornecedor ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

</body>

</html>