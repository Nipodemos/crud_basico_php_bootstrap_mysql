<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Aprovar Usuário</title>
    <?php include '../codigo_bootstrap.html'; ?>
</head>

<body>
    <div class="container" style="margin-top: 40px;">
        <br>

        <div style="text-align: right;">
            <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h3>Lista de Produtos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Definir como</th>
                    <th scope="col">Excluir</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $conexao = include '../conexao.php';
                $sql = "SELECT * FROM `usuarios` where `status_usuario`=0";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_usuario   = $array['id_usuario'];
                    $nome_usuario = $array['nome_usuario'];
                    $email_usuario   = $array['email_usuario'];
                    $nivel_usuario = $array['nivel_usuario']
                    ?>
                    <tr>
                        <td>
                            <?php echo $nome_usuario  ?>
                        </td>
                        <td>
                            <?php echo $email_usuario ?>
                        </td>
                        <td>
                            <?php echo $nivel_usuario ?>
                        </td>
                        <td>
                            <a class="btn btn-success btn-sm" style="color: white;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="far fa-check-circle"></i>&nbsp;Administrador</a>
                            <a class="btn btn-warning btn-sm" style="color: white;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="far fa-check-circle"></i>&nbsp;Funcionário</a>
                            <a class="btn btn-dark btn-sm" style="color: white;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="far fa-check-circle"></i>&nbsp;Conferente</a>

                        </td>
                        <td>

                            <a class="btn btn-danger btn-sm" style="color: black;" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    <script defer src="https://kit.fontawesome.com/9060385a42.js" crossorigin="anonymous"></script>
</body>

</html>