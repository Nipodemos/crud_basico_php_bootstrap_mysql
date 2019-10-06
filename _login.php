<?php
$conexao = include 'conexao.php';
include 'scripts/password.php';

$email_digitado = $_POST['email'];
$senha_digitada = $_POST['senha'];

$sql = "SELECT senha_usuario, status_usuario FROM usuarios WHERE email_usuario='$email_digitado'";
$query = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($query);

if ($total > 0) {
    while ($array = mysqli_fetch_array($query)) {
        $senha_vindo_do_db = $array['senha_usuario'];
        $senha_digitada_codificada = sha1($senha_digitada);
        if ($senha_vindo_do_db == $senha_digitada_codificada) {
            $status_usuario = $array(['status_usuario']);

            if ($status_usuario == 1) {
                session_start();
                $_SESSION['usuario'] = $email_digitado;
                header("Location: pagina_inicial.php");
            } else {
                header("Location: erro_nao_aprovado.php");
            }
        } else {
            header("Location: erro.php");
        }
    }
} else {
    header("Location: erro.php");
}
