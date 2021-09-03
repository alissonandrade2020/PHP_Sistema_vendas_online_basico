<?php 

include "model/db.php";

$nome_cliente = $_POST['nome_cliente'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$query = "INSERT INTO clientes(nome_cliente, cpf_cnpj) VALUES ('$nome_cliente', '$cpf_cnpj')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=clientes');
