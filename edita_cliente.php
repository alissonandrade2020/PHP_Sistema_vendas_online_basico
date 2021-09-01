<?php 

include 'db.php';

$id_cliente = $_POST['id_cliente'];
$nome_cliente = $_POST['nome_cliente'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$query = "UPDATE clientes SET nome_cliente='$nome_cliente', cpf_cnpj='$cpf_cnpj' WHERE id_cliente = $id_cliente";

#print($query);
mysqli_query($conexao, $query);

header('location:index.php?pagina=clientes');
