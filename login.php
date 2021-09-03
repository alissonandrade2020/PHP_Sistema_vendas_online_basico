<?php 

$data = date("Y-m-d");

include "model/db.php";

$usuario = addslashes($_POST['usuario']);

# antes
$senha = md5($_POST['senha']);

$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;

	header('location:index.php');
}
else{
	header('location:index.php?erro');
}

