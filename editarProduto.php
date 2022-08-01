<?php 
  include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar produto</title>
</head>
<body>
  <h2>Editar Produto</h2>
  
  <?php 

    $idProduto = $_GET["idProduto"];
    $sql = "SELECT * FROM `tbprodutos` WHERE `idProduto` = $idProduto";
    $executa = $conn->query($sql);
    $produto = $executa->fetch_assoc();
   
  ?>


  <form action="updateProduto.php" method="post">
    <!-- Nome do Produto -->
    <label for="txtId">Id Produto: </label>
    <br>
    <input type="text" name="txtId" id="txtId" value="<?php echo $produto["idProduto"] ?>" readonly>

    <br>

    <label for="txtProduto">Nome do Produto: </label>
    <br>
    <input type="text" name="txtProduto" id="txtProduto" value="<?php echo $produto["nmProduto"] ?>" required autofocus placeholder="Nome do Produto">
    <br>
    <br>
    <!-- Fim Nome do Produto-->

    <!-- Categoria -->
    <label for="ddlCategoria">Categoria do produto: </label>
    <br>
    <select name="ddlCategoria" id="ddlCategoria">
      <option value="0"> -- Selecione uma categoria --</option>
      <?php

        // Realizar consulta e logo depois executa
        $sql = "SELECT * FROM tbcategoria ORDER BY nmCategoria asc";
        $registro = $conn->query($sql);

        // Pra cada valor em $registro, ele cria um array associativo e vai mapeando até chegar no fim
        while ($exibir = $registro->fetch_assoc()) {
      ?>
        <option value="<?php echo $exibir["idCategoria"]?>" <?php echo ($exibir["idCategoria"] == $produto["idCategoria"])?"selected":""?> ><?php echo $exibir["nmCategoria"]?></option>
      <?php
      }
      ?>
    </select>
    <br>
    <br>
    <!-- Fim Categoria -->

    <!-- Descrição -->
    <label for="txtDescricao">Descrição do Produto: </label>
    <br>
    <textarea name="txtDescricao" id="txtDescricao" cols="30" rows="10" placeholder="Descrição do Produto"><?php echo $produto["descProduto"];?></textarea>
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