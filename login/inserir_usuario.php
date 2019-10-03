<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include '../codigo_bootstrap.html';
    ?>
</head>

<body>
    <div class="container" style="width: 400px; margin-top: 40px;">
        <h4>Cadastro de Usuários</h4>
        <form action="post">
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" name="nome" class="form-control" required autocomplete="off" placeholder="Digite aqui seu nome">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" required placeholder="Digite aqui seu email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input id="senha" type="password" name="senha" class="form-control" required autocomplete="off" placeholder="Mínimo 8 caracteres">
            </div>
            <div class="form-group">
                <label for="senha_repetida">Repita a Senha</label>
                <input id="senha_repetida" type="password" name="senha_repetida" class="form-control" required autocomplete="off" placeholder="Deve ser igual as duas" oninput="validaSenha(this)">
            </div>
            <div class="form-group">
                <label>Nível de Acesso</label>
                <select name="nivel_usuario" class="form-control">
                    <option value="">Administrador</option>
                    <option value="">Funcionário</option>
                    <option value="">Conferente</option>
                </select>
            </div>
            <div style="text-align: right">
                <button style="margin-top: 15px;" type="submit" class="btn btn-success btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('senha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
</body>

</html>