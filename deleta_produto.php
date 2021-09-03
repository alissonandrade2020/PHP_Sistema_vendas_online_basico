<?php 

include "model/db.php";

$id_produto  = $_GET['id_produto'];

$query = "DELETE FROM produtos WHERE id_produto = $id_produto";

mysqli_query($conexao, $query);

header('location:index.php?pagina=produtos');
