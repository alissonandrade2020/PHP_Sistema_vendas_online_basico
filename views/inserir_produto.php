<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo produto</h1>
<form method="post" action="processa_produto.php">
	<br>
	<label class="badge badge-secondary">Nome do produto</label><br>
	<input class="form-control" type="text" name="descricao" placeholder="Insira o nome do produto" required>
	<br><br>
	<label class="badge badge-secondary">Preço do Produto</label><br>
	<input class="form-control"  type="text" name="preco" placeholder="Insira o valor do produto" required><br><br>
	<input type="submit" class="btn btn-success" value="Inserir produto">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_produtos)){ ?>
		<?php if($linha['id_produto'] == $_GET['editar']){ ?>

			<h1>Editar produto</h1>
			<form method="post" action="edita_produto.php">
				<input type="hidden" name="id_produto" value="<?php echo $linha['id_produto']; ?>">
				<br>
				<label class="badge badge-secondary">Nome do produto</label><br>
				<input class="form-control" type="text" name="descricao" placeholder="Insira o nome do produto" value="<?php echo $linha['descricao']; ?>">
				<br><br>
				<label class="badge badge-secondary">Preço do Produto</label><br>
				<input class="form-control" type="text" name="preco" placeholder="Insira o valor do produto"  value="<?php echo $linha['preco']; ?>"><br><br>
				<input class="btn btn-success" type="submit" value="Editar produto">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
