<?php
  include_once("conexao.php");

  $nmCategoria = $_POST["txtCategoria"];

  $sql = "INSERT INTO tbcategoria (nmCategoria, idCategoria)";
  $sql .= "VALUES ('$nmCategoria', DEFAULT);";

  if ($conn->query($sql) === TRUE) {
  ?>

  <script>
    alert("Categoria salva com sucesso!");
    window.location = "index.php";
  </script>

  <?php
} else {
  ?>

    <script>
      alert("Erro ao salvar categoria!");
      window.history.back();
    </script>

  <?php
  }
?>