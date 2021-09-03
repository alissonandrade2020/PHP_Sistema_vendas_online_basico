<?php 

include "model/db.php";

$id_cliente_produto = $_GET['id_cliente_produt'];

$query = "DELETE FROM clientes_produtos WHERE id_cliente_produto = $id_cliente_produto";

mysqli_query($conexao, $query);

header('location:index.php?pagina=compras');
