<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir novo Fornecedor</title>

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


    <?php include 'codigo_bootstrap.html'; ?>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top:40px;">

        <div style="text-align: right;">
            <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h4>Formulário de Cadastro</h4>
        <form action="categoria/_inserir_categoria.php" method="post" style="margin-top:20px;">


            <div class="form-group">
                <label>Nome Fornecedor</label>
                <input type="text" class="form-control" name="nome_fornecedor" placeholder="Insira o Nome do fornecedor" autocomplete="off" required>

            </div>

            <div style="text-align: right">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

</body>

</html>