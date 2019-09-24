<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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


  <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" id="tamanhoContainer" style="margin-top:40px;">
    <h4>Formulário de Cadastro</h4>
    <form action="_inserir_produto.php" method="post" style="margin-top:20px;">

      <div class="form-group">
        <label>Nº Produto</label>
        <input type="number" class="form-control" name="nrproduto" placeholder="Insira o Nº do produto" required autocomplete="off">

      </div>
      <div class="form-group">
        <label>Nome Produto</label>
        <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o Nome do produto" autocomplete="off" required>

      </div>
      <div class="form-group">
        <label>Quantidade do Produto</label>
        <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade do produto" required>

      </div>

      <div class="form-group">
        <label>Categoria</label>
        <select name="categoria" class="form-control">
          <option>Periféricos</option>
          <option>Hardware</option>
          <option>Software</option>
          <option>Celulares</option>
        </select>
      </div>
      <div class="form-group">
        <label>Fornecedor</label>
        <select name="fornecedor" class="form-control">
          <option>Fornecedor A</option>
          <option>Fornecedor B</option>
          <option>Fornecedor C</option>
        </select>
      </div>
      <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
      </div>
    </form>
  </div>

</body>

</html>