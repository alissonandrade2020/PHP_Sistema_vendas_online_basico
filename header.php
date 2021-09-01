<!DOCTYPE html>
<html>
<head>
	<title> Alisson de Andrade Araújo</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilo.css">
  
</head>

<body>
	
	<header>		
		<div class="container">
			<a href="?pagina=home">
			<img src="img/logooficial.jpg" title="Logo" alt="Logo"></a>
			<div id="menu">		    				
				<a href="?pagina=clientes">Clientes</a>
				<a href="?pagina=produtos">Produtos</a>
				<a href="?pagina=compras">Compras</a>														
				<?php if(isset($_SESSION['login'])){ ?>
					<a href="logout.php">
						<?php echo $_SESSION['usuario']; ?> 
						(sair)		
					</a>
				<?php } ?>								
			</div>												
		</div>						
	</header>
	
		
	<div id="conteudo" class="container">

	