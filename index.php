<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos cadastrados</title>

  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    table,
    td,
    th {
      border: 1px solid #e6e6e6;
      border-collapse: collapse;
      text-align: center;
      padding: 1rem;
    }

    table {
      border-radius: 1rem;
    }

    th {
      background-color: #000;
      padding: 0.25rem;
      color: #fff;
    }

    td {
      background-color: #000;
    }

    table {
      width: 90%;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    h2 {
      color: #000;
      font-size: 2rem;
      padding: 1rem;
      border: 1px solid #000;
      border-radius: 1rem;
    }

    .rodape a {
      display: inline;
      border-radius: 0.8rem;
      background-color: #000055;
      padding: 0.5rem;
      color: #fff;
    }
  </style>

  <script>
    function confirmarExclusao (id, prod) {
      if (window.confirm("Deseja realmente excluir o registro? \n" + id + " - " + prod)) {
        window.location = "excluirProduto.php?idProduto="+id;
      }
    }
  </script>

</head>

<body class="">
  <h2 class="mb-4">Lista de produtos cadastrados</h2>
  

  <?php
  // incorporando o arquivo de conexão
  include_once("conexao.php");
  //definindo a string com o comando SQL
  $sql = "SELECT * FROM `tbprodutos` ORDER BY nmProduto";
  $dadosProdutos = $conn->query($sql); // Aqui ele executou o comando SQL
  // verificando se foi retornado algum registro
  if ($dadosProdutos->num_rows > 0) {
  ?>

    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome do Produto</th>
        <th>Categoria do Produto</th>
        <th>Descrição do produto</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>

      <?php
      while ($exibirProduto = $dadosProdutos->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $exibirProduto["idProduto"]?></td>
          <td><?php echo $exibirProduto["nmProduto"]?></td>
          <?php
            $sqlCategoria = "SELECT * FROM `tbcategoria` WHERE idCategoria = " . $exibirProduto["idCategoria"];
            $dadosCategoria = $conn->query($sqlCategoria);
            $exibirCategoria = $dadosCategoria->fetch_assoc();
          ?>
          <td><?php echo $exibirCategoria["nmCategoria"]?></td>
          <td><?php echo $exibirProduto["descProduto"]?></td>
          
          <td><a href="editarProduto.php?idProduto=<?php echo $exibirProduto["idProduto"]?>"><img width="25" height="25" src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></td>

          <td><a href="#" onclick='confirmarExclusao(<?php echo $exibirProduto["idProduto"]?>, "<?php echo $exibirProduto["nmProduto"]?>")'><img width="25" height="25" src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt="Excluir"></a></td>
        </tr>
      <?php
      }
      ?>
    </table>

  <?php
  } else {
    echo "Nenhum registro encontrado!";
  }
  ?>
  <div class="rodape mt-3">
    <!-- Adicionar produto -->
    <a href="novoProduto.php" style="text-decoration: none;">Adicionar Produto</a>
    <!-- Fim adicionar produto -->
    <!-- Adicionar categoria -->
    <a href="novaCategoria.php" style="text-decoration: none;">Adicionar Categoria</a>
    <!-- Fim adicionar categoria -->
  </div>
  <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>