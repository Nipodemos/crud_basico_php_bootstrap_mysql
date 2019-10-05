<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php include 'codigo_bootstrap.html'; ?>
    <style>
        #tamanho {
            width: 350px;
            -webkit-box-shadow: 10px 10px 18px 0px rgba(140, 135, 140, 1);
            -moz-box-shadow: 10px 10px 18px 0px rgba(140, 135, 140, 1);
            box-shadow: 10px 10px 18px 0px rgba(140, 135, 140, 1);
        }
    </style>
</head>

<body>
    <div id="tamanho" class="container" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
        <form style="padding:10px;" action="_login.php" method="post">
            <div class="form-group">
                <center><img src="../imagens/cadeado.png" width="200px"></center>
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" required>
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
                <div style="text-align:right">
                    <button style="margin-top: 15px;" type="submit" class="btn btn-success btn-sm">Entrar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>