<?php
$conexao = include '../conexao.php';

include '../scripts/password.php';

$nome_usuario   = $_POST['nome'];
$email_usuario  = $_POST['email'];
$senha_usuario  = $_POST['senha'];
$nivel_usuario  = $_POST['nivel_de_acesso'];
$status_usuario = 1;
#status_usuario 1 é igual a ativo


$sql = "INSERT INTO usuarios(nome_usuario,email_usuario,senha_usuario,nivel_usuario,status_usuario) values('$nome_usuario','$email_usuario',sha1('$senha_usuario'), $nivel_usuario, $status_usuario);";

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