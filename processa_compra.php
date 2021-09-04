<?php 

include "model/db.php";

$id_cliente = $_POST['escolha_cliente'];
$id_produto = $_POST['escolha_produto'];

$query = "INSERT INTO cliente_produto(id_cliente, id_produto) VALUES ('$id_cliente', '$id_produto')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=compras');
