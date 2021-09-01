<?php

# Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'produtos';
	}
}

else{
	$pagina = 'home';
	
}

switch($pagina){	
	case 'produtos': include 'views/produtos.php'; break;
	case 'clientes': include 'views/clientes.php'; break;
	case 'compras': include 'views/compras.php'; break;
	case 'inserir_cliente': include 'views/inserir_cliente.php'; break;
	case 'inserir_compra': include 'views/inserir_compra.php'; break;
	case 'inserir_produto': include 'views/inserir_produto.php'; break;	
	default: include 'views/home.php'; break;	
	
}

# Rodapé
include 'footer.php';
