<?php 
  include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Produtos</title>
</head>
<body>

  <h2>Cadastrar Produtos</h2>
  <form action="inserirProduto.php" method="post">
    <!-- Nome do Produto -->
    <label for="txtProduto">Nome do Produto: </label>
    <br>
    <input type="text" name="txtProduto" id="txtProduto" required autofocus placeholder="Nome do Produto">
    <br>
    <br>
    <!-- Fim Nome do Produto-->

    <!-- Categoria -->
    <label for="ddlCategoria">Categoria do produto: </label>
    <br>
    <!-- Lista -->
    <select name="ddlCategoria" id="ddlCategoria">
      <option value="0"> -- Selecione uma categoria --</option>
      <?php

        // Realizar consulta e logo depois executa
        $sql = "SELECT * FROM tbcategoria ORDER BY nmCategoria asc";
        $registro = $conn->query($sql);

        // Pra cada valor em $registro, ele cria um array associativo e vai mapeando até chegar no fim
        while ($exibir = $registro->fetch_assoc()) {
      ?>
        <option value="<?php echo $exibir["idCategoria"]?>"><?php echo $exibir["nmCategoria"]?></option>
      <?php 
      }
      ?>
    </select>
    <!-- Fim Lista -->
    <br>
    <br>
    <!-- Fim Categoria -->

    <!-- Descrição -->
    <label for="txtDescProduto">Descrição do Produto: </label>
    <br>
    <textarea name="txtDescProduto" id="txtDescProduto" cols="30" rows="10" placeholder="Descrição do Produto"></textarea>
    <br>
    <br>
    <!-- Fim Descrição -->

    <!-- Enviar/Excluir -->
    <input type="submit" value="Salvar">
    <input type="reset" value="Cancelar">
    <!-- Fim Enviar/Excluir -->
  </form>
  
</body>
</html>