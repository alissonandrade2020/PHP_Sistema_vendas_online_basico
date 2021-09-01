<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo Cliente</h1>
<br>
<br>
<form method="post" action="processa_cliente.php">
	<br>
	<label class="badge badge-secondary">Nome do Cliente:</label><br>
	<input class="form-control" type="text" name="nome_cliente" placeholder="Insira o nome do cliente" required>
	<br>
	<label class="badge badge-secondary">CPF/CNPJ</label><br>
	<input class="form-control" type="text" name="cpf_cnpj" placeholder="Insira o seu cpf/cnpj" required>
	<br>	
	<br>
	<input type="submit" class="btn btn-success" value="Inserir cliente">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_clientes)){ ?>
		<?php if($linha['id_cliente'] == $_GET['editar']){ ?>
			<h1>Editar cliente</h1>
				<form method="post" action="edita_cliente.php">
					<input type="hidden" name="id_cliente" value="<?php echo $linha['id_cliente']; ?>">
					<br>
					<label class="badge badge-secondary">Nome do Cliente:</label><br>
					<input class="form-control" type="text" name="nome_cliente" value="<?php echo $linha['nome_cliente']; ?>">
					<br>
					<label class="badge badge-secondary">CPF/CNPJ</label><br>
					<input class="form-control" type="text" name="cpf_cnpj" value="<?php echo $linha['cpf_cnpj']; ?>">					
					<br>					
					<input class="btn btn-success" type="submit" value="Editar cliente">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>