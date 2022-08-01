<?php
  include_once("conexao.php");

  $nmProduto = $_POST["txtProduto"];
  $categoria = $_POST["ddlCategoria"];
  $descProduto = $_POST["txtDescProduto"];

  $sql = "INSERT INTO tbprodutos (nmProduto, idCategoria, descProduto)";
  $sql .= "VALUES ('$nmProduto', '$categoria','$descProduto');";

  if ($conn->query($sql) === TRUE) {
  ?>

  <script>
    alert("Registro salvo com sucesso!");
    window.location = "index.php";
  </script>

  <?php
} else {
  ?>

    <script>
      alert("Registro salvo com sucesso!");
      window.history.back();
    </script>

  <?php
  }
?>