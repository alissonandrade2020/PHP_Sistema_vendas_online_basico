<?php 

include "model/db.php";

$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$query = "INSERT INTO produtos(descricao, quantidade, preco) VALUES('$descricao', '$quantidade', '$preco')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=produtos');


