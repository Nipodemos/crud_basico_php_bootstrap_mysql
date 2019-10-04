<?php
$conexao = include '../conexao.php';

include '../scripts/password.php';

$nome             = $_POST['nome'];
$email            = $_POST['email'];
$senha            = $_POST['senha'];
$nivel_de_acesso  = $_POST['nivel_de_acesso'];
$status = 1;
#status 1 é igual a ativo


$sql = "INSERT INTO usuarios(nome,email,senha,nivel_de_acesso,status) values('$nome','$email',sha1('$senha'), $nivel_de_acesso, '$status');";

$query = mysqli_query($conexao, $sql);

include '../codigo_bootstrap.html';
?>



<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Usuário Adicionado com sucesso!</h4>
        <div style="padding-top: 20px;"></div>
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar para o início</a>
        <a href="inserir_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Usuario</a>
        <a href="listar_usuarios.php" role="button" class="btn btn-sm btn-primary">Listar Usuários</a>
    </center>
</div>