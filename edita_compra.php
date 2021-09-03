<?php 

include "model/db.php";

$id_compra = $_POST['id_compra'];
$nome_curso = $_POST['nome_curso'];
$quantidade = $_POST['carga_horaria'];


$query = "UPDATE compras SET nome_curso='$nome_curso', carga_horaria= $carga_horaria WHERE id_curso = $id_curso";


mysqli_query($conexao, $query);

header('location:index.php?pagina=compras');
