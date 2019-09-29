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


  <?php include 'codigo_bootstrap.html'; ?>
</head>

<body>
  <div class="container" id="tamanhoContainer" style="margin-top:40px;">
    <h4>Formulário de Edição</h4>
    <form action="_atualizar_produto.php" method="post" style="margin-top:20px;">
      <?php
        $id = $_GET['id'];
        $conexao = include 'conexao.php';
        $sql = "SELECT * FROM produtos WHERE id_produto=$id";
        $result = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($result)) {
            $id_produto   = $array['id_produto'];
            $num_produto  = $array['num_produto'];
            $nome_produto = $array['nome_produto'];
            $categoria    = $array['categoria'];
            $quantidade   = $array['quantidade'];
            $fornecedor   = $array['fornecedor']; ?>
      <div class="form-group">
        <label>Nº Produto</label>
        <input type="number" class="form-control" name="num_produto"
          value="<?php echo $num_produto; ?>" disabled>
        <input type="number" class="form-control" name="id_produto"
          value="<?php echo $id_produto; ?>" style="display:none;">
      </div>
      <div class="form-group">
        <label>Nome Produto</label>
        <input type="text" class="form-control" name="nome_produto"
          value="<?php echo $nome_produto; ?>" required>

      </div>

      <div class="form-group">
        <label>Categoria</label>
        <select name="categoria" class="form-control"
          value="<?php echo $categoria?>">
          <option>Periféricos</option>
          <option>Hardware</option>
          <option>Software</option>
          <option>Celulares</option>
        </select>
      </div>
      <div class="form-group">
        <label>Quantidade do Produto</label>
        <input type="number" class="form-control" name="quantidade"
          value="<?php echo $num_produto; ?>" required>

      </div>
      <div class="form-group">
        <label>Fornecedor</label>
        <select name="fornecedor" class="form-control"
          value="<?php echo $fornecedor?>">
          <option>Fornecedor A</option>
          <option>Fornecedor B</option>
          <option>Fornecedor C</option>
        </select>
      </div>

      <?php
        } ?>
      <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
      </div>
    </form>
  </div>

</body>

</html>