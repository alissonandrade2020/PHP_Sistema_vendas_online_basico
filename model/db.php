<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "indra";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM clientes";
$consulta_clientes = mysqli_query($conexao, $query);

$query = "SELECT * FROM produtos";
$consulta_produtos = mysqli_query($conexao, $query);

$query = "SELECT clientes_produtos.id_cliente_produto, clientes.nome_cliente, produtos.descricao 
			FROM clientes, produtos, clientes_produtos
			WHERE clientes_produtos.id_cliente = clientes.id_cliente
			AND clientes_produtos.id_cliente = clientes.id_cliente";

//$query = "SELECT *
//			FROM clientes, produtos, clientes_produtos
//			WHERE clientes_produtos.id_cliente = clientes.id_cliente
//			AND clientes_produtos.id_cliente = clientes.id_cliente";		
$consulta_compras = mysqli_query($conexao, $query);