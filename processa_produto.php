<?php 

include 'db.php';

$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$query = "INSERT INTO produtos(descricao, preco) VALUES ('$descricao', $preco)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=produtos');
