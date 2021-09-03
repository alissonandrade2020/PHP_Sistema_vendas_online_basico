<?php 

include 'db.php';

$id_produto = $_POST['id_produto'];
$descricao= $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];


$query = "UPDATE produtos SET descricao ='$descricao', quantidade ='$quantidade', preco = $preco WHERE id_produto = $id_produto";

mysqli_query($conexao, $query);

header('location:index.php?pagina=produtos');
